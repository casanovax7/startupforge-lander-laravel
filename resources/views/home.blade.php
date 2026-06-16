@extends('layouts.app')

@section('content')
{{-- Hero --}}
<section class="relative overflow-hidden bg-gradient-to-b from-gray-50 to-white py-24 sm:py-32">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-primary leading-tight">
            The CRM built for<br>
            <span class="text-accent-dark">university accelerators</span>
        </h1>
        <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600 leading-relaxed">
            StartupForge is a management platform purpose-built for startup accelerators and entrepreneurship programs.
            Track founders, mentors, events, and more — all in one place.
        </p>
        <div class="mt-10">
            <a href="#request-access"
                class="inline-flex items-center gap-2 bg-primary text-white font-semibold px-8 py-3.5 rounded-xl hover:bg-gray-800 transition-colors">
                Request Access
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- Features --}}
<section id="features" class="py-20 sm:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-primary">Everything your program needs</h2>
            <p class="mt-4 text-gray-600 max-w-xl mx-auto">Built by accelerator operators, for accelerator operators.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">People & Companies</h3>
                <p class="text-sm text-gray-600">Track founders, mentors, judges, and staff. Manage company profiles,
                    affiliations, and cohort assignments.</p>
            </div>

            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">Events & Calendars</h3>
                <p class="text-sm text-gray-600">Organize pitch nights, workshops, and office hours. Manage attendees,
                    check-ins, and integrate with Google Calendar.</p>
            </div>

            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">Email Integration</h3>
                <p class="text-sm text-gray-600">Sync Gmail conversations, match emails to contacts, and keep a complete
                    history of every interaction.</p>
            </div>

            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">Activity Tracking</h3>
                <p class="text-sm text-gray-600">Log calls, meetings, and notes. Full audit trail so nothing falls
                    through the cracks.</p>
            </div>

            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">Tags & Search</h3>
                <p class="text-sm text-gray-600">Flexible tagging system with powerful full-text search across contacts,
                    companies, and activities.</p>
            </div>

            <div class="p-6 rounded-2xl border border-gray-100 hover:border-accent-dark/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-accent/40 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-primary mb-2">AI-Powered</h3>
                <p class="text-sm text-gray-600">Built-in AI agents for research, data enrichment, and smart suggestions
                    to help you work faster.</p>
            </div>
        </div>
    </div>
</section>

{{-- Request Access Form --}}
<section id="request-access" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-2xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-primary">Request Access</h2>
            <p class="mt-4 text-gray-600">StartupForge is currently available by invitation. Tell us about your program
                and we'll get you set up.</p>
        </div>

        @if (session('success'))
        <div class="mb-8 p-4 bg-green-50 border border-green-200 rounded-xl text-green-800 text-sm text-center">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('request-access.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:border-accent-dark focus:ring-2 focus:ring-accent/30 outline-none transition-all"
                    placeholder="Jane Smith">
                @error('name') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:border-accent-dark focus:ring-2 focus:ring-accent/30 outline-none transition-all"
                        placeholder="jane@university.edu">
                    @error('email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone <span
                            class="text-gray-400">(optional)</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                        class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:border-accent-dark focus:ring-2 focus:ring-accent/30 outline-none transition-all"
                        placeholder="(555) 123-4567">
                    @error('phone') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="school" class="block text-sm font-medium text-gray-700 mb-1">University /
                    Organization</label>
                <input type="text" id="school" name="school" value="{{ old('school') }}" required
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:border-accent-dark focus:ring-2 focus:ring-accent/30 outline-none transition-all"
                    placeholder="University of Notre Dame">
                @error('school') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="use_case" class="block text-sm font-medium text-gray-700 mb-1">How do you plan to use
                    StartupForge?</label>
                <textarea id="use_case" name="use_case" rows="4" required
                    class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:border-accent-dark focus:ring-2 focus:ring-accent/30 outline-none transition-all resize-none"
                    placeholder="Tell us about your accelerator program, cohort size, and what you're looking for...">{{ old('use_case') }}</textarea>
                @error('use_case') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="pt-2">
                <button type="submit"
                    class="w-full bg-primary text-white font-semibold px-8 py-3.5 rounded-xl hover:bg-gray-800 transition-colors">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</section>
@endsection