@extends('layouts.app')

@section('title', 'Katalog Resep Masakan Teyvat')

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; margin-bottom: 25px; border-bottom: 1px solid #334155; padding-bottom: 15px;">
        <div>
            <h1 style="color: #facc15; font-size: 26px; margin-bottom: 5px;">
                📖 Buku Resep & Pengelolaan Kuliner Teyvat
            </h1>
        </div>
        <div>
            <span style="background-color: rgba(34, 197, 94, 0.15); color: #4ade80; border: 1px solid #22c55e; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                ✓ Total: {{ count($recipes) }} Resep Terdaftar
            </span>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;">

        @foreach($recipes as $item)
            <div style="background: rgba(30, 41, 59, 0.7); border: 1px solid #334155; border-radius: 12px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <span style="background: #0f172a; color: #38bdf8; padding: 3px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; border: 1px solid #1e293b;">
                            📍 {{ $item['region'] }}
                        </span>
                        <span style="color: #facc15; font-size: 14px; letter-spacing: 2px;">
                            @for($i = 0; $i < $item['rarity']; $i++)
                                ★
                            @endfor
                        </span>
                    </div>

                    <h2 style="color: #f8fafc; font-size: 18px; margin-bottom: 6px;">
                        {{ $item['nama'] }}
                    </h2>

                    <p style="color: #a855f7; font-size: 12px; font-weight: 600; margin-bottom: 12px; text-transform: uppercase;">
                        🏷️ {{ $item['tipe'] }}
                    </p>

                    <div style="background: rgba(15, 23, 42, 0.6); padding: 10px; border-radius: 8px; margin-bottom: 12px;">
                        <p style="color: #94a3b8; font-size: 11px; margin-bottom: 3px; font-weight: 600; text-transform: uppercase;">Bahan Racikan:</p>
                        <p style="color: #cbd5e1; font-size: 13px; margin: 0; line-height: 1.4;">
                            {{ $item['bahan'] }}
                        </p>
                    </div>

                    <div>
                        <p style="color: #94a3b8; font-size: 11px; margin-bottom: 3px; font-weight: 600; text-transform: uppercase;">Efek Buff:</p>
                        <p style="color: #fbbf24; font-size: 13px; margin: 0; line-height: 1.4;">
                            {{ $item['efek'] }}
                        </p>
                    </div>
                </div>

                <div style="margin-top: 20px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: flex-end;">
                    <span style="color: #64748b; font-size: 12px; font-style: italic;">
                        Resep Resmi Dapur Teyvat
                    </span>
                </div>
            </div>
        @endforeach

    </div>

@endsection
