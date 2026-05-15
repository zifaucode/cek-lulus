<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Hasil Kelulusan - {{ $web->title ?? 'Cek Kelulusan' }}</title>
    <meta name="description" content="Hasil pengecekan kelulusan siswa"/>
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

        .confetti-container { position: fixed; inset: 0; z-index: 0; pointer-events: none; overflow: hidden; }
        .confetti {
            position: absolute; top: -20px;
            width: 4px; height: 16px;
            opacity: 0; animation: confettiFall linear forwards;
        }
        @keyframes confettiFall {
            0% { opacity: 1; transform: translateY(0) rotate(0deg); }
            100% { opacity: 0; transform: translateY(100vh) rotate(720deg); }
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

        .login-link:hover { color: var(--accent); border-color: var(--accent); }

        .result-page {
            flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: 8rem 2rem 4rem; position: relative; z-index: 10;
        }

        .result-card {
            background: var(--surface); border: 1px solid var(--border);
            max-width: 680px; width: 100%; padding: 4.5rem;
            position: relative; overflow: hidden;
            opacity: 0; animation: fadeSlideUp 1s ease-out 0.2s forwards;
        }

        .watermark {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-10deg);
            font-family: 'Playfair Display', serif; font-size: 10rem;
            color: rgba(255,255,255,0.015); pointer-events: none; z-index: 0; white-space: nowrap;
        }

        .result-card > * { position: relative; z-index: 1; }

        .status-badge {
            font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.2em;
            padding: 0.4rem 1.2rem; display: inline-block; margin-bottom: 2.5rem;
            border: 1px solid currentColor;
        }
        
        .status-badge.success { color: var(--accent); }
        .status-badge.danger { color: var(--danger); }

        .student-name {
            font-family: 'Playfair Display', serif; font-size: 3rem;
            margin-bottom: 1rem; color: var(--text-main); line-height: 1.1;
        }

        .student-message {
            color: var(--text-muted); line-height: 1.7; margin-bottom: 3.5rem;
            font-size: 1.05rem;
        }

        .result-details {
            border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
            padding: 2.5rem 0; margin-bottom: 3.5rem;
            display: grid; gap: 1.75rem;
        }

        .detail-item { display: flex; justify-content: space-between; align-items: center; }
        
        .detail-item span {
            color: var(--text-muted); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em;
        }

        .detail-item strong {
            font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 400; color: var(--text-main);
        }
        
        .detail-item .text-success { color: var(--accent); }
        .detail-item .text-danger { color: var(--danger); }

        .btn-group { display: flex; gap: 1.5rem; flex-wrap: wrap; }

        .btn-action {
            display: inline-flex; align-items: center; justify-content: center; gap: 0.75rem;
            padding: 1.25rem 2.5rem; font-size: 0.85rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.15em;
            text-decoration: none; transition: all 0.4s ease; border: 1px solid transparent; cursor: pointer;
        }

        .btn-action.primary { background: var(--accent); color: #000; }
        .btn-action.primary:hover { background: var(--accent-hover); transform: translateY(-2px); }

        .btn-action.secondary { background: transparent; color: var(--text-muted); border-color: var(--border); }
        .btn-action.secondary:hover { color: var(--text-main); border-color: var(--text-main); }

        .countdown-wrap {
            display: inline-flex; align-items: center; gap: 0.75rem;
            font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.15em;
            color: var(--accent); margin-bottom: 2rem;
            padding: 0.75rem 1.5rem; border: 1px solid var(--border);
            opacity: 0; animation: fadeSlideUp 1s ease-out forwards;
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        [v-cloak]>* { display: none; }
        [v-cloak]::before { content: ""; }

        @media (max-width: 768px) {
            .result-card { padding: 3rem 2rem; }
            .student-name { font-size: 2.2rem; }
            .watermark { font-size: 6rem; }
            .brand-area { left: 2rem; top: 2rem; }
            .login-link { right: 2rem; top: 2.5rem; }
        }
    </style>
</head>
<body>
    <div class="noise-overlay"></div>
    <div class="confetti-container" id="confetti-container"></div>

    <a href="/" class="brand-area">
        <img alt="Logo" src="/files/logo/{{ $web->logo ?? 'LOGO.png' }}"/>
        <span class="brand-name">{{ $web->title ?? 'Cek Kelulusan' }}</span>
    </a>
    
    <a href="/login" class="login-link">Admin Akses</a>

    <main id="app" v-cloak class="result-page">
        <div class="countdown-wrap">
            <span id="demo">Memuat waktu...</span>
        </div>

        @if($setting->status == 1)
        <div v-if="currentDate() <= 0" style="width:100%; display:flex; justify-content:center;">
            @if(isset($req_search))
            <div v-for="st in student" v-if="search == st.no_exam" style="width:100%; display:flex; justify-content:center;">
                
                <!-- LULUS -->
                <div v-if="st.status == 1" class="result-card">
                    <div class="watermark">LULUS</div>
                    <span class="status-badge success">Status: Lulus</span>
                    <h2 class="student-name">@{{ st.name }}</h2>
                    <p class="student-message">@{{ st.message }}</p>
                    
                    <div class="result-details">
                        <div class="detail-item" v-if="st.no_exam">
                            <span>No. Ujian</span>
                            <strong>@{{ st.no_exam }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Kelas</span>
                            <strong>@{{ st.class }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Keputusan</span>
                            <strong class="text-success">Dinyatakan Lulus</strong>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a :href="'/cetak/'+ st.id" class="btn-action primary">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-3 3m0 0l-3-3m3 3V4"/></svg>
                            Unduh SKL
                        </a>
                        <a href="/" class="btn-action secondary">Kembali</a>
                    </div>
                </div>

                <!-- DITUNDA -->
                <div v-if="st.status == 2" class="result-card">
                    <div class="watermark" style="color: rgba(255,255,255,0.01)">DITUNDA</div>
                    <span class="status-badge danger">Status: Ditunda</span>
                    <h2 class="student-name">Mohon Maaf, @{{ st.name }}</h2>
                    <p class="student-message">@{{ st.message }}</p>
                    
                    <div class="result-details">
                        <div class="detail-item" v-if="st.no_exam">
                            <span>No. Ujian</span>
                            <strong>@{{ st.no_exam }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Kelas</span>
                            <strong>@{{ st.class }}</strong>
                        </div>
                        <div class="detail-item">
                            <span>Keputusan</span>
                            <strong class="text-danger">Ditunda</strong>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a href="/" class="btn-action secondary">Kembali</a>
                    </div>
                </div>

            </div>
            @endif
        </div>
        @else
        <div class="result-card" style="text-align: center;">
            <div class="watermark">TUTUP</div>
            <span class="status-badge" style="color: var(--accent); border-color: var(--accent);">Belum Dibuka</span>
            <h2 class="student-name" style="font-size: 2.2rem;">Akses Ditutup</h2>
            <p class="student-message" style="margin-inline: auto; margin-bottom: 2.5rem;">Pengumuman belum dibuka. Silakan kembali sesuai dengan jadwal yang telah ditentukan.</p>
            <a href="/" class="btn-action secondary">Kembali</a>
        </div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        // Confetti for Lulus
        (function(){
            var hasLulus = {!! json_encode($student->where('status', 1)->count() > 0) !!};
            if(hasLulus) {
                var c = document.getElementById('confetti-container');
                var colors = ['#C5A880', '#E5C8A0', '#FFFFFF'];
                for(var i=0; i<40; i++){
                    var el = document.createElement('div');
                    el.className = 'confetti';
                    el.style.left = Math.random()*100+'%';
                    el.style.background = colors[Math.floor(Math.random()*colors.length)];
                    el.style.animationDuration = (3+Math.random()*4)+'s';
                    el.style.animationDelay = Math.random()*2+'s';
                    el.style.width = (2+Math.random()*3)+'px';
                    el.style.height = (10+Math.random()*15)+'px';
                    c.appendChild(el);
                }
            }
        })();

        new Vue({
            el: '#app',
            data: {
                web: JSON.parse(String.raw `{!! json_encode($web) !!}`),
                student: JSON.parse(String.raw `{!! json_encode($student) !!}`),
                setting: JSON.parse(String.raw `{!! json_encode($setting) !!}`),
                search: '{{ $req_search }}',
                dt: '{!! $setting->date !!} {!! $setting->time !!}',
                dt2: '{{ $dt }}',
            },
            methods: {
                submitSearch: function() {
                    if(this.search.trim() !== '') {
                        window.location.href = `/?search=${this.search}`
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