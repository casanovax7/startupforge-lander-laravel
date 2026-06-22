<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'StartupForge — Accelerator Management Platform')</title>
    <meta name="description"
        content="@yield('description', 'StartupForge is a CRM and management platform purpose-built for university startup accelerators and entrepreneurship programs.')">
    {{-- Cache-bust favicons by file mtime so replacing an asset invalidates the browser cache automatically. --}}
    <link rel="icon" type="image/png" href="/favicon-96x96.png?v={{ filemtime(public_path('favicon-96x96.png')) }}" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg?v={{ filemtime(public_path('favicon.svg')) }}">
    <link rel="shortcut icon" href="/favicon.ico?v={{ filemtime(public_path('favicon.ico')) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v={{ filemtime(public_path('apple-touch-icon.png')) }}">
    <meta name="apple-mobile-web-app-title" content="StartupForge">
    <link rel="manifest" href="/site.webmanifest?v={{ filemtime(public_path('site.webmanifest')) }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">
    <header class="fixed top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center">
                <img src="/startupforge_PrimaryWide.png" alt="StartupForge" class="h-8 w-auto">
            </a>
            <nav class="hidden sm:flex items-center gap-6 text-sm font-medium text-gray-600">
                <a href="/#features" class="hover:text-primary transition-colors">Features</a>
                <a href="/#request-access" class="hover:text-primary transition-colors">Request Access</a>
                <a href="/privacy" class="hover:text-primary transition-colors">Privacy</a>
                <a href="/terms" class="hover:text-primary transition-colors">Terms</a>
            </nav>
        </div>
    </header>

    <main class="pt-16">
        @yield('content')
    </main>

    <footer class="text-gray-400 py-12 mt-24" style="background-color: #262d34;">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="/" class="flex items-center">
                    <img src="/startupforge_DarkWide.png" alt="StartupForge" class="h-7 w-auto">
                </a>
                <nav class="flex items-center gap-6 text-sm">
                    <a href="/privacy" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="/terms" class="hover:text-white transition-colors">Terms of Service</a>
                </nav>
                <p class="text-sm">&copy; {{ date('Y') }} StartupForge. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>