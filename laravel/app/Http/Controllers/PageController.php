<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function partners(): View
    {
        return view('pages.partners');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function submit(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:160'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'service' => ['required', 'string', 'max:80'],
            'message' => ['required', 'string', 'max:4000'],
        ]);

        // Mail::to(config('mail.to.address'))->send(new EnquiryReceived($data));

        return back()->with('status', __('Thank you — we will be in touch shortly.'));
    }
}
