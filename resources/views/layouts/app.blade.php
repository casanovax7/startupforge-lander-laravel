<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'StartupForge — Accelerator Management Platform')</title>
    <meta name="description"
        content="@yield('description', 'StartupForge is a CRM and management platform purpose-built for university startup accelerators and entrepreneurship programs.')">
    <link rel="icon" href="/favicon.ico" sizes="48x48">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/favicon-96x96.png" type="image/png" sizes="96x96">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">
    <header class="fixed top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2.5">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 3L4 14h7l-2 7 9-11h-7l2-7z" />
                    </svg>
                </div>
                <span class="text-lg font-semibold text-primary">StartupForge</span>
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

    <footer class="bg-primary text-gray-400 py-12 mt-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-7 h-7 bg-gray-800 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 3L4 14h7l-2 7 9-11h-7l2-7z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-300">StartupForge</span>
                </div>
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