<!DOCTYPE html><html lang="id"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk (Desktop) — Campus Map UNESA</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">/** @type {import('tailwindcss').Config} */
globalThis.tailwind = globalThis.tailwind || {};
globalThis.tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'primary-navy': '#142D4E',
        'secondary-blue': '#254B70',
        'unesa-gold': '#D99B26',
        'location-blue': '#007AFF',
        'success': '#16A34A',
        'warning': '#D97706',
        'error': '#DC2626',
        'light-primary': '#142D4E',
        'light-on-primary': '#FFFFFF',
        'light-secondary': '#254B70',
        'light-on-secondary': '#FFFFFF',
        'light-background': '#F4F7FA',
        'light-on-background': '#1E293B',
        'light-surface': '#FFFFFF',
        'light-on-surface': '#1E293B',
        'light-surface-variant': '#F1F5F9',
        'light-on-surface-variant': '#627188',
        'light-border': '#E2E8F0',
        'dark-primary': '#60A5FA',
        'dark-on-primary': '#0B1626',
        'dark-secondary': '#254B70',
        'dark-on-secondary': '#FFFFFF',
        'dark-background': '#0B1626',
        'dark-on-background': '#F1F5F9',
        'dark-surface': '#112238',
        'dark-on-surface': '#F1F5F9',
        'dark-surface-variant': '#182F4D',
        'dark-on-surface-variant': '#94A3B8',
        'dark-border': '#243B55',
      },
      borderRadius: {
        'sm': '6px',
        'DEFAULT': '10px',
        'md': '12px',
        'lg': '16px',
        'xl': '20px',
        'full': '9999px',
      },
      spacing: {
        'gutter-xs': '4px',
        'gutter-sm': '8px',
        'gutter-md': '12px',
        'gutter-lg': '16px',
        'gutter-xl': '24px',
        'section': '32px',
        'page-margin': '16px',
      },
      fontFamily: {
        'display': ['"Jost"', 'sans-serif'],
        'headline': ['"Jost"', 'sans-serif'],
        'title': ['"Instrument Sans"', 'sans-serif'],
        'body': ['"Instrument Sans"', 'sans-serif'],
        'label': ['"Instrument Sans"', 'sans-serif'],
        'mono': ['"Source Code Pro"', 'monospace'],
      },
      fontSize: {
        'display-lg': ['36px', { lineHeight: '42px', letterSpacing: '-0.5px', fontWeight: '700' }],
        'display-lg-mobile': ['28px', { lineHeight: '34px', letterSpacing: '-0.25px', fontWeight: '700' }],
        'headline-lg': ['24px', { lineHeight: '30px', letterSpacing: '-0.25px', fontWeight: '600' }],
        'headline-md': ['20px', { lineHeight: '26px', letterSpacing: '-0.15px', fontWeight: '600' }],
        'title-md': ['16px', { lineHeight: '22px', letterSpacing: '0px', fontWeight: '600' }],
        'body-md': ['14px', { lineHeight: '21px', letterSpacing: '0px', fontWeight: '400' }],
        'body-sm': ['13px', { lineHeight: '19px', letterSpacing: '0px', fontWeight: '400' }],
        'label-lg': ['14px', { lineHeight: '20px', letterSpacing: '0px', fontWeight: '600' }],
        'label-sm': ['12px', { lineHeight: '16px', letterSpacing: '0.1px', fontWeight: '500' }],
        'mono-sm': ['12px', { lineHeight: '16px', letterSpacing: '0px', fontWeight: '500' }],
      },
      transitionDuration: {
        'state-change': '120ms',
        'surface-enter': '240ms',
        'surface-exit': '160ms',
      },
      transitionDelay: {
        'state-change': '0ms',
        'surface-enter': '0ms',
        'surface-exit': '0ms',
      },
      transitionTimingFunction: {
        'state-change': 'ease-out',
        'surface-enter': 'cubic-bezier(0.2, 0, 0, 1)',
        'surface-exit': 'cubic-bezier(0.3, 0, 1, 1)',
      },
    },
  },
};
if (typeof module !== 'undefined') module.exports = globalThis.tailwind.config;
</script>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Jost:wght@500;600;700&amp;family=Source+Code+Pro:wght@500&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
  <style>
    .material-symbols-outlined, .material-symbols-rounded, .material-symbols-sharp, .material-icons {
      display: inline-block;
      width: 1em;
      height: 1em;
      line-height: 1 !important;
      box-sizing: content-box;
      overflow: hidden;
      white-space: nowrap;
      direction: ltr;
      vertical-align: middle;
    }
  </style>
</head>
<body class="bg-light-background text-light-on-background dark:bg-dark-background dark:text-dark-on-background font-body antialiased selection:bg-light-primary selection:text-light-on-primary">

  <div class="min-h-[1024px] grid grid-cols-1 lg:grid-cols-12" data-stitch-vh="min-h-[1024px]===min-h-screen">
    <!-- Left Spatial Showcase Panel -->
    <aside class="relative hidden lg:flex lg:col-span-7 flex-col justify-between p-section overflow-hidden bg-primary-navy">
      <img src="login.jpg" alt="Gedung Perpustakaan Pusat Universitas Negeri Surabaya" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-primary-navy/95 via-primary-navy/75 to-primary-navy/80" aria-hidden="true"></div>

      <!-- Top Brand Mark -->
      <header class="relative z-10 flex items-center gap-gutter-md">
        <div class="relative inline-flex items-center justify-center w-11 h-11 rounded-md bg-light-surface text-primary-navy shadow-md">
          <span class="material-symbols-outlined text-[24px]" aria-hidden="true">map</span>
          <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-unesa-gold border-2 border-primary-navy" aria-hidden="true"></span>
        </div>
        <div class="flex flex-col">
          <span class="font-headline text-headline-md text-light-on-primary" data-design-text-token="headline-md">Campus Map UNESA</span>
          <span class="font-label text-label-sm text-light-on-primary/95" data-design-text-token="label-sm">Universitas Negeri Surabaya</span>
        </div>
      </header>

      <!-- Bottom Editorial & Spatial Preview -->
      <div class="relative z-10 flex flex-col gap-gutter-xl max-w-xl">
        <div class="flex flex-col gap-gutter-md">
          <h2 class="font-headline text-display-lg text-light-on-primary text-balance" data-design-text-token="display-lg">
            Navigasi Kampus Lebih Mudah
          </h2>
          <p class="font-body text-body-md text-light-on-primary/90 text-pretty max-w-prose" data-design-text-token="body-md">
            Temukan gedung fakultas, perpustakaan, fasilitas parkir, dan rute tercepat di area Ketintang dan Lidah Wetan dalam satu peta interaktif.
          </p>
        </div>

        <!-- Floating Spatial Landmark Pill -->
        <div class="inline-flex items-center justify-between gap-gutter-lg p-gutter-lg rounded-lg bg-light-surface/95 dark:bg-dark-surface/95 border border-light-border dark:border-dark-border shadow-lg max-w-md">
          <div class="flex items-center gap-gutter-md">
            <div class="inline-flex items-center justify-center w-10 h-10 rounded-md bg-light-surface-variant dark:bg-dark-surface-variant text-light-primary dark:text-dark-primary">
              <span class="material-symbols-outlined text-[20px]" aria-hidden="true">local_library</span>
            </div>
            <div class="flex flex-col">
              <span class="font-title text-title-md text-light-on-surface dark:text-dark-on-surface" data-design-text-token="title-md">Perpustakaan Pusat</span>
              <span class="font-body text-body-sm text-light-on-surface-variant dark:text-dark-on-surface-variant" data-design-text-token="body-sm">Kampus Ketintang • Wi-Fi &amp; Parkir</span>
            </div>
          </div>
          <span class="font-mono text-mono-sm text-light-primary dark:text-dark-primary tabular-nums" data-design-text-token="mono-sm">4 mnt</span>
        </div>
      </div>
    </aside>

    <!-- Right Auth Form Column -->
    <div class="lg:col-span-5 flex flex-col justify-between p-gutter-xl lg:p-section bg-light-background dark:bg-dark-background">
      <!-- Top Utility Bar -->
      <header class="flex items-center justify-between lg:justify-end">
        <div class="flex items-center gap-gutter-sm lg:hidden">
          <div class="inline-flex items-center justify-center w-9 h-9 rounded-md bg-light-primary text-light-on-primary dark:bg-dark-primary dark:text-dark-on-primary">
            <span class="material-symbols-outlined text-[20px]" aria-hidden="true">map</span>
          </div>
          <span class="font-headline text-headline-md text-light-on-surface dark:text-dark-on-surface" data-design-text-token="headline-md">Campus Map UNESA</span>
        </div>

        <button id="theme-toggle" data-component-id="button-theme-toggle" data-component-type="button" data-component-variant="icon" type="button" aria-label="Ubah tema tampilan" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-light-surface text-light-on-surface dark:bg-dark-surface dark:text-dark-on-surface border border-light-border dark:border-dark-border hover:bg-light-surface-variant dark:hover:bg-dark-surface-variant active:scale-95 transition duration-state-change ease-state-change shadow-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue">
          <span id="theme-icon" class="material-symbols-outlined text-[20px]" aria-hidden="true">dark_mode</span>
        </button>
      </header>

      <!-- Centered Auth Card -->
      <main class="flex-1 flex items-center justify-center py-gutter-xl">
        <article data-component-id="card-elevated" data-component-type="card" data-component-variant="elevated" class="w-full max-w-md rounded-xl bg-light-surface dark:bg-dark-surface border border-light-border dark:border-dark-border p-section shadow-lg flex flex-col gap-gutter-xl">
          <header class="flex flex-col gap-gutter-xs">
            <h1 class="font-headline text-headline-lg text-light-on-surface dark:text-dark-on-surface text-balance" data-design-text-token="headline-lg">
              Masuk ke Akun
            </h1>
            <p class="font-body text-body-md text-light-on-surface-variant dark:text-dark-on-surface-variant text-pretty" data-design-text-token="body-md">
              Simpan gedung favorit dan akses riwayat rute kampus Anda.
            </p>
          </header>

          <form id="login-form" class="flex flex-col gap-gutter-lg" novalidate>
            <!-- Email / NIM Input -->
            <div class="flex flex-col gap-gutter-xs">
              <label for="identifier" class="font-label text-label-sm text-light-on-surface dark:text-dark-on-surface" data-design-text-token="label-sm">
                Email atau NIM / NIP
              </label>
              <div class="relative flex items-center">
                <span class="material-symbols-outlined text-[18px] text-light-on-surface-variant dark:text-dark-on-surface-variant absolute left-3 pointer-events-none" aria-hidden="true">mail</span>
                <input id="identifier" name="identifier" type="text" autocomplete="username" placeholder="nama@unesa.ac.id" class="w-full pl-10 pr-3 py-2.5 rounded-md bg-light-surface-variant dark:bg-dark-surface-variant border border-light-border dark:border-dark-border font-body text-body-md text-light-on-surface dark:text-dark-on-surface placeholder:text-light-on-surface-variant dark:placeholder:text-dark-on-surface-variant focus:outline-none focus:ring-2 focus:ring-location-blue focus:border-transparent transition duration-state-change ease-state-change">
              </div>
            </div>

            <!-- Password Input with Reveal -->
            <div class="flex flex-col gap-gutter-xs">
              <label for="password" class="font-label text-label-sm text-light-on-surface dark:text-dark-on-surface" data-design-text-token="label-sm">
                Kata Sandi
              </label>
              <div class="relative flex items-center">
                <span class="material-symbols-outlined text-[18px] text-light-on-surface-variant dark:text-dark-on-surface-variant absolute left-3 pointer-events-none" aria-hidden="true">lock</span>
                <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Masukkan kata sandi" class="w-full pl-10 pr-10 py-2.5 rounded-md bg-light-surface-variant dark:bg-dark-surface-variant border border-light-border dark:border-dark-border font-body text-body-md text-light-on-surface dark:text-dark-on-surface placeholder:text-light-on-surface-variant dark:placeholder:text-dark-on-surface-variant focus:outline-none focus:ring-2 focus:ring-location-blue focus:border-transparent transition duration-state-change ease-state-change">
                <button id="toggle-password" type="button" aria-label="Tampilkan kata sandi" class="absolute right-2.5 inline-flex items-center justify-center w-8 h-8 rounded-sm text-light-on-surface-variant dark:text-dark-on-surface-variant hover:text-light-on-surface dark:hover:text-dark-on-surface focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue">
                  <span id="password-eye-icon" class="material-symbols-outlined text-[18px]" aria-hidden="true">visibility</span>
                </button>
              </div>
            </div>

            <!-- Remember & Forgot Password -->
            <div class="flex items-center justify-between gap-gutter-sm">
              <label class="inline-flex items-center gap-gutter-sm cursor-pointer select-none">
                <input id="remember" type="checkbox" class="w-4 h-4 rounded-sm border-light-border dark:border-dark-border bg-light-surface dark:bg-dark-surface-variant text-light-primary dark:text-dark-primary focus:ring-location-blue">
                <span class="font-body text-body-sm text-light-on-surface-variant dark:text-dark-on-surface-variant" data-design-text-token="body-sm">
                  Ingat saya
                </span>
              </label>
              <a href="#lupa-sandi" class="font-label text-label-sm text-light-primary dark:text-dark-primary hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue rounded-sm" data-design-text-token="label-sm">
                Lupa kata sandi?
              </a>
            </div>

            <!-- Inline Feedback Banner (hidden by default) -->
            <p id="form-status" role="status" aria-live="polite" class="hidden font-body text-body-sm px-gutter-md py-gutter-sm rounded-md" data-design-text-token="body-sm"></p>

            <!-- Primary Sign-In Action -->
            <button data-component-id="button-primary" data-component-type="button" data-component-variant="primary" type="submit" class="w-full inline-flex items-center justify-center gap-gutter-sm px-gutter-lg py-gutter-md rounded-md bg-light-primary text-light-on-primary dark:bg-dark-primary dark:text-dark-on-primary hover:opacity-95 active:scale-[0.98] transition duration-state-change ease-state-change shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue">
              <span class="font-label text-label-lg" data-design-text-token="label-lg">Masuk ke Peta Kampus</span>
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center gap-gutter-md">
            <span class="h-px flex-1 bg-light-border dark:bg-dark-border" aria-hidden="true"></span>
            <span class="font-label text-label-sm text-light-on-surface-variant dark:text-dark-on-surface-variant" data-design-text-token="label-sm">atau</span>
            <span class="h-px flex-1 bg-light-border dark:bg-dark-border" aria-hidden="true"></span>
          </div>

          <!-- SSO & Guest Alternatives -->
          <div class="flex flex-col gap-gutter-sm">
            <button type="button" class="w-full inline-flex items-center justify-center gap-gutter-sm px-gutter-lg py-gutter-md rounded-md bg-light-surface-variant text-light-on-surface dark:bg-dark-surface-variant dark:text-dark-on-surface border border-light-border dark:border-dark-border hover:opacity-90 active:scale-[0.98] transition duration-state-change ease-state-change focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue">
              <span class="material-symbols-outlined text-[18px] text-light-primary dark:text-dark-primary" aria-hidden="true">school</span>
              <span class="font-label text-label-lg" data-design-text-token="label-lg">Masuk dengan SSO UNESA</span>
            </button>

            <button type="button" class="w-full inline-flex items-center justify-center gap-gutter-xs py-gutter-sm rounded-md text-light-on-surface-variant dark:text-dark-on-surface-variant hover:text-light-on-surface dark:hover:text-dark-on-surface transition duration-state-change ease-state-change focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-location-blue">
              <span class="font-label text-label-sm" data-design-text-token="label-sm">Lanjutkan sebagai Tamu</span>
              <span class="material-symbols-outlined text-[16px]" aria-hidden="true">arrow_forward</span>
            </button>
          </div>
        </article>
      </main>

      <!-- Subtle Institutional Footer -->
      <footer class="text-center py-gutter-sm">
        <p class="font-body text-body-sm text-light-on-surface-variant dark:text-dark-on-surface-variant" data-design-text-token="body-sm">
          Universitas Negeri Surabaya • Ketintang &amp; Lidah Wetan
        </p>
      </footer>
    </div>
  </div>

  <script>
    (function () {
      var html = document.documentElement;
      var themeBtn = document.getElementById('theme-toggle');
      var themeIcon = document.getElementById('theme-icon');
      var pwdInput = document.getElementById('password');
      var togglePwd = document.getElementById('toggle-password');
      var pwdIcon = document.getElementById('password-eye-icon');
      var form = document.getElementById('login-form');
      var identifierInput = document.getElementById('identifier');
      var statusEl = document.getElementById('form-status');

      if (themeBtn) {
        themeBtn.addEventListener('click', function () {
          var isDark = html.classList.toggle('dark');
          themeIcon.textContent = isDark ? 'light_mode' : 'dark_mode';
        });
      }

      if (togglePwd && pwdInput) {
        togglePwd.addEventListener('click', function () {
          var isHidden = pwdInput.type === 'password';
          pwdInput.type = isHidden ? 'text' : 'password';
          pwdIcon.textContent = isHidden ? 'visibility_off' : 'visibility';
          togglePwd.setAttribute('aria-label', isHidden ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
        });
      }

      if (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          var idVal = identifierInput.value.trim();
          var pwdVal = pwdInput.value.trim();

          statusEl.classList.remove('hidden', 'bg-light-surface-variant', 'dark:bg-dark-surface-variant', 'text-error', 'text-success');

          if (!idVal || !pwdVal) {
            statusEl.textContent = 'Lengkapi email atau NIM dan kata sandi Anda.';
            statusEl.classList.add('bg-light-surface-variant', 'dark:bg-dark-surface-variant', 'text-error');
            return;
          }

          statusEl.textContent = 'Berhasil masuk. Menyiapkan peta kampus...';
          statusEl.classList.add('bg-light-surface-variant', 'dark:bg-dark-surface-variant', 'text-success');
        });
      }
    })();
  </script>


</body></html>