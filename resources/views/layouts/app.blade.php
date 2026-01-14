<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LanyardKendal - Lanyard Custom Terpercaya')</title>
    <meta name="description" content="@yield('description', 'Spesialis lanyard custom berkualitas. Konsultasi, bantuan desain, opsi pengiriman, dan garansi kualitas.')">

    <!-- Fonts - Luminaire Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }

        /* Luminaire Style Typography */
        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 400;
            letter-spacing: 0.01em;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 500;
            letter-spacing: 0.02em;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-white text-gray-900 antialiased">

    <!-- Navigation -->
    @include('layouts.partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Scripts -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- WhatsApp Floating Button - Created via JavaScript to bypass CSS transform issues -->
    <script>
    (function() {
        // Create WhatsApp button via JavaScript so it's truly fixed
        var waBtn = document.createElement('a');
        waBtn.href = 'https://wa.me/6281316509191?text=Halo%20LanyardKendal,%20saya%20ingin%20konsultasi%20pembuatan%20lanyard';
        waBtn.target = '_blank';
        waBtn.rel = 'noopener noreferrer';
        waBtn.id = 'wa-floating-button';
        waBtn.innerHTML = '<svg viewBox="0 0 24 24" style="width:32px;height:32px;fill:white;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>';

        // Apply inline styles directly
        waBtn.style.cssText = 'position:fixed;bottom:30px;right:30px;z-index:2147483647;width:60px;height:60px;background-color:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 15px rgba(0,0,0,0.3);cursor:pointer;text-decoration:none;transition:transform 0.3s ease,box-shadow 0.3s ease;';

        waBtn.onmouseover = function() {
            this.style.transform = 'scale(1.1)';
            this.style.boxShadow = '0 6px 20px rgba(0,0,0,0.4)';
        };
        waBtn.onmouseout = function() {
            this.style.transform = 'scale(1)';
            this.style.boxShadow = '0 4px 15px rgba(0,0,0,0.3)';
        };

        // Append directly to documentElement (html) instead of body to avoid transform issues
        document.documentElement.appendChild(waBtn);
    })();
    </script>

    @stack('scripts')
</body>
</html>
</html>
