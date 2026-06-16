<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AccessRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'school' => ['required', 'string', 'max:255'],
            'use_case' => ['required', 'string', 'max:2000'],
        ]);

        AccessRequest::create($validated);

        return back()->with('success', 'Your request has been submitted! We\'ll be in touch soon.');
    }
}
