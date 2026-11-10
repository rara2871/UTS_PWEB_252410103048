@extends('layouts.app')

@section('title', 'Profil Petualang & Koki Teyvat')

@section('content')

    <div style="margin-bottom: 25px;">
        <h1 style="color: #facc15; font-size: 26px; margin-bottom: 5px;">
            👤 Profil Petualang & Koki Teyvat
        </h1>
    </div>

    <div style="background: rgba(30, 41, 59, 0.7); border: 1px solid rgba(234, 179, 8, 0.3); border-radius: 16px; padding: 35px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); max-width: 800px; margin: 0 auto;">

        <div style="display: flex; align-items: center; gap: 24px; border-bottom: 1px solid #334155; padding-bottom: 25px; margin-bottom: 25px; flex-wrap: wrap;">
            <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 42px; box-shadow: 0 0 20px rgba(234, 179, 8, 0.4);">
                🧑‍🍳
            </div>
            <div>
                <span style="background-color: rgba(56, 189, 248, 0.15); color: #38bdf8; padding: 3px 10px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: uppercase;">
                    Adventurers' Guild Member
                </span>
                <h2 style="color: #f8fafc; font-size: 26px; margin-top: 6px; margin-bottom: 4px;">
                    {{ $username }}
                </h2>
                <p style="color: #facc15; font-size: 14px; font-weight: 500;">
                    ⭐ {{ $chefData['rank'] }}
                </p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 25px;">

            <div style="background: #0f172a; padding: 15px; border-radius: 10px; border: 1px solid #1e293b;">
                <p style="color: #94a3b8; font-size: 12px; margin-bottom: 4px;">Hidangan Andalan:</p>
                <p style="color: #facc15; font-size: 15px; font-weight: 600; margin: 0;">
                    🍲 {{ $chefData['fav_dish'] }}
                </p>
            </div>

            <div style="background: #0f172a; padding: 15px; border-radius: 10px; border: 1px solid #1e293b;">
                <p style="color: #94a3b8; font-size: 12px; margin-bottom: 4px;">Spesialisasi Masakan:</p>
                <p style="color: #38bdf8; font-size: 15px; font-weight: 600; margin: 0;">
                    🗺️ {{ $chefData['specialty'] }}
                </p>
            </div>

        </div>

        <div style="background: rgba(234, 179, 8, 0.08); border-left: 4px solid #facc15; padding: 16px 20px; border-radius: 8px; margin-bottom: 30px;">
            <p style="color: #94a3b8; font-size: 12px; margin-bottom: 4px; font-weight: 600;">MOTTO MEMASAK:</p>
            <p style="color: #f8fafc; font-size: 14px; font-style: italic; margin: 0;">
                "{{ $chefData['motto'] }}"
            </p>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
            <a href="{{ route('dashboard', ['username' => $username]) }}" style="color: #94a3b8; text-decoration: none; font-size: 14px;">
                ← Kembali ke Dashboard
            </a>
            <a href="{{ route('login') }}" style="background-color: #ef4444; color: #fff; text-decoration: none; padding: 10px 18px; border-radius: 8px; font-size: 13px; font-weight: 600;">
                Ganti Karakter (Logout)
            </a>
        </div>

    </div>

@endsection
