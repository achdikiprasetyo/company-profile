<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SosialMediaController extends Controller
{
    //
        public function directLink()
    {
        $socialMediaUrls = [
            'instagram' => 'https://www.instagram.com/abdimas.k20.nss/',
            'email' => 'mailto:your-email@example.com',
            'facebook' => 'your-facebook-url',
            'whatsapp' => 'https://wa.me/123456789', // Example WhatsApp link
            'tiktok' => 'your-tiktok-url',
        ];

        return view('kontak', compact('socialMediaUrls'));
    }
}

