<?php

namespace App\Http\Controllers;

class AnimeController
{
    /**
     * shows homepage
     */
    public function index()
    {
        return view('anime');
    }
}
