<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerbang Masuk Petualang - Teyvat Food Guide</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at center, #1e1b4b 0%, #090d16 100%);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(234, 179, 8, 0.3);
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            text-align: center;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        h1 {
            font-family: 'Cinzel', serif;
            color: #facc15;
            font-size: 24px;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        p.subtitle {
            color: #94a3b8;
            font-size: 13px;
            margin-bottom: 28px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #cbd5e1;
            margin-bottom: 6px;
        }
        input {
            width: 100%;
            padding: 12px 14px;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            outline: none;
            transition: all 0.2s ease;
        }
        input:focus {
            border-color: #facc15;
            box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.2);
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
            border: none;
            border-radius: 8px;
            color: #0f172a;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(234, 179, 8, 0.3);
            transition: transform 0.1s ease;
        }
        button:hover {
            transform: translateY(-2px);
        }
        .tips {
            margin-top: 20px;
            font-size: 11px;
            color: #64748b;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="icon">✨🍲</div>
        <h1>TEYVAT CULINARY</h1>
        <p class="subtitle">Masuk untuk melihat panduan rahasia resep masakan Teyvat</p>

        <form action="{{ route('dashboard') }}" method="GET">
            <div class="form-group">
                <label for="username">Nama Petualang / Chef</label>
                <input type="text" id="username" name="username" placeholder="Contoh: Traveler Aether / Xiangling" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi (Simulasi Bebas)</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit">Masuk ke Dapur Teyvat ➔</button>
        </form>

        <p class="tips"> web uts </p>
    </div>

</body>
</html>
