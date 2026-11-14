<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PacificV4Service
{
    protected string $baseUrl;
    protected ?string $token;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.pacific.url', ''), '/');
        $this->token = config('services.pacific.token');
    }

    /**
     * Ambil daftar produk aktif dari PacificV4 API
     *
     * @return array
     */
    public function getProducts(): array
    {
        try {
            $client = Http::timeout(5)->withoutVerifying();

            if ($this->token) {
                $client = $client->withToken($this->token);
            }

            $response = $client->get("{$this->baseUrl}/landingpage/products");

            if ($response->successful() && $response->json('success')) {
                return $response->json('data') ?? [];
            }

            Log::warning('PacificV4 getProducts unsuccessful: ' . $response->body());
            return $this->getFallbackProducts();
        } catch (\Exception $e) {
            Log::error('PacificV4 getProducts failed: ' . $e->getMessage());
            return $this->getFallbackProducts();
        }
    }

    /**
     * Fallback produk jika server PacificV4 tidak dapat dihubungi
     */
    protected function getFallbackProducts(): array
    {
        return [
            [
                'kode_produk' => 'P1000',
                'nama_produk' => 'PREMIUM POUCH 1000 GR',
                'short_name' => 'Premium Pouch 1000 Gr',
                'kategori' => 'SWAN',
                'jenis_produk' => 'SAUS PREMIUM',
                'satuan' => 'DUS',
                'isi_dus' => '12 Pcs/Dus',
                'type' => 'Standing Pouch',
                'image' => 'swan-pouch.png',
                'harga_dus' => 94595,
                'harga_pcs' => 0,
            ],
            [
                'kode_produk' => 'AB',
                'nama_produk' => 'AIDA BESAR 500 GR',
                'short_name' => 'Aida Besar 500 Gr',
                'kategori' => 'AIDA',
                'jenis_produk' => 'CABE GILING',
                'satuan' => 'DUS',
                'isi_dus' => '30 Pcs/Dus',
                'type' => 'Cabe Bubuk Alami',
                'image' => 'aida-pouch.png',
                'harga_dus' => 798490,
                'harga_pcs' => 0,
            ],
            [
                'kode_produk' => 'PP500',
                'nama_produk' => 'PREMIUM POUCH 500 GR',
                'short_name' => 'Premium Pouch 500 Gr',
                'kategori' => 'SWAN',
                'jenis_produk' => 'SAUS PREMIUM',
                'satuan' => 'DUS',
                'isi_dus' => '12 Pcs/Dus',
                'type' => 'Standing Pouch',
                'image' => 'swan-pouch.png',
                'harga_dus' => 63000,
                'harga_pcs' => 5250,
            ],
            [
                'kode_produk' => 'AR',
                'nama_produk' => 'AIDA RENTENG 25 GR',
                'short_name' => 'Aida Renteng 25 Gr',
                'kategori' => 'AIDA',
                'jenis_produk' => 'CABE GILING',
                'satuan' => 'DUS',
                'isi_dus' => '240 Pcs/Dus',
                'type' => 'Cabe Bubuk Alami',
                'image' => 'aida-pouch.png',
                'harga_dus' => 394570,
                'harga_pcs' => 0,
            ],
            [
                'kode_produk' => 'DEP',
                'nama_produk' => 'SAUS EXTRA PEDAS',
                'short_name' => 'Saus Extra Pedas',
                'kategori' => 'SWAN',
                'jenis_produk' => 'SAOS BAWANG',
                'satuan' => 'DUS',
                'isi_dus' => '20 Pcs/Dus',
                'type' => 'Kemasan Sachet',
                'image' => 'swan-sachet.png',
                'harga_dus' => 41563,
                'harga_pcs' => 0,
            ],
            [
                'kode_produk' => 'SP8',
                'nama_produk' => 'SAUS STICK PREMIUM',
                'short_name' => 'Saus Stick Premium',
                'kategori' => 'SWAN',
                'jenis_produk' => 'SAUS PREMIUM',
                'satuan' => 'DUS',
                'isi_dus' => '480 Pcs/Dus',
                'type' => 'Kemasan Sachet',
                'image' => 'swan-sachet.png',
                'harga_dus' => 53813,
                'harga_pcs' => 0,
            ],
        ];
    }

    /**
     * Kirim data komplain ke PacificV4 via API
     *
     * @param array $data
     * @param \Illuminate\Http\UploadedFile|null $lampiran
     * @return array
     */
    public function kirimKomplain(array $data, $lampiran = null): array
    {
        try {
            $client = Http::timeout(15);

            if ($this->token) {
                $client = $client->withToken($this->token);
            }

            // Jika ada lampiran berkas / foto
            if ($lampiran) {
                $response = $client->attach(
                    'lampiran',
                    file_get_contents($lampiran->getRealPath()),
                    $lampiran->getClientOriginalName()
                )->post("{$this->baseUrl}/komplain", $data);
            } else {
                $response = $client->post("{$this->baseUrl}/komplain", $data);
            }

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json(),
                    'message' => $response->json('message') ?? 'Komplain berhasil dikirim ke sistem.',
                ];
            }

            Log::error('PacificV4 API Error: ' . $response->body());
            return [
                'success' => false,
                'message' => $response->json('message') ?? 'Gagal memproses komplain di server pusat.',
                'status' => $response->status(),
            ];
        } catch (\Exception $e) {
            Log::error('PacificV4 Connection Failed: ' . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Tidak dapat terhubung ke server pusat. Silakan coba beberapa saat lagi.',
            ];
        }
    }
}

