<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{ $web->title ?? 'Cek Kelulusan' }}</title>
    <meta name="description" content="Sistem Pengecekan Kelulusan Siswa - {{ $web->title ?? '' }}"/>
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
            --accent-hover: #E5C8A0;
            --border: rgba(255, 255, 255, 0.08);
        }

        html { scroll-behavior: smooth; }

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

        .login-link {
            position: absolute; top: 3rem; right: 3rem; z-index: 50;
            font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em;
            color: var(--text-muted); text-decoration: none;
            padding-bottom: 4px; border-bottom: 1px solid transparent;
            transition: all 0.3s ease;
        }

        .login-link:hover {
            color: var(--accent); border-color: var(--accent);
        }

        .layout-wrapper {
            display: grid; grid-template-columns: 1fr 1fr; min-height: 100vh;
        }

        .col-left {
            padding: 8rem 4rem 4rem 4rem;
            display: flex; flex-direction: column; justify-content: center;
            border-right: 1px solid var(--border);
            position: relative;
        }

        .col-right {
            padding: 8rem 4rem 4rem 4rem;
            display: flex; flex-direction: column; justify-content: center;
            background: var(--surface);
            position: relative;
        }

        .headline {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 5vw, 5.5rem);
            line-height: 1.1; font-weight: 400;
            margin-bottom: 2.5rem;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.2s forwards;
        }

        .headline em {
            font-style: italic; color: var(--accent);
        }

        .ornament {
            width: 80px; height: 1px; background: var(--accent);
            margin-bottom: 2.5rem;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.4s forwards;
        }

        .desc {
            color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;
            max-width: 420px; margin-bottom: 3rem;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.6s forwards;
        }

        .countdown-wrap {
            display: inline-flex; align-items: center; gap: 0.75rem;
            font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em;
            color: var(--accent);
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.8s forwards;
        }

        .pulse-dot {
            width: 6px; height: 6px; background: var(--accent); border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .form-container, .closed-container {
            max-width: 440px; width: 100%;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.5s forwards;
        }

        .input-label {
            font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.2em;
            color: var(--text-muted); margin-bottom: 1rem; display: block;
        }

        .input-field {
            width: 100%; background: transparent; border: none;
            border-bottom: 1px solid var(--border);
            padding: 1rem 0; font-size: 1.75rem; color: var(--text-main);
            font-family: 'Playfair Display', serif;
            transition: all 0.4s ease; border-radius: 0;
        }

        .input-field:focus {
            outline: none; border-bottom-color: var(--accent);
        }

        .input-field::placeholder {
            color: rgba(255, 255, 255, 0.1); font-family: 'Jost', sans-serif; font-size: 1.2rem;
        }

        .btn-submit {
            margin-top: 3.5rem; background: var(--accent); color: #000;
            border: none; padding: 1.25rem 3rem;
            font-family: 'Jost', sans-serif; font-size: 0.85rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.15em;
            cursor: pointer; transition: all 0.4s ease;
            display: inline-flex; align-items: center; gap: 1rem;
        }

        .btn-submit:hover {
            background: var(--accent-hover); transform: translateY(-2px);
        }

        .closed-icon {
            margin-bottom: 2rem;
        }
        
        .closed-container h2 {
            font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 400;
            margin-bottom: 1rem; color: var(--text-main);
        }

        .closed-container p {
            color: var(--text-muted); line-height: 1.6;
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }

        [v-cloak]>* { display: none; }
        [v-cloak]::before { content: ""; }

        @media (max-width: 960px) {
            .layout-wrapper { grid-template-columns: 1fr; }
            .col-left, .col-right { padding: 4rem 2.5rem; min-height: auto; }
            .col-left { padding-top: 8rem; border-right: none; border-bottom: 1px solid var(--border); }
            .brand-area { left: 2.5rem; }
            .login-link { right: 2.5rem; }
            .headline { font-size: 3rem; }
        }
    </style>
</head>
<body>
    <div class="noise-overlay"></div>

    <a href="/" class="brand-area">
        <img alt="Logo" src="/files/logo/{{ $web->logo ?? 'LOGO.png' }}"/>
        <span class="brand-name">{{ $web->title ?? 'Cek Kelulusan' }}</span>
    </a>

    <a href="/login" class="login-link">Admin Akses</a>

    <main id="app" v-cloak class="layout-wrapper">
        <div class="col-left">
            <h1 class="headline">
                <em>Cek Hasil</em><br/>
                Kelulusan<br/>
                Siswa
            </h1>
            <div class="ornament"></div>
            <p class="desc">Silakan masukkan Nomor Ujian Anda untuk melihat hasil kelulusan secara resmi. Tahun Akademik {{ date('Y') }}.</p>
            
            <div class="countdown-wrap">
                <span class="pulse-dot"></span>
                <span id="demo">Memuat waktu...</span>
            </div>
        </div>

        <div class="col-right">
            @if($setting->status == 1)
                <div v-if="currentDate() <= 0" class="form-container">
                    <form @submit.prevent="submitSearch">
                        <label class="input-label">Nomor Ujian</label>
                        <input type="text" class="input-field" v-model="search" placeholder="Masukkan No. Ujian" maxlength="17" autofocus required/>
                        <button type="submit" class="btn-submit">
                            Lihat Hasil
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </form>
                </div>
            @else
                <div class="closed-container">
                    <div class="closed-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <h2>Akses Ditutup</h2>
                    <p>Pengumuman belum dibuka. Silakan kembali sesuai dengan jadwal yang telah ditentukan.</p>
                </div>
            @endif
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                web: JSON.parse(String.raw `{!! json_encode($web) !!}`),
                setting: JSON.parse(String.raw `{!! json_encode($setting) !!}`),
                search: '{{ $req_search }}',
                dt: '{!! $setting->date !!} {!! $setting->time !!}',
                dt2: '{{ $dt }}',
            },
            methods: {
                submitSearch: function() {
                    if(this.search.trim() !== '') {
                        window.location.href = `/?search=${this.search}`;
                    }
                },
                currentDate() {
                    let datedb = new Date(this.dt).getTime();
                    let current = new Date().getTime();
                    return datedb - current;
                },
            }
        });

        // Countdown
        var countDownDate = new Date("{!! $setting->date !!} {!! $setting->time !!}").getTime();
        var wasWaiting = false;
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000*60*60*24));
            var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
            var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
            var seconds = Math.floor((distance%(1000*60))/1000);

            var el = document.getElementById("demo");
            if(distance < 0) {
                clearInterval(x);
                el.innerHTML = "Pengumuman Dibuka";
                if(wasWaiting) {
                    setTimeout(() => window.location.reload(), 1500);
                }
            } else {
                wasWaiting = true;
                el.innerHTML = days + "H " + hours + "J " + minutes + "M " + seconds + "D";
            }
        }, 1000);
    </script>
</body>
</html>