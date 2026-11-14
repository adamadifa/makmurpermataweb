<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pacific Chili — Bubuk Cabe & Saus Pedas Premium')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #fff8f5; margin: 0; }
        .font-display { font-family: 'Oswald', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="{ cartCount: 3 }" style="min-height:100vh;display:flex;flex-direction:column;">

    {{-- ===== NAVBAR ===== --}}
    <header style="position:absolute;top:0;left:0;right:0;z-index:50;">
        <div style="max-width:1280px;margin:0 auto;padding:0 48px;">
            <div style="display:flex;align-items:center;justify-content:space-between;height:80px;">

                {{-- Logo Makmur Permata (Putih) --}}
                <a href="{{ route('home') }}" style="text-decoration:none;display:inline-flex;align-items:center;">
                    <img src="{{ asset('images/logo-white.png') }}" 
                         alt="Makmur Permata" 
                         style="height: 40px; width: auto; display: block; filter: drop-shadow(0 2px 6px rgba(0,0,0,0.25)); transition: transform .2s ease;"
                         onmouseover="this.style.transform='scale(1.04)'"
                         onmouseout="this.style.transform='none'">
                </a>

                {{-- Nav --}}
                <nav style="display:flex;gap:40px;">
                    <a href="#" style="color:white;text-decoration:none;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;opacity:.9;">About Us</a>
                    <a href="#" style="color:white;text-decoration:none;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;opacity:.9;">Find Us</a>
                    <a href="#promo-section" style="color:white;text-decoration:none;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;opacity:.9;">All Campaigns</a>
                </nav>

                {{-- Icons --}}
                <div style="display:flex;gap:12px;align-items:center;">
                    <button style="width:40px;height:40px;border-radius:50%;border:2px solid rgba(255,255,255,0.4);background:transparent;cursor:pointer;display:flex;align-items:center;justify-content:center;">
                        <svg style="width:18px;height:18px;" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </button>
                    <button style="width:40px;height:40px;border-radius:50%;background:white;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;position:relative;box-shadow:0 4px 16px rgba(0,0,0,0.2);">
                        <svg style="width:18px;height:18px;" fill="none" stroke="#e4001c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <span x-text="cartCount" style="position:absolute;top:-5px;right:-5px;background:#111;color:white;font-size:9px;font-weight:900;width:18px;height:18px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:2px solid white;"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <main style="flex:1;">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer style="background:#1c1c1c;padding:48px 0 24px;">
        <div style="max-width:1280px;margin:0 auto;padding:0 48px;">
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;padding-bottom:32px;">
                <div>
                    <div style="display:flex;align-items:center;margin-bottom:14px;">
                        <img src="{{ asset('images/logo-white.png') }}" 
                             alt="Makmur Permata" 
                             style="height: 32px; width: auto; display: block; opacity: 0.95;">
                    </div>
                    <p style="color:#9ca3af;font-size:13px;line-height:1.7;">Produsen Saus Cabe Cap SWAN dan Cabe Bubuk AIDA berkualitas tinggi sejak 1968. Pedas alami dan mantap untuk setiap sajian.</p>
                </div>
                <div>
                    <h4 style="color:white;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px;">Produk Kami</h4>
                    <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px;">
                        <li><a href="#" style="color:#9ca3af;text-decoration:none;font-size:13px;">Bubuk Cabe Rawit</a></li>
                        <li><a href="#" style="color:#9ca3af;text-decoration:none;font-size:13px;">Saus Cabe Premium</a></li>
                        <li><a href="#" style="color:#9ca3af;text-decoration:none;font-size:13px;">Paket Combo</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="color:white;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px;">Layanan</h4>
                    <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px;">
                        <li><a href="{{ route('komplain.index') }}" style="color:#9ca3af;text-decoration:none;font-size:13px;">Layanan Pelanggan</a></li>
                        <li><a href="#" style="color:#9ca3af;text-decoration:none;font-size:13px;">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="color:white;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px;">Keluhan & Saran</h4>
                    <p style="color:#9ca3af;font-size:13px;margin-bottom:16px;">Kepuasan Anda adalah prioritas kami.</p>
                    <a href="{{ route('komplain.index') }}" style="display:inline-flex;align-items:center;gap:8px;padding:10px 20px;background:#e4001c;color:white;font-size:11px;font-weight:800;border-radius:999px;text-decoration:none;text-transform:uppercase;letter-spacing:.08em;">
                        Pusat Pengaduan
                    </a>
                </div>
            </div>
            <div style="border-top:1px solid #333;padding-top:24px;text-align:center;color:#6b7280;font-size:12px;">
                &copy; {{ date('Y') }} PT Makmur Permata. Seluruh Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
