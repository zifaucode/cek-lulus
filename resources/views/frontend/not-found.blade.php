<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Data Tidak Ditemukan - {{ $web->title ?? 'Cek Kelulusan' }}</title>
    <link rel="shortcut icon" href="/files/logo/{{ $web->logo ?? 'LOGO.PNG' }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet"/>
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --bg: #0D0E12;
            --surface: #111216;
            --text-main: #F3F3F3;
            --text-muted: #888888;
            --accent: #C5A880;
            --danger: #D67268;
            --border: rgba(255, 255, 255, 0.08);
        }

        body {
            font-family: 'Jost', sans-serif;
            background: var(--bg);
            color: var(--text-main);
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        .noise-overlay {
            position: fixed; inset: 0; z-index: 9999; pointer-events: none; opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        .brand-area {
            position: absolute; top: 2.5rem; left: 3rem;
            display: flex; align-items: center; gap: 1rem; z-index: 50;
            text-decoration: none; color: var(--text-main);
        }

        .brand-area img {
            height: 36px; width: auto;
            filter: grayscale(100%) brightness(150%);
            opacity: 0.9;
        }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem; letter-spacing: 0.1em;
            text-transform: uppercase; font-weight: 600;
        }

        .result-page {
            flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: 8rem 2rem 4rem; position: relative;
        }

        .error-card {
            background: var(--surface); border: 1px solid var(--border);
            max-width: 640px; width: 100%; padding: 5rem 4rem;
            position: relative; overflow: hidden; text-align: center;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.2s forwards;
        }

        .error-card::before {
            content: ''; position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 30%; height: 2px; background: var(--danger);
        }

        .watermark {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-10deg);
            font-family: 'Playfair Display', serif; font-size: 10rem;
            color: rgba(255,255,255,0.02); pointer-events: none; z-index: 0; white-space: nowrap;
        }

        .error-card > * { position: relative; z-index: 1; }

        .status-badge {
            font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.2em;
            padding: 0.4rem 1.2rem; display: inline-block; margin-bottom: 2.5rem;
            border: 1px solid var(--danger); color: var(--danger);
        }

        .headline {
            font-family: 'Playfair Display', serif; font-size: 2.8rem;
            margin-bottom: 1.5rem; color: var(--text-main); line-height: 1.1;
        }

        .message {
            color: var(--text-muted); line-height: 1.7; margin-bottom: 3.5rem;
            font-size: 1.05rem; max-width: 480px; margin-inline: auto;
        }

        .btn-action {
            display: inline-flex; align-items: center; justify-content: center; gap: 0.75rem;
            padding: 1.25rem 3rem; font-size: 0.85rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.15em;
            text-decoration: none; transition: all 0.4s ease; border: 1px solid transparent; cursor: pointer;
            background: transparent; color: var(--text-main); border-color: var(--border);
        }

        .btn-action:hover {
            border-color: var(--text-main); transform: translateY(-2px);
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .error-card { padding: 4rem 2rem; }
            .headline { font-size: 2.2rem; }
            .watermark { font-size: 5rem; }
            .brand-area { left: 2rem; top: 2rem; }
        }
    </style>
</head>
<body>
    <div class="noise-overlay"></div>

    <a href="/" class="brand-area">
        <img alt="Logo" src="/files/logo/{{ $web->logo ?? 'LOGO.png' }}"/>
        <span class="brand-name">{{ $web->title ?? 'Cek Kelulusan' }}</span>
    </a>

    <main class="result-page">
        <div class="error-card">
            <div class="watermark">404</div>
            <span class="status-badge">Tidak Ditemukan</span>
            <h2 class="headline">Nomor Ujian Tidak Valid</h2>
            <p class="message">Nomor ujian yang Anda masukkan tidak terdaftar dalam sistem kami. Harap periksa kembali dan coba lagi dengan nomor yang benar.</p>
            
            <a href="/" class="btn-action">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                Coba Lagi
            </a>
        </div>
    </main>

</body>
</html>