@extends('layouts.app')

@section('title', 'Cap SWAN & AIDA — Ekstra Pedas & Cabe Bubuk Alami')

@section('content')

{{-- ============================================================
     HERO SECTION — Bold Red KFC Style + Lottie Realistic Fire & Smoke
     ============================================================ --}}
<section class="hero-container" style="
    background: radial-gradient(ellipse at 72% 45%, #ff2638 0%, #e4001c 42%, #b80016 85%, #9b0012 100%);
    min-height: 88vh;
    padding-top: 95px;
    padding-bottom: 60px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
">
    {{-- Lingkaran dekoratif geometris (sama persis referensi KFC) --}}
    <div style="position:absolute;right:-120px;top:-120px;width:640px;height:640px;border-radius:50%;border:60px solid rgba(255,255,255,0.06);pointer-events:none;"></div>
    <div style="position:absolute;right:100px;top:40px;width:420px;height:420px;border-radius:50%;border:45px solid rgba(255,255,255,0.05);pointer-events:none;"></div>
    <div style="position:absolute;left:-80px;bottom:-80px;width:380px;height:380px;border-radius:50%;border:50px solid rgba(255,255,255,0.04);pointer-events:none;"></div>

    <div style="max-width:1300px;margin:0 auto;padding:0 40px;width:100%;position:relative;z-index:10;">
        <div style="display:grid;grid-template-columns:0.95fr 1.25fr;align-items:center;gap:15px;">

            {{-- ---- SISI KIRI: Headline + Deskripsi + Tombol + Dots ---- --}}
            <div style="position:relative;z-index:20;">

                {{-- Headline Utama --}}
                <h1 style="
                    font-family: 'Oswald', sans-serif;
                    font-size: clamp(2.8rem, 5.2vw, 4.8rem);
                    font-weight: 900;
                    color: white;
                    text-transform: uppercase;
                    line-height: 0.98;
                    letter-spacing: 0.02em;
                    text-shadow: 0 4px 24px rgba(0,0,0,0.3);
                ">
                    PEDASNYA<br>
                    <span style="color: #fbbf24;">ALAMI</span>
                </h1>

                {{-- Deskripsi --}}
                <p style="
                    margin-top: 22px;
                    color: rgba(255,255,255,0.92);
                    font-size: 13.5px;
                    line-height: 1.7;
                    max-width: 360px;
                    font-weight: 500;
                    text-shadow: 0 2px 8px rgba(0,0,0,0.25);
                ">
                    Sensasi pedas legendaris Saus Cabe <strong>Cap SWAN</strong> Ekstra Pedas dan Cabe Bubuk <strong>AIDA</strong> Pedas Alami. Racikan istimewa sejak 1968 untuk kenikmatan setiap santapan.
                </p>

                {{-- ORDER NOW Pill Button --}}
                <div style="margin-top:36px;display:flex;align-items:center;gap:18px;flex-wrap:wrap;">
                    <a href="#menu-section" style="
                        display: inline-flex;
                        align-items: center;
                        gap: 10px;
                        padding: 14px 34px;
                        border: 2.5px solid white;
                        border-radius: 999px;
                        color: white;
                        font-weight: 800;
                        font-size: 12px;
                        text-transform: uppercase;
                        letter-spacing: 0.14em;
                        text-decoration: none;
                        transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
                        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
                        white-space: nowrap;
                    " onmouseover="this.style.background='white';this.style.color='#e4001c';this.style.transform='translateY(-2px) scale(1.03)'"
                       onmouseout="this.style.background='transparent';this.style.color='white';this.style.transform='none'">
                        ORDER NOW
                        <svg style="width:16px;height:16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7M3 12h18"/></svg>
                    </a>

                    <a href="{{ route('komplain.index') }}" style="
                        color: rgba(255,255,255,0.9);
                        font-size: 12px;
                        font-weight: 700;
                        text-transform: uppercase;
                        letter-spacing: 0.1em;
                        text-decoration: none;
                        transition: color .2s;
                    " onmouseover="this.style.color='#fbbf24'" onmouseout="this.style.color='rgba(255,255,255,0.9)'">
                        Layanan Pelanggan →
                    </a>
                </div>

                {{-- Dot Indicators Slider (sama persis referensi KFC: 1 pill panjang + 3 dot) --}}
                <div style="display:flex;align-items:center;gap:8px;margin-top:48px;">
                    <span style="display:inline-block;width:28px;height:10px;border-radius:999px;background:white;box-shadow:0 2px 6px rgba(0,0,0,0.2);"></span>
                    <span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,0.4);"></span>
                    <span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,0.4);"></span>
                    <span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,0.4);"></span>
                </div>

            </div>

            {{-- ---- SISI KANAN: Produk Bersih + LOTTIE REALISTIC FIRE & SMOKE ANIMATION ---- --}}
            <div style="position:relative;display:flex;justify-content:center;align-items:center;">

                {{-- ================= 1. REALISTIC SMOKE / STEAM PUFFS (ASAP UAP MENGEPUL NAIK DI ATAS) ================= --}}
                <div id="smoke-container" style="
                    position: absolute;
                    top: -80px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 520px;
                    height: 240px;
                    pointer-events: none;
                    z-index: 28;
                ">
                    <div class="smoke-puff smoke-1"></div>
                    <div class="smoke-puff smoke-2"></div>
                    <div class="smoke-puff smoke-3"></div>
                    <div class="smoke-puff smoke-4"></div>
                    <div class="smoke-puff smoke-5"></div>
                </div>

                {{-- ================= 2. PERCIKAN BARA API BETERBANGAN DI DEPAN ================= --}}
                <div style="position:absolute;inset:0;pointer-events:none;z-index:45;">
                    <div class="fire-ember ember-1" style="left:26%;bottom:80px;"></div>
                    <div class="fire-ember ember-2" style="left:42%;bottom:60px;"></div>
                    <div class="fire-ember ember-3" style="left:60%;bottom:75px;"></div>
                    <div class="fire-ember ember-4" style="left:35%;bottom:100px;"></div>
                    <div class="fire-ember ember-5" style="left:72%;bottom:90px;"></div>
                    <div class="fire-ember ember-6" style="left:50%;bottom:120px;"></div>
                    <div class="fire-ember ember-7" style="left:18%;bottom:70px;"></div>
                    <div class="fire-ember ember-8" style="left:78%;bottom:85px;"></div>
                </div>

                {{-- Ornamen Cabe Merah Segar Asli (Pilihan User) Kiri Atas --}}
                <div style="position:absolute;top:15px;left:10px;z-index:35;animation:chiliFloatNatural1 5.5s ease-in-out infinite;pointer-events:none;">
                    <img src="{{ asset('images/chili-clean.png') }}" 
                         alt="Cabe Merah Segar Asli" 
                         style="width:85px;height:auto;filter:drop-shadow(0 12px 20px rgba(0,0,0,0.45));transform:rotate(-35deg) scaleX(-1);">
                </div>

                {{-- Ornamen Cabe Merah Segar Asli (Pilihan User) Kanan Atas --}}
                <div style="position:absolute;top:50px;right:-5px;z-index:35;animation:chiliFloatNatural2 6.2s ease-in-out infinite 0.8s;pointer-events:none;">
                    <img src="{{ asset('images/chili-clean.png') }}" 
                         alt="Cabe Merah Segar Asli" 
                         style="width:80px;height:auto;filter:drop-shadow(0 12px 20px rgba(0,0,0,0.45));transform:rotate(35deg);">
                </div>

                {{-- Sleek Micro Badge "ISI 10% LEBIH BANYAK" di Kiri --}}
                <div style="
                    position: absolute;
                    top: 135px;
                    left: -20px;
                    z-index: 42;
                    background: #ffffff;
                    padding: 8px 18px;
                    border-radius: 999px;
                    box-shadow: 0 12px 30px rgba(0,0,0,0.22);
                    border: 2px solid #fff5f5;
                    display: inline-flex;
                    align-items: center;
                    gap: 9px;
                    animation: floatPill 5s ease-in-out infinite;
                ">
                    <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:#e4001c;box-shadow:0 0 8px #e4001c;"></span>
                    <span style="font-family:'Oswald',sans-serif;font-size:12.5px;font-weight:900;color:#c4001d;letter-spacing:.06em;text-transform:uppercase;">
                        Isi 10% Lebih Banyak
                    </span>
                </div>

                {{-- Sleek Micro Badge "100% PEDAS ALAMI" di Kanan Tengah --}}
                <div style="
                    position: absolute;
                    top: 170px;
                    right: -25px;
                    z-index: 42;
                    background: #18181b;
                    padding: 8px 18px;
                    border-radius: 999px;
                    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
                    border: 1.5px solid rgba(251,191,36,0.35);
                    display: inline-flex;
                    align-items: center;
                    gap: 9px;
                    animation: floatPill 5.5s ease-in-out infinite 1s;
                ">
                    <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:#fbbf24;box-shadow:0 0 8px #fbbf24;"></span>
                    <span style="font-family:'Oswald',sans-serif;font-size:12px;font-weight:900;color:#fbbf24;letter-spacing:.08em;text-transform:uppercase;">
                        100% Pedas Alami
                    </span>
                </div>

                {{-- Panah Sketsa Halus Kiri Atas menunjuk ke produk (Gaya Chalk Arrow KFC) --}}
                <div style="position:absolute;top:-15px;left:25px;z-index:30;opacity:0.92;pointer-events:none;">
                    <svg style="width:72px;height:72px;filter:drop-shadow(0 3px 6px rgba(0,0,0,0.3))" viewBox="0 0 80 80" fill="none">
                        <path d="M14 60 C 26 22, 45 14, 66 22" stroke="white" stroke-width="3.5" stroke-linecap="round" fill="none"/>
                        <path d="M54 14 L 67 22 L 53 32" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </svg>
                </div>

                {{-- BRANDING BADGE: "SEJAK 1968 - EKSTRA PEDAS - RESEP ASLI" (Heritage Seal) --}}
                <div style="
                    position: absolute;
                    top: -15px;
                    right: 15px;
                    z-index: 40;
                    background: #ffffff;
                    border-radius: 50%;
                    width: 126px;
                    height: 126px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 16px 38px rgba(0,0,0,0.28), 0 2px 6px rgba(0,0,0,0.1);
                    border: 4px solid #fff5f5;
                    outline: 1.5px dashed rgba(228,0,28,0.35);
                    outline-offset: -7px;
                    animation: floatBadge 4.5s ease-in-out infinite;
                    text-align: center;
                    padding: 8px;
                ">
                    <span style="font-size:9px;font-weight:800;color:#9ca3af;text-transform:uppercase;letter-spacing:.16em;">SEJAK 1968</span>
                    <span style="font-family:'Oswald',sans-serif;font-size:22px;font-weight:900;color:#e4001c;line-height:0.92;margin:3px 0;">
                        EKSTRA<br><span style="font-size:19px;color:#d97706;">PEDAS</span>
                    </span>
                    <span style="font-size:8.5px;font-weight:800;color:#b45309;text-transform:uppercase;letter-spacing:.1em;background:#fef3c7;padding:2px 8px;border-radius:999px;">
                        RESEP ASLI
                    </span>
                </div>

                {{-- Panah Sketsa Halus Kanan Bawah menunjuk ke produk (Gaya Chalk Arrow KFC) --}}
                <div style="position:absolute;bottom:-5px;right:50px;z-index:36;opacity:0.92;pointer-events:none;">
                    <svg style="width:68px;height:68px;filter:drop-shadow(0 3px 6px rgba(0,0,0,0.3))" viewBox="0 0 80 80" fill="none">
                        <path d="M66 18 C 55 56, 36 62, 18 50" stroke="white" stroke-width="3.5" stroke-linecap="round" fill="none"/>
                        <path d="M30 60 L 17 50 L 32 40" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </svg>
                </div>

                {{-- ================= 3. STAGE PRODUK + LOTTIE FIRE (BELAKANG & DEPAN) ================= --}}
                <div style="
                    position: relative;
                    z-index: 20;
                    animation: floatProduct 4.2s ease-in-out infinite;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                ">
                    {{-- [BELAKANG 1] LOTTIE FLAMES ANIMATION — PROPORSIONAL PAS TIDAK MELEBIHI TINGGI PRODUK --}}
                    {{-- Kiri (Belakang Saset Cap Swan): Tinggi 195px (di bawah tinggi saset 220px) --}}
                    <div id="lottie-fire-back-left" style="
                        position: absolute;
                        bottom: 5px;
                        left: 5%;
                        width: 230px;
                        height: 195px;
                        pointer-events: none;
                        z-index: 10;
                        opacity: 0.88;
                        filter: drop-shadow(0 0 18px rgba(255,80,0,0.7));
                    "></div>

                    {{-- Tengah (Belakang Pouch Cap Swan): Tinggi 280px (di bawah tinggi pouch 325px) --}}
                    <div id="lottie-fire-back" style="
                        position: absolute;
                        bottom: 0px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 380px;
                        height: 280px;
                        pointer-events: none;
                        z-index: 10;
                        opacity: 0.95;
                        filter: drop-shadow(0 0 25px rgba(255,90,0,0.85));
                    "></div>

                    {{-- Kanan (Belakang AIDA Cabe Bubuk): Tinggi 205px (di bawah tinggi AIDA 235px) --}}
                    <div id="lottie-fire-back-right" style="
                        position: absolute;
                        bottom: 5px;
                        right: 5%;
                        width: 230px;
                        height: 205px;
                        pointer-events: none;
                        z-index: 10;
                        opacity: 0.88;
                        filter: drop-shadow(0 0 18px rgba(255,80,0,0.7));
                    "></div>

                    {{-- [BELAKANG 2] Inti Panas Berdenyut (Heat Glow Halus) --}}
                    <div style="
                        position: absolute;
                        width: 75%;
                        height: 65%;
                        border-radius: 50%;
                        background: radial-gradient(circle at 50% 60%, rgba(255, 220, 0, 0.6) 0%, rgba(255, 100, 0, 0.35) 40%, rgba(255, 30, 0, 0.15) 65%, transparent 80%);
                        filter: blur(28px);
                        pointer-events: none;
                        animation: fireHeartbeat 2.6s ease-in-out infinite;
                    "></div>

                    {{-- [TENGAH] FOTO PRODUK BERSIH TRANSPARAN ASLI (CAP SWAN POUCH, SACHET, & AIDA) --}}
                    <img src="{{ asset('images/hero-products-clean.png') }}" 
                         alt="Cap SWAN Ekstra Pedas & AIDA Cabe Bubuk" 
                         style="
                            max-width: none;
                            width: 650px;
                            height: auto;
                            display: block;
                            position: relative;
                            z-index: 25;
                            filter: drop-shadow(0 25px 35px rgba(0,0,0,0.55)) drop-shadow(0 0 25px rgba(255,140,0,0.35));
                            transition: transform .3s ease;
                         "
                         onmouseover="this.style.transform='scale(1.02)'"
                         onmouseout="this.style.transform='scale(1)'">

                    {{-- ================= [DEPAN] LOTTIE FLAMES HALUS DI DEPAN BAWAH (HANYA MENJILAT DASAR PRODUK) ================= --}}
                    <div id="lottie-fire-front" style="
                        position: absolute;
                        bottom: -15px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 480px;
                        height: 60px;
                        pointer-events: none;
                        z-index: 30;
                        overflow: hidden;
                        opacity: 0.82;
                        mix-blend-mode: screen;
                        filter: drop-shadow(0 0 15px rgba(255,120,0,0.8));
                    ">
                        <div id="lottie-fire-front-inner" style="
                            width: 480px;
                            height: 280px;
                            position: absolute;
                            bottom: -190px;
                            left: 0;
                        "></div>
                    </div>

                    {{-- Cabe Merah Segar Asli (Pilihan User) di Sela-Sela Api Depan Bawah --}}
                    <div style="
                        position: absolute;
                        bottom: -15px;
                        left: 10%;
                        z-index: 42;
                        animation: chiliFloatNatural3 5s ease-in-out infinite;
                        pointer-events: none;
                    ">
                        <img src="{{ asset('images/chili-clean.png') }}" 
                             alt="Cabe Segar Asli" 
                             style="width:105px;height:auto;filter:drop-shadow(0 10px 18px rgba(0,0,0,0.55));transform:rotate(-20deg);">
                    </div>

                    <div style="
                        position: absolute;
                        bottom: -5px;
                        right: 12%;
                        z-index: 42;
                        animation: chiliFloatNatural1 5.4s ease-in-out infinite 0.6s;
                        pointer-events: none;
                    ">
                        <img src="{{ asset('images/chili-clean.png') }}" 
                             alt="Cabe Segar Asli" 
                             style="width:95px;height:auto;filter:drop-shadow(0 10px 18px rgba(0,0,0,0.55));transform:rotate(30deg) scaleX(-1);">
                    </div>

                    {{-- [DEPAN 4] Dudukan Bara Api Bawah Paling Depan (Glow Bed) --}}
                    <div style="
                        position: absolute;
                        bottom: -25px;
                        width: 86%;
                        height: 95px;
                        border-radius: 50%;
                        background: radial-gradient(ellipse at center, rgba(255, 230, 0, 0.75) 0%, rgba(255, 80, 0, 0.55) 45%, transparent 75%);
                        filter: blur(14px);
                        pointer-events: none;
                        z-index: 39;
                        animation: fireGlowPulse 2.2s ease-in-out infinite;
                    "></div>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     CATEGORY SLIDER SECTION
     Pill Tab "MENUS" di atas tengah, panah navigasi kiri-kanan
     ============================================================ --}}
<section id="menu-section" style="position:relative;z-index:30;margin-top:-32px;">
    <div style="max-width:1280px;margin:0 auto;padding:0 48px;">
        <div style="
            background: white;
            border-radius: 22px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
            border: 1px solid #f3ece5;
            padding: 22px 50px;
            position: relative;
        ">
            {{-- Pill "MENUS" kuning di tengah atas (persis referensi KFC) --}}
            <div style="position:absolute;top:-16px;left:50%;transform:translateX(-50%);">
                <span style="
                    display: inline-block;
                    background: #f59e0b;
                    color: #1a1a1a;
                    font-family: 'Plus Jakarta Sans', sans-serif;
                    font-weight: 800;
                    font-size: 11px;
                    text-transform: uppercase;
                    letter-spacing: .12em;
                    padding: 5px 24px;
                    border-radius: 999px;
                    box-shadow: 0 4px 14px rgba(245,158,11,0.35);
                    white-space: nowrap;
                ">MENUS</span>
            </div>

            {{-- Slider Container dengan Tombol Panah --}}
            <div style="position:relative;margin-top:6px;">

                {{-- Panah Kiri --}}
                <button class="swiper-btn-prev" style="
                    position:absolute;left:-34px;top:50%;transform:translateY(-50%);z-index:10;
                    width:34px;height:34px;border-radius:50%;background:#f5f5f5;border:none;cursor:pointer;
                    display:flex;align-items:center;justify-content:center;
                    box-shadow:0 2px 8px rgba(0,0,0,0.08);
                    transition:background .2s, transform .2s;
                " onmouseover="this.style.background='#ebebeb';this.style.transform='translateY(-50%) scale(1.08)'" 
                   onmouseout="this.style.background='#f5f5f5';this.style.transform='translateY(-50%)'">
                    <svg style="width:14px;height:14px;" fill="none" stroke="#444" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>

                {{-- Swiper Menu Produk PacificV4 --}}
                <div class="swiper menu-swiper" style="padding:10px 0;">
                    <div class="swiper-wrapper" style="align-items:flex-end;">
                        @foreach($products as $index => $prod)
                        <div class="swiper-slide product-menu-slide" 
                             data-code="{{ $prod['kode_produk'] }}"
                             data-name="{{ $prod['nama_produk'] }}"
                             data-brand="{{ $prod['kategori'] }}"
                             style="width:auto !important;text-align:center;cursor:pointer;padding:0 14px;">
                            <div class="slide-inner-box" style="display:flex;flex-direction:column;align-items:center;gap:8px;">
                                <div class="product-thumb-circle" style="
                                    width: 72px; height: 72px;
                                    border-radius: 50%;
                                    overflow: hidden;
                                    background: linear-gradient(135deg, #fff9f6 0%, #fff0eb 100%);
                                    display: flex; align-items: center; justify-content: center;
                                    box-shadow: 0 4px 12px rgba(0,0,0,0.06);
                                    border: 1px solid #fee2e2;
                                    transition: all .25s ease;
                                    position: relative;
                                    {{ $index === 0 ? 'outline: 3px solid #e4001c; outline-offset: 3px;' : '' }}
                                " onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                                    <img src="{{ !empty($prod['foto_url']) ? $prod['foto_url'] : asset('images/products/' . ($prod['image'] ?? 'swan-pouch.png')) }}" 
                                         alt="{{ $prod['nama_produk'] }}" 
                                         style="max-height: 54px; max-width: 54px; object-fit: contain; filter: drop-shadow(0 3px 5px rgba(0,0,0,0.18));">
                                </div>
                                <div style="display:flex;flex-direction:column;align-items:center;gap:2px;">
                                    <span class="product-menu-title" style="
                                        font-size: 11px;
                                        font-weight: 800;
                                        text-transform: uppercase;
                                        letter-spacing: .05em;
                                        {{ $index === 0 ? 'color:#e4001c;border-bottom:2.5px solid #e4001c;padding-bottom:2px;' : 'color:#4b5563;' }}
                                        display: block;
                                        white-space: nowrap;
                                        transition: color .2s;
                                    ">{{ $prod['short_name'] ?? $prod['nama_produk'] }}</span>
                                    <span style="
                                        font-size: 9px;
                                        font-weight: 600;
                                        color: #9ca3af;
                                        text-transform: uppercase;
                                        letter-spacing: .04em;
                                    ">{{ $prod['isi_dus'] ?? $prod['type'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Panah Kanan --}}
                <button class="swiper-btn-next" style="
                    position:absolute;right:-34px;top:50%;transform:translateY(-50%);z-index:10;
                    width:34px;height:34px;border-radius:50%;background:#f5f5f5;border:none;cursor:pointer;
                    display:flex;align-items:center;justify-content:center;
                    box-shadow:0 2px 8px rgba(0,0,0,0.08);
                    transition:background .2s, transform .2s;
                " onmouseover="this.style.background='#ebebeb';this.style.transform='translateY(-50%) scale(1.08)'" 
                   onmouseout="this.style.background='#f5f5f5';this.style.transform='translateY(-50%)'">
                    <svg style="width:14px;height:14px;" fill="none" stroke="#444" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION KEUNGGULAN PRODUK & BRAND AMBASSADOR (CHEF WITA)
     Pilihan Para MasterChef Kuliner & Resep Legendaris Sejak 1968
     ============================================================ --}}
<section id="keunggulan-section" style="
    background: linear-gradient(180deg, #ffffff 0%, #fff6f2 40%, #fff0ea 100%);
    padding: 95px 0 100px;
    position: relative;
    overflow: hidden;
">
    {{-- Background Accent Glows & Fast-Food Energy Rings --}}
    <div style="position:absolute;top:-120px;right:-120px;width:580px;height:580px;border-radius:50%;background:radial-gradient(circle, rgba(251,191,36,0.15) 0%, transparent 70%);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-140px;left:-120px;width:620px;height:620px;border-radius:50%;background:radial-gradient(circle, rgba(228,0,28,0.09) 0%, transparent 70%);pointer-events:none;"></div>

    <div style="max-width: 1280px; margin: 0 auto; padding: 0 48px; position: relative; z-index: 10;">
        
        {{-- Section Top Badge & Headline --}}
        <div style="text-align: center; max-width: 820px; margin: 0 auto 55px; font-family: 'Plus Jakarta Sans', sans-serif;">
            <div style="display: inline-flex; align-items: center; gap: 8px; background: #fff1f2; border: 1.5px solid #ffe4e6; padding: 7px 22px; border-radius: 999px; margin-bottom: 16px; box-shadow: 0 2px 8px rgba(228,0,28,0.06);">
                <i class="ti ti-chef-hat" style="font-size: 16px; color: #e4001c; line-height: 1;"></i>
                <span style="font-size: 11px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; color: #e4001c;">
                    Pilihan Utama Master Kuliner &amp; Keluarga Indonesia
                </span>
            </div>
            
            <h2 style="font-size: clamp(28px, 3.4vw, 42px); font-weight: 800; color: #111827; line-height: 1.22; letter-spacing: -0.025em; margin: 0 0 16px;">
                Pedasnya Juara, <span style="color: #e4001c;">Kualitasnya Nyata</span><br>
                Keunggulan Produk CV Makmur Permata
            </h2>
            
            <p style="font-size: 15.5px; color: #4b5563; line-height: 1.65; margin: 0; font-weight: 450;">
                Dipercaya oleh jutaan keluarga dan ribuan pelaku usaha kuliner nusantara sejak 1968. 
                Hadirkan sensasi cita rasa pedas gurih alami dengan resep otentik warisan turun-temurun.
            </p>
        </div>

        {{-- 2 Columns Grid: Left (Brand Ambassador) & Right (Keunggulan Cards) --}}
        <div class="ambassador-grid" style="display: grid; grid-template-columns: 1.05fr 1.35fr; gap: 50px; align-items: center; font-family: 'Plus Jakarta Sans', sans-serif;">
            
            {{-- ================= KOLOM KIRI: BRAND AMBASSADOR CHEF WITA ================= --}}
            <div style="position: relative; display: flex; justify-content: center; align-items: center; min-height: 520px;">
                
                {{-- Backdrop Circle Glow Hangat --}}
                <div style="
                    position: absolute;
                    width: 440px;
                    height: 440px;
                    border-radius: 50%;
                    background: radial-gradient(circle, #fde68a 0%, #fed7aa 55%, transparent 75%);
                    filter: blur(8px);
                    z-index: 1;
                "></div>

                {{-- Fast-Food Fast Dynamic Orbit Rings --}}
                <div style="
                    position: absolute;
                    width: 470px;
                    height: 470px;
                    border-radius: 50%;
                    border: 2.5px dashed rgba(245, 158, 11, 0.4);
                    z-index: 2;
                    animation: spinRings 50s linear infinite;
                "></div>

                {{-- Foto Model Chef Wita Cutout --}}
                <div style="position: relative; z-index: 5; text-align: center;">
                    <img src="{{ asset('images/ambassador-wita-smooth.png') }}" 
                         alt="Chef Wita - Brand Ambassador CV Makmur Permata"
                         style="
                            width: 100%;
                            max-width: 430px;
                            height: auto;
                            display: block;
                            filter: drop-shadow(0 20px 32px rgba(0,0,0,0.22));
                            transition: transform .35s ease;
                         "
                         onmouseover="this.style.transform='scale(1.02)'"
                         onmouseout="this.style.transform='scale(1)'">
                </div>

                {{-- Floating Pill Badge 1: Chef Wita MasterChef (Kiri Atas) --}}
                <div style="
                    position: absolute;
                    top: 25px;
                    left: -15px;
                    z-index: 10;
                    background: white;
                    border-radius: 20px;
                    padding: 10px 18px;
                    box-shadow: 0 12px 28px rgba(0,0,0,0.12);
                    border: 1px solid #fee2e2;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    animation: floatBadge1 3.8s ease-in-out infinite;
                ">
                    <div style="
                        width: 44px; height: 44px;
                        border-radius: 50%;
                        background: linear-gradient(135deg, #e4001c 0%, #990013 100%);
                        display: flex; align-items: center; justify-content: center;
                        box-shadow: 0 4px 12px rgba(228,0,28,0.35);
                    ">
                        <i class="ti ti-chef-hat" style="font-size: 22px; color: white; line-height: 1;"></i>
                    </div>
                    <div>
                        <div style="font-size:16px; font-weight:800; color:#111827; line-height:1.15; letter-spacing:-0.01em;">
                            Chef Wita
                        </div>
                        <div style="font-size:11px; font-weight:700; color:#e4001c; letter-spacing:.02em;">
                            MasterChef Indonesia
                        </div>
                    </div>
                </div>

                {{-- Floating Pill Badge 2: 100% Pedas Alami (Kanan Atas) --}}
                <div style="
                    position: absolute;
                    top: 130px;
                    right: -15px;
                    z-index: 10;
                    background: #111827;
                    color: white;
                    border-radius: 999px;
                    padding: 8px 18px;
                    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    animation: floatBadge2 4.2s ease-in-out infinite 0.5s;
                ">
                    <i class="ti ti-flame" style="font-size: 16px; color: #fbbf24; line-height: 1;"></i>
                    <span style="font-size: 11.5px; font-weight: 700; letter-spacing: .04em; color: #fbbf24;">
                        100% Pedas Alami
                    </span>
                </div>

                {{-- Floating Quote Box (Bawah Foto) --}}
                <div style="
                    position: absolute;
                    bottom: -22px;
                    left: 15px;
                    right: 15px;
                    z-index: 10;
                    background: rgba(255, 255, 255, 0.96);
                    backdrop-filter: blur(10px);
                    border-radius: 20px;
                    padding: 16px 22px;
                    box-shadow: 0 14px 35px rgba(0,0,0,0.12);
                    border: 1px solid #fecdd3;
                ">
                    <div style="display:flex;align-items:flex-start;gap:12px;">
                        <i class="ti ti-quote" style="color:#e4001c;font-size:24px;line-height:1;margin-top:2px;"></i>
                        <div style="flex:1;">
                            <p style="font-size: 13px; font-weight: 500; color: #374151; line-height: 1.5; margin: 0 0 6px;">
                                “Rasa pedas Cap SWAN &amp; AIDA itu otentik, aroma cabainya segar dan gurih alami—bikin setiap masakan punya cita rasa khas yang juara!”
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 11.5px; font-weight: 700; color: #e4001c;">
                                    Chef Wita • Brand Ambassador
                                </span>
                                <div style="display:flex;gap:3px;color:#f59e0b;font-size:12px;">
                                    <i class="ti ti-star-filled"></i>
                                    <i class="ti ti-star-filled"></i>
                                    <i class="ti ti-star-filled"></i>
                                    <i class="ti ti-star-filled"></i>
                                    <i class="ti ti-star-filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ================= KOLOM KANAN: 4 KEUNGGULAN PRODUK ================= --}}
            <div style="display: flex; flex-direction: column; gap: 16px;">
                
                {{-- Keunggulan 1: Cabai Murni Pilihan --}}
                <div style="
                    background: white;
                    border-radius: 20px;
                    padding: 22px 24px;
                    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
                    border: 1.5px solid #f3ece5;
                    display: flex;
                    align-items: flex-start;
                    gap: 18px;
                    transition: transform .25s ease, box-shadow .25s ease;
                " onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 28px rgba(228,0,28,0.1)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 18px rgba(0,0,0,0.04)'">
                    <div style="
                        width: 50px; height: 50px; min-width: 50px;
                        border-radius: 14px;
                        background: linear-gradient(135deg, #fee2e2 0%, #fecdd3 100%);
                        display: flex; align-items: center; justify-content: center;
                        box-shadow: 0 4px 12px rgba(228,0,28,0.15);
                    ">
                        <i class="ti ti-flame" style="font-size: 26px; color: #e4001c; line-height: 1;"></i>
                    </div>
                    <div>
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:5px;">
                            <h3 style="font-size: 17px; font-weight: 800; color: #111827; letter-spacing: -0.015em; margin: 0;">
                                100% Cabai Alami Pilihan Nusantara
                            </h3>
                            <span style="background:#fee2e2;color:#e4001c;font-size:9.5px;font-weight:800;padding:2px 8px;border-radius:999px;">Murni</span>
                        </div>
                        <p style="font-size: 13px; color: #4b5563; line-height: 1.55; margin: 0; font-weight: 450;">
                            Diproduksi langsung dari cabai kering pilihan petani lokal terbaik tanpa tambahan pewarna sintetis maupun pengawet buatan. Menghasilkan warna merah menyala alami dan aroma pedas segar khas rempah Indonesia.
                        </p>
                    </div>
                </div>

                {{-- Keunggulan 2: Resep Legendaris Sejak 1968 --}}
                <div style="
                    background: white;
                    border-radius: 20px;
                    padding: 22px 24px;
                    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
                    border: 1.5px solid #f3ece5;
                    display: flex;
                    align-items: flex-start;
                    gap: 18px;
                    transition: transform .25s ease, box-shadow .25s ease;
                " onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 28px rgba(245,158,11,0.12)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 18px rgba(0,0,0,0.04)'">
                    <div style="
                        width: 50px; height: 50px; min-width: 50px;
                        border-radius: 14px;
                        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
                        display: flex; align-items: center; justify-content: center;
                        box-shadow: 0 4px 12px rgba(245,158,11,0.2);
                    ">
                        <i class="ti ti-award" style="font-size: 26px; color: #b45309; line-height: 1;"></i>
                    </div>
                    <div>
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:5px;">
                            <h3 style="font-size: 17px; font-weight: 800; color: #111827; letter-spacing: -0.015em; margin: 0;">
                                Resep Legendaris Lebih dari 50 Tahun
                            </h3>
                            <span style="background:#fef3c7;color:#b45309;font-size:9.5px;font-weight:800;padding:2px 8px;border-radius:999px;">Sejak 1968</span>
                        </div>
                        <p style="font-size: 13px; color: #4b5563; line-height: 1.55; margin: 0; font-weight: 450;">
                            Warisan racikan bumbu otentik turun-temurun dari Tasikmalaya yang telah membumbui jutaan hidangan kuliner favorit keluarga dan UMKM nusantara. Konsistensi gurih dan pedasnya teruji sepanjang masa.
                        </p>
                    </div>
                </div>

                {{-- Keunggulan 3: Sertifikasi BPOM & 100% Halal --}}
                <div style="
                    background: white;
                    border-radius: 20px;
                    padding: 22px 24px;
                    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
                    border: 1.5px solid #f3ece5;
                    display: flex;
                    align-items: flex-start;
                    gap: 18px;
                    transition: transform .25s ease, box-shadow .25s ease;
                " onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 28px rgba(16,185,129,0.1)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 18px rgba(0,0,0,0.04)'">
                    <div style="
                        width: 50px; height: 50px; min-width: 50px;
                        border-radius: 14px;
                        background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
                        display: flex; align-items: center; justify-content: center;
                        box-shadow: 0 4px 12px rgba(16,185,129,0.2);
                    ">
                        <i class="ti ti-shield-check" style="font-size: 26px; color: #047857; line-height: 1;"></i>
                    </div>
                    <div>
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:5px;">
                            <h3 style="font-size: 17px; font-weight: 800; color: #111827; letter-spacing: -0.015em; margin: 0;">
                                Higienis, Terverifikasi BPOM &amp; Halal MUI
                            </h3>
                            <span style="background:#d1fae5;color:#047857;font-size:9.5px;font-weight:800;padding:2px 8px;border-radius:999px;">Resmi BPOM</span>
                        </div>
                        <p style="font-size: 13px; color: #4b5563; line-height: 1.55; margin: 0; font-weight: 450;">
                            Diproduksi secara higienis dengan standar CPPOB industri modern yang ketat. Seluruh produk terdaftar resmi di BPOM RI dan mengantongi sertifikasi Halal MUI untuk kepastian mutu dan rasa aman bagi keluarga.
                        </p>
                    </div>
                </div>

                {{-- Keunggulan 4: Isi Lebih Banyak & Ekonomis --}}
                <div style="
                    background: white;
                    border-radius: 20px;
                    padding: 22px 24px;
                    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
                    border: 1.5px solid #f3ece5;
                    display: flex;
                    align-items: flex-start;
                    gap: 18px;
                    transition: transform .25s ease, box-shadow .25s ease;
                " onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 28px rgba(126,34,206,0.1)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 18px rgba(0,0,0,0.04)'">
                    <div style="
                        width: 50px; height: 50px; min-width: 50px;
                        border-radius: 14px;
                        background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
                        display: flex; align-items: center; justify-content: center;
                        box-shadow: 0 4px 12px rgba(126,34,206,0.15);
                    ">
                        <i class="ti ti-package" style="font-size: 26px; color: #7e22ce; line-height: 1;"></i>
                    </div>
                    <div>
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:5px;">
                            <h3 style="font-size: 17px; font-weight: 800; color: #111827; letter-spacing: -0.015em; margin: 0;">
                                Isi Lebih Banyak, Harga Paling Hemat
                            </h3>
                            <span style="background:#f3e8ff;color:#7e22ce;font-size:9.5px;font-weight:800;padding:2px 8px;border-radius:999px;">Ekonomis</span>
                        </div>
                        <p style="font-size: 13px; color: #4b5563; line-height: 1.55; margin: 0; font-weight: 450;">
                            Komitmen nyata CV Makmur Permata: kemasan ekstra isi lebih banyak dengan harga yang tetap ramah di kantong. Solusi paling hemat untuk hidangan dapur rumah tangga hingga marjin untung maksimal bagi pedagang kuliner.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        {{-- Bottom Counter / Trust Metrics Strip (Fast Food Style) --}}
        <div class="ambassador-metrics" style="
            margin-top: 55px;
            background: linear-gradient(135deg, #e4001c 0%, #b90017 100%);
            border-radius: 22px;
            padding: 28px 40px;
            color: white;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            box-shadow: 0 16px 36px rgba(228,0,28,0.22);
            text-align: center;
            border: 1px solid rgba(255,255,255,0.18);
        ">
            <div>
                <div style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: #fbbf24; line-height: 1;">1968</div>
                <div style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; margin-top: 6px; opacity: .95;">Tahun Berdiri</div>
                <div style="font-size: 11px; opacity: .75; margin-top: 2px;">> 50 Tahun Pengalaman</div>
            </div>
            <div>
                <div style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: white; line-height: 1;">100%</div>
                <div style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; margin-top: 6px; opacity: .95;">Cabai Asli Murni</div>
                <div style="font-size: 11px; opacity: .75; margin-top: 2px;">Tanpa Pewarna Sintetis</div>
            </div>
            <div>
                <div style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: #fbbf24; line-height: 1;">10.000+</div>
                <div style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; margin-top: 6px; opacity: .95;">Mitra &amp; Agen Kuliner</div>
                <div style="font-size: 11px; opacity: .75; margin-top: 2px;">Tersebar di Nusantara</div>
            </div>
            <div>
                <div style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: white; line-height: 1;">BPOM &amp; HALAL</div>
                <div style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; margin-top: 6px; opacity: .95;">Standar Higienis CPPOB</div>
                <div style="font-size: 11px; opacity: .75; margin-top: 2px;">Aman &amp; Terpercaya</div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     PROMO CAMPAIGN CARDS SECTION (3 Kolom persis KFC)
     ============================================================ --}}
<section id="promo-section" style="background:#fff8f5;padding:60px 0 80px;">
    <div style="max-width:1280px;margin:0 auto;padding:0 48px;">
        <div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:28px;">

            {{-- ---- Card 1: Any Day Offers (AIDA Cabe Bubuk) ---- --}}
            <div style="
                background: white;
                border-radius: 26px;
                padding: 26px;
                box-shadow: 0 6px 25px rgba(0,0,0,0.06);
                border: 1.5px solid #f3ece5;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 290px;
                position: relative;
                overflow: hidden;
            ">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                    <div>
                        <div style="font-family:'Oswald',sans-serif;font-size:24px;font-weight:900;color:#111;text-transform:uppercase;line-height:1.05;">ANY DAY<br>OFFERS</div>
                        <div style="font-size:10.5px;font-weight:800;color:#9ca3af;text-transform:uppercase;letter-spacing:.06em;margin-top:5px;">AIDA CABE BUBUK ALAMI</div>
                    </div>
                    <span style="background:#e4001c;color:white;font-size:9.5px;font-weight:900;padding:3.5px 12px;border-radius:999px;letter-spacing:.08em;text-transform:uppercase;">New</span>
                </div>

                {{-- Visual Lingkaran Kuning + Produk Cabai Asli Pilihan User --}}
                <div style="display:flex;justify-content:center;align-items:center;position:relative;height:120px;margin:10px 0;">
                    <div style="position:absolute;width:115px;height:115px;border-radius:50%;background:#fbbf24;box-shadow:0 8px 20px rgba(251,191,36,0.3);"></div>
                    <img src="{{ asset('images/chili-clean.png') }}" 
                         alt="AIDA Cabai Alami" 
                         style="position:relative;z-index:2;width:90px;height:auto;filter:drop-shadow(0 6px 14px rgba(0,0,0,0.25));transform:rotate(-15deg);">
                </div>

                <div style="display:flex;justify-content:space-between;align-items:center;padding-top:14px;border-top:1.5px solid #f3ece5;">
                    <div>
                        <span style="font-family:'Oswald',sans-serif;font-size:26px;font-weight:900;color:#c4001d;">12.90</span>
                        <span style="font-size:12px;color:#9ca3af;font-weight:700;margin-left:4px;">TL / Rp 6K</span>
                    </div>
                    <button style="padding:6px 18px;background:#111;color:white;font-size:11px;font-weight:800;border-radius:999px;border:none;cursor:pointer;text-transform:uppercase;">Pesan</button>
                </div>
            </div>

            {{-- ---- Card 2: Other Flavors (Cap SWAN Merah Glowing) ---- --}}
            <div style="
                background: linear-gradient(135deg, #e4001c 0%, #c40018 60%, #9e0013 100%);
                border-radius: 26px;
                padding: 26px;
                box-shadow: 0 10px 30px rgba(228,0,28,0.35);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 290px;
                position: relative;
                overflow: hidden;
                color: white;
            ">
                <div>
                    <div style="font-size:9.5px;font-weight:800;color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:.1em;">Cap SWAN Series</div>
                    <div style="font-family:'Oswald',sans-serif;font-size:24px;font-weight:900;color:white;text-transform:uppercase;line-height:1.05;margin-top:3px;">OTHER<br>FLAVORS</div>
                    <div style="font-size:11.5px;color:rgba(255,255,255,0.85);margin-top:6px;line-height:1.5;">Ekstra Pedas 10% lebih banyak untuk pecinta pedas sejati!</div>
                </div>

                <div style="display:flex;justify-content:center;align-items:center;position:relative;height:120px;margin:10px 0;">
                    <div style="position:absolute;width:115px;height:115px;border-radius:50%;background:rgba(255,255,255,0.18);"></div>
                    <img src="{{ asset('images/chili-clean.png') }}" 
                         alt="Cap SWAN Ekstra Pedas" 
                         style="position:relative;z-index:2;width:90px;height:auto;filter:drop-shadow(0 6px 14px rgba(0,0,0,0.35));transform:rotate(20deg) scaleX(-1);">
                </div>

                <div style="display:flex;justify-content:space-between;align-items:center;padding-top:14px;border-top:1.5px solid rgba(255,255,255,0.2);">
                    <div>
                        <span style="font-family:'Oswald',sans-serif;font-size:26px;font-weight:900;color:white;">3.90</span>
                        <span style="font-size:12px;color:rgba(255,255,255,0.7);font-weight:700;margin-left:4px;">TL / Rp 18K</span>
                    </div>
                    <div style="display:flex;gap:5px;align-items:center;">
                        <span style="display:inline-block;width:18px;height:7px;border-radius:999px;background:white;"></span>
                        <span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:rgba(255,255,255,0.35);"></span>
                        <span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:rgba(255,255,255,0.35);"></span>
                    </div>
                </div>
            </div>

            {{-- ---- Card 3: Find Store Near You ---- --}}
            <div style="
                background: white;
                border-radius: 26px;
                padding: 26px;
                box-shadow: 0 6px 25px rgba(0,0,0,0.06);
                border: 1.5px solid #f3ece5;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 290px;
                position: relative;
                overflow: hidden;
            ">
                <div>
                    <div style="font-family:'Oswald',sans-serif;font-size:24px;font-weight:900;color:#111;text-transform:uppercase;line-height:1.05;">FIND A STORE<br>NEAR YOU</div>
                    <div style="font-size:11.5px;color:#9ca3af;margin-top:6px;line-height:1.5;">Temukan outlet agen &amp; toko resmi di kota Anda.</div>
                </div>

                {{-- Map Graphic 3D Pin ala KFC --}}
                <div style="display:flex;justify-content:center;align-items:center;height:120px;margin:10px 0;">
                    <div style="
                        position:relative;
                        width:160px;height:100px;
                        background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 40%, #fff9c4 70%, #ffe082 100%);
                        border-radius: 16px;
                        border: 1.5px solid #cfe8f0;
                        overflow: hidden;
                        box-shadow: inset 0 2px 6px rgba(0,0,0,0.05);
                    ">
                        <div style="position:absolute;left:33%;top:0;bottom:0;border-left:1px solid rgba(0,0,0,0.08);"></div>
                        <div style="position:absolute;left:66%;top:0;bottom:0;border-left:1px solid rgba(0,0,0,0.08);"></div>
                        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-100%);animation:floatPin 2.5s ease-in-out infinite;">
                            <div style="
                                width:34px;height:34px;background:#e4001c;
                                border-radius:50% 50% 50% 0;transform:rotate(-45deg);
                                display:flex;align-items:center;justify-content:center;
                                box-shadow:0 4px 14px rgba(196,0,29,0.4);
                            ">
                                <svg style="width:16px;height:16px;" fill="white" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display:flex;justify-content:space-between;align-items:center;padding-top:14px;border-top:1.5px solid #f3ece5;">
                    <div style="display:flex;gap:5px;align-items:center;">
                        <span style="display:inline-block;width:18px;height:7px;border-radius:999px;background:#fbbf24;"></span>
                        <span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:#d1d5db;"></span>
                        <span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:#d1d5db;"></span>
                    </div>
                    <a href="#" style="
                        display:inline-block;padding:7px 18px;background:#111;color:white;
                        font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.06em;
                        border-radius:999px;text-decoration:none;transition:background .2s;
                    " onmouseover="this.style.background='#e4001c'" onmouseout="this.style.background='#111'">Cek Lokasi</a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     CSS ANIMASI TAMBAHAN
     ============================================================ --}}
<style>
/* Partikel Percikan Bara Api Alami (Natural Rising Embers) */
.fire-ember {
    position: absolute;
    border-radius: 50%;
    background: #fff8bc;
    box-shadow: 0 0 8px #ff8800, 0 0 16px #ff2200;
    pointer-events: none;
    opacity: 0;
}
.ember-1 { width: 3.5px; height: 3.5px; animation: emberNatural 3.6s ease-in infinite; }
.ember-2 { width: 4.5px; height: 4.5px; animation: emberNatural 4.2s ease-in infinite 0.7s; }
.ember-3 { width: 2.5px; height: 2.5px; animation: emberNatural 4.8s ease-in infinite 1.4s; }
.ember-4 { width: 4.0px; height: 4.0px; animation: emberNatural 3.9s ease-in infinite 2.1s; }
.ember-5 { width: 3.0px; height: 3.0px; animation: emberNatural 4.5s ease-in infinite 1.1s; }
.ember-6 { width: 5.0px; height: 5.0px; animation: emberNatural 5.0s ease-in infinite 2.8s; }
.ember-7 { width: 2.5px; height: 2.5px; animation: emberNatural 3.8s ease-in infinite 1.8s; }
.ember-8 { width: 4.0px; height: 4.0px; animation: emberNatural 4.4s ease-in infinite 3.2s; }

@keyframes emberNatural {
    0% {
        opacity: 0;
        transform: translateY(0) translateX(0) scale(0.6);
    }
    20% {
        opacity: 0.95;
    }
    60% {
        opacity: 0.8;
        transform: translateY(-110px) translateX(14px) scale(1.1);
    }
    100% {
        opacity: 0;
        transform: translateY(-230px) translateX(-12px) scale(0.2);
    }
}

/* Denyut Inti Panas Api & Dasar Bara */
@keyframes fireHeartbeat {
    0%, 100% { transform: scale(0.95); opacity: 0.85; }
    50% { transform: scale(1.08); opacity: 1; }
}

@keyframes fireGlowPulse {
    0%, 100% { transform: scaleX(0.94) scaleY(0.92); opacity: 0.75; }
    50% { transform: scaleX(1.06) scaleY(1.1); opacity: 0.95; }
}

/* Floating Elements Alami (Cinematic Food Commercial Motion) */
@keyframes floatProduct {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(0.3deg); }
}
@keyframes floatBadge {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-6px) rotate(-1deg); }
}
@keyframes floatPill {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
}
@keyframes chiliFloatNatural1 {
    0%, 100% { transform: translateY(0px) rotate(-15deg); }
    50% { transform: translateY(-10px) rotate(-12deg); }
}
@keyframes chiliFloatNatural2 {
    0%, 100% { transform: translateY(0px) rotate(20deg); }
    50% { transform: translateY(-12px) rotate(16deg); }
}
@keyframes chiliFloatNatural3 {
    0%, 100% { transform: translateY(0px) rotate(-12deg); }
    50% { transform: translateY(-8px) rotate(-9deg); }
}
@keyframes floatPin {
    0%, 100% { transform: translate(-50%, -100%); }
    50% { transform: translate(-50%, -115%); }
}

/* Asap Uap Panas Mengepul Naik di Atas */
.smoke-puff {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0.18) 45%, transparent 75%);
    filter: blur(20px);
    pointer-events: none;
    opacity: 0;
    mix-blend-mode: screen;
}
.smoke-1 { width: 140px; height: 140px; left: 34%; bottom: 20px; animation: smokeRise 5.2s ease-in-out infinite; }
.smoke-2 { width: 180px; height: 180px; left: 46%; bottom: 10px; animation: smokeRise 6.0s ease-in-out infinite 1.2s; }
.smoke-3 { width: 120px; height: 120px; left: 24%; bottom: 30px; animation: smokeRise 4.6s ease-in-out infinite 2.2s; }
.smoke-4 { width: 160px; height: 160px; left: 56%; bottom: 25px; animation: smokeRise 5.5s ease-in-out infinite 0.8s; }
.smoke-5 { width: 130px; height: 130px; left: 40%; bottom: 35px; animation: smokeRise 6.3s ease-in-out infinite 3.0s; }

@keyframes smokeRise {
    0% {
        opacity: 0;
        transform: translateY(20px) scale(0.6) rotate(0deg);
    }
    30% {
        opacity: 0.55;
    }
    70% {
        opacity: 0.35;
        transform: translateY(-80px) scale(1.3) rotate(15deg);
    }
    100% {
        opacity: 0;
        transform: translateY(-160px) scale(1.9) rotate(35deg);
    }
}

/* Brand Ambassador Keyframe Animations & Responsive Rules */
@keyframes floatBadge1 {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-7px); }
}
@keyframes floatBadge2 {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(7px); }
}
@keyframes spinRings {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
@media (max-width: 992px) {
    .ambassador-grid {
        grid-template-columns: 1fr !important;
        gap: 60px !important;
    }
    .ambassador-metrics {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 20px !important;
        padding: 24px 20px !important;
    }
}
@media (max-width: 640px) {
    .ambassador-metrics {
        grid-template-columns: 1fr !important;
    }
}
</style>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Swiper Slider Kategori Menu
    if (window.Swiper) {
        new window.Swiper('.menu-swiper', {
            modules: [window.SwiperModules.Navigation],
            slidesPerView: 'auto',
            spaceBetween: 0,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-btn-next',
                prevEl: '.swiper-btn-prev',
            },
        });
    }

    // 2. Lottie Realistis: Kobaran Api Nyata Pilihan User (fire_loop)
    // Tinggi diatur proporsional agar TIDAK melebihi tinggi produk
    if (window.lottie) {
        const fireConfigs = [
            { id: 'lottie-fire-back', path: '{{ asset("lottie/fire-loop.json") }}' },
            { id: 'lottie-fire-back-left', path: '{{ asset("lottie/fire-loop.json") }}' },
            { id: 'lottie-fire-back-right', path: '{{ asset("lottie/fire-loop.json") }}' },
            { id: 'lottie-fire-front-inner', path: '{{ asset("lottie/fire-loop.json") }}' },
        ];

        fireConfigs.forEach(function (cfg) {
            const el = document.getElementById(cfg.id);
            if (el) {
                window.lottie.loadAnimation({
                    container: el,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: cfg.path
                });
            }
        });
    }

    // 3. Interaksi Klik Slide Produk Menu
    const productSlides = document.querySelectorAll('.product-menu-slide');
    productSlides.forEach(slide => {
        slide.addEventListener('click', function () {
            productSlides.forEach(s => {
                const circle = s.querySelector('.product-thumb-circle');
                const title = s.querySelector('.product-menu-title');
                if (circle) circle.style.outline = 'none';
                if (title) {
                    title.style.color = '#4b5563';
                    title.style.borderBottom = 'none';
                }
            });
            const activeCircle = this.querySelector('.product-thumb-circle');
            const activeTitle = this.querySelector('.product-menu-title');
            if (activeCircle) {
                activeCircle.style.outline = '3px solid #e4001c';
                activeCircle.style.outlineOffset = '3px';
            }
            if (activeTitle) {
                activeTitle.style.color = '#e4001c';
                activeTitle.style.borderBottom = '2.5px solid #e4001c';
                activeTitle.style.paddingBottom = '2px';
            }
        });
    });
});
</script>
@endpush
