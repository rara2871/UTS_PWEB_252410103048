@extends('layouts.app')

@section('title', 'Dashboard Petualang')

@section('content')

    <div style="background: linear-gradient(135deg, rgba(30, 41, 59, 0.9) 0%, rgba(15, 23, 42, 0.9) 100%); border: 1px solid rgba(234, 179, 8, 0.3); border-radius: 16px; padding: 35px; margin-bottom: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div>
                <span style="background-color: rgba(234, 179, 8, 0.15); color: #facc15; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; border: 1px solid rgba(234, 179, 8, 0.3);">
                    Teyvat Culinary Guild
                </span>
                <h1 style="color: #facc15; font-size: 32px; margin-top: 10px; margin-bottom: 8px;">
                    Selamat Datang, {{ $username }}! ⚔️🍳
                </h1>
                <p style="color: #94a3b8; font-size: 15px; max-width: 600px; line-height: 1.6;">
                    Buku panduan resep masakan 7 Negara Teyvat siap membantu petualanganmu. Racik hidangan terbaik untuk menambah kekuatan bertarung dan memulihkan HP partymu!
                </p>
            </div>

            <div style="display: flex; gap: 12px;">
                <a href="{{ route('pengelolaan') }}" style="background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%); color: #0f172a; text-decoration: none; padding: 12px 20px; border-radius: 8px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 12px rgba(234, 179, 8, 0.3);">
                    📖 Buka Buku Resep
                </a>
                <a href="{{ route('profile', ['username' => $username]) }}" style="background: rgba(255,255,255,0.08); color: #f8fafc; border: 1px solid #475569; text-decoration: none; padding: 12px 20px; border-radius: 8px; font-weight: 600; font-size: 14px;">
                    👤 Profil Traveler
                </a>
            </div>
        </div>
    </div>

    <!-- Statistik Kuliner Teyvat -->
    <h2 style="font-size: 20px; color: #f8fafc; margin-bottom: 18px; display: flex; align-items: center; gap: 8px;">
        <span>📊</span> Ikhtisar Kuliner Teyvat
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-bottom: 35px;">
        <div style="background: rgba(30, 41, 59, 0.6); border: 1px solid #334155; padding: 22px; border-radius: 12px;">
            <p style="color: #94a3b8; font-size: 13px; margin-bottom: 6px;">Total Resep Terkatalog</p>
            <h3 style="color: #facc15; font-size: 28px;">6 Hidangan</h3>
            <p style="color: #38bdf8; font-size: 12px; margin-top: 4px;">Tersedia di Menu Pengelolaan</p>
        </div>

        <div style="background: rgba(30, 41, 59, 0.6); border: 1px solid #334155; padding: 22px; border-radius: 12px;">
            <p style="color: #94a3b8; font-size: 13px; margin-bottom: 6px;">Cakupan Wilayah</p>
            <h3 style="color: #a855f7; font-size: 28px;">5 Region</h3>
            <p style="color: #cbd5e1; font-size: 12px; margin-top: 4px;">Mondstadt, Liyue, Inazuma, Sumeru, Fontaine</p>
        </div>

        <div style="background: rgba(30, 41, 59, 0.6); border: 1px solid #334155; padding: 22px; border-radius: 12px;">
            <p style="color: #94a3b8; font-size: 13px; margin-bottom: 6px;">Tingkat Koki Saat Ini</p>
            <h3 style="color: #34d399; font-size: 28px;">Master Chef ⭐⭐⭐⭐⭐</h3>
            <p style="color: #94a3b8; font-size: 12px; margin-top: 4px;">Status Petualang Aktif</p>
        </div>
    </div>

    <div style="background: rgba(14, 165, 233, 0.1); border-left: 4px solid #38bdf8; padding: 18px 24px; border-radius: 8px;">
        <h4 style="color: #38bdf8; font-size: 15px; margin-bottom: 4px;">💡 Tips Memasak dari Paimon:</h4>
        <p style="color: #cbd5e1; font-size: 14px; margin: 0; line-height: 1.5;">
            Gunakan karakter spesialis saat memasak! Contohnya gunakan Xiangling saat memasak makanan peningkat ATK untuk mendapatkan peluang 12 persen menghasilkan masakan ganda!
        </p>
    </div>

@endsection
