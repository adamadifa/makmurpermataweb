@extends('layouts.app')

@section('title', 'Layanan Pengaduan Pelanggan - Makmur Permata')

@section('content')
<div class="bg-gradient-to-b from-[#e4002b]/10 via-[#fdf8f5] to-[#fdf8f5] py-12 lg:py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Info -->
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-red-100 text-[#e4002b] mb-3">
                Customer Care & Quality Control
            </span>
            <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-stone-900 tracking-tight">
                FORMULIR KELUHAN PELANGGAN
            </h1>
            <p class="mt-2 text-sm text-stone-600 max-w-lg mx-auto">
                Kepuasan Anda adalah prioritas kami. Sampaikan kritik, saran, atau kendala pesanan Anda agar dapat segera kami tangani.
            </p>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl p-5 flex items-start gap-4 shadow-sm">
            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
                <h4 class="font-bold text-sm">Laporan Berhasil Diterima</h4>
                <p class="text-xs text-emerald-700 mt-1 leading-relaxed">{{ session('success') }}</p>
            </div>
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 bg-rose-50 border border-rose-200 text-rose-800 rounded-2xl p-5 flex items-start gap-4 shadow-sm">
            <div class="w-8 h-8 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <div>
                <h4 class="font-bold text-sm">Gagal Mengirim</h4>
                <p class="text-xs text-rose-700 mt-1 leading-relaxed">{{ session('error') }}</p>
            </div>
        </div>
        @endif

        @if($errors->any())
        <div class="mb-6 bg-amber-50 border border-amber-200 text-amber-900 rounded-2xl p-4 text-xs">
            <div class="font-bold mb-1">Periksa kembali data Anda:</div>
            <ul class="list-disc list-inside space-y-1 text-amber-800">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Card Form -->
        <div class="bg-white rounded-3xl shadow-xl border border-stone-200/80 p-6 sm:p-10" x-data="{ submitting: false }">
            <form action="{{ route('komplain.store') }}" method="POST" enctype="multipart/form-data" @submit="submitting = true">
                @csrf

                <div class="space-y-6">
                    
                    <!-- Nama & No HP -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="nama" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                   placeholder="Contoh: Budi Santoso">
                        </div>

                        <div>
                            <label for="no_hp" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                No. WhatsApp / Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" required
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                   placeholder="0812xxxxxxxx">
                        </div>
                    </div>

                    <!-- Email & Cabang -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                Alamat Email (Opsional)
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                   placeholder="email@domain.com">
                        </div>

                        <div>
                            <label for="cabang" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                Cabang / Outlet
                            </label>
                            <input type="text" name="cabang" id="cabang" value="{{ old('cabang') }}"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                   placeholder="Contoh: Cabang Sudirman">
                        </div>
                    </div>

                    <!-- Kategori & No Transaksi -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="kategori" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                Kategori Keluhan <span class="text-red-500">*</span>
                            </label>
                            <select name="kategori" id="kategori" required
                                    class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none bg-white">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                <option value="kualitas_makanan" {{ old('kategori') == 'kualitas_makanan' ? 'selected' : '' }}>Kualitas Makanan / Minuman</option>
                                <option value="pelayanan_outlet" {{ old('kategori') == 'pelayanan_outlet' ? 'selected' : '' }}>Pelayanan Staf Outlet</option>
                                <option value="pesanan_kurang" {{ old('kategori') == 'pesanan_kurang' ? 'selected' : '' }}>Item Pesanan Tidak Sesuai / Kurang</option>
                                <option value="kebersihan" {{ old('kategori') == 'kebersihan' ? 'selected' : '' }}>Kebersihan Tempat</option>
                                <option value="pembayaran" {{ old('kategori') == 'pembayaran' ? 'selected' : '' }}>Kendala Kasir & Pembayaran</option>
                                <option value="lainnya" {{ old('kategori') == 'lainnya' ? 'selected' : '' }}>Lain-lain</option>
                            </select>
                        </div>

                        <div>
                            <label for="no_transaksi" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                                No. Struk / Order ID (Jika Ada)
                            </label>
                            <input type="text" name="no_transaksi" id="no_transaksi" value="{{ old('no_transaksi') }}"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                   placeholder="Contoh: ORD-99214">
                        </div>
                    </div>

                    <!-- Pesan / Deskripsi -->
                    <div>
                        <label for="pesan" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                            Deskripsi Keluhan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="pesan" id="pesan" rows="4" required
                                  class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:border-[#e4002b] focus:ring-2 focus:ring-red-100 transition text-sm text-stone-900 outline-none"
                                  placeholder="Ceritakan detail keluhan atau kronologi kejadian secara lengkap...">{{ old('pesan') }}</textarea>
                    </div>

                    <!-- Lampiran File -->
                    <div>
                        <label for="lampiran" class="block text-xs font-bold uppercase tracking-wider text-stone-700 mb-2">
                            Foto Bukti / Struk (Opsional, Maks 5MB)
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-stone-300 border-dashed rounded-2xl hover:border-[#e4002b] transition bg-stone-50/50">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-10 w-10 text-stone-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-xs text-stone-600 justify-center">
                                    <label for="lampiran" class="relative cursor-pointer font-bold text-[#e4002b] hover:underline focus-within:outline-none">
                                        <span>Pilih berkas dari perangkat</span>
                                        <input id="lampiran" name="lampiran" type="file" accept="image/*,.pdf" class="sr-only">
                                    </label>
                                </div>
                                <p class="text-[11px] text-stone-400">PNG, JPG, PDF hingga 5MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                :disabled="submitting"
                                class="w-full py-4 px-6 rounded-2xl bg-[#e4002b] hover:bg-red-700 text-white font-bold text-sm tracking-wider uppercase shadow-xl hover:shadow-2xl transition duration-300 flex items-center justify-center gap-2 disabled:opacity-50">
                            <span x-show="!submitting">Kirim Laporan Pengaduan</span>
                            <span x-show="submitting" class="inline-flex items-center gap-2">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sedang Mengirim ke Sistem...
                            </span>
                        </button>
                    </div>

                    <!-- Privacy Reassurance -->
                    <div class="text-center pt-2">
                        <p class="text-[11px] text-stone-400 inline-flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            Data Anda dienkripsi secara aman dan langsung diteruskan ke tim penanganan pusat.
                        </p>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
@endsection

