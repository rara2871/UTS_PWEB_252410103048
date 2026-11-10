<!-- Component Navbar Makanan Teyvat -->
<nav style="background-color: #1e293b; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border-bottom: 2px solid #eab308;">
    <div style="display: flex; align-items: center; gap: 10px;">
        <span style="font-size: 24px;">🍳</span>
        <span style="color: #facc15; font-size: 20px; font-weight: bold; letter-spacing: 1px;">Teyvat Food Guide</span>
    </div>

    <div style="display: flex; gap: 20px;">
        <a href="{{ route('dashboard', ['username' => request('username', 'Traveler')]) }}"
           style="color: #f8fafc; text-decoration: none; font-weight: 500; font-size: 14px; padding: 6px 12px; border-radius: 6px; background-color: rgba(255,255,255,0.05);">
           Dashboard
        </a>

        <a href="{{ route('pengelolaan') }}"
           style="color: #f8fafc; text-decoration: none; font-weight: 500; font-size: 14px; padding: 6px 12px; border-radius: 6px; background-color: rgba(255,255,255,0.05);">
           Daftar Resep
        </a>

        <a href="{{ route('profile', ['username' => request('username', 'Traveler')]) }}"
           style="color: #f8fafc; text-decoration: none; font-weight: 500; font-size: 14px; padding: 6px 12px; border-radius: 6px; background-color: rgba(255,255,255,0.05);">
           Profil Traveler
        </a>

        <a href="{{ route('login') }}"
           style="color: #f87171; text-decoration: none; font-weight: 600; font-size: 14px; padding: 6px 12px; border-radius: 6px; border: 1px solid #f87171;">
           Logout
        </a>
    </div>
</nav>
