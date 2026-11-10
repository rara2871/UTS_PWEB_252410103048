<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Genshin Impact</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #0b0f19 0%, #1e1e2f 100%);
            color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        h1, h2, h3 {
            font-family: 'Cinzel', serif;
        }
        .main-container {
            flex: 1;
            padding: 30px 20px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="main-container">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
