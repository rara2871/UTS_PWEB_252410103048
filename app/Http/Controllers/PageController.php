<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username', 'Traveler');

        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $recipes = [
            [
                'nama' => "Adeptus' Temptation",
                'region' => 'Liyue',
                'rarity' => 5,
                'tipe' => 'Attack Boost',
                'bahan' => '4x Ham, 3x Crab, 3x Shrimp Meat, 3x Matsutake',
                'efek' => 'Meningkatkan ATK 372 dan Crit Rate 12% selama 300 detik.'
            ],
            [
                'nama' => 'Sweet Madame',
                'region' => 'Mondstadt',
                'rarity' => 2,
                'tipe' => 'Recovery Dish',
                'bahan' => '2x Fowl, 2x Sweet Flower',
                'efek' => 'Memulihkan 24% Max HP dan memberikan tambahan 1.500 HP.'
            ],
            [
                'nama' => 'Barbatos Ratatouille',
                'region' => 'Mondstadt',
                'rarity' => 2,
                'tipe' => 'Stamina Dish',
                'bahan' => '4x Carrot, 4x Potato, 4x Onion',
                'efek' => 'Mengurangi konsumsi stamina meluncur dan berlari 25% selama 900 detik.'
            ],
            [
                'nama' => 'Tricolor Dango',
                'region' => 'Inazuma',
                'rarity' => 3,
                'tipe' => 'Recovery Dish',
                'bahan' => '2x Rice, 2x Snapdragon, 2x Sakura Bloom, 1x Flour',
                'efek' => 'Memulihkan 34% Max HP dan tambahan 1.900 HP.'
            ],
            [
                'nama' => 'Biryani',
                'region' => 'Sumeru',
                'rarity' => 4,
                'tipe' => 'Defense Boost',
                'bahan' => '4x Raw Meat, 3x Rice, 3x Spice, 1x Padisarah',
                'efek' => 'Meningkatkan DEF 261 dan Shield 30% selama 300 detik.'
            ],
            [
                'nama' => 'Fontaine Aspic',
                'region' => 'Fontaine',
                'rarity' => 3,
                'tipe' => 'Recovery Dish',
                'bahan' => '3x Fish, 2x Marcotte, 1x Salt',
                'efek' => 'Memulihkan 32% Max HP dan regenerasi 1.250 HP tiap 5 detik.'
            ]
        ];

        return view('pengelolaan', compact('recipes'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username', 'Traveler');

        $chefData = [
            'rank' => 'Master Chef of Teyvat',
            'fav_dish' => "Adeptus' Temptation",
            'specialty' => 'Liyue & Mondstadt Cuisine',
            'motto' => 'Semua bahan di Teyvat bisa diolah menjadi hidangan lezat!'
        ];

        return view('profile', compact('username', 'chefData'));
    }
}
