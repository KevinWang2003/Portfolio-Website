<?php

namespace App\Http\Controllers;

class ViewController
{
    /**
     * shows homepage
     */
    public function show()
    {
        return view('welcome');
    }
}
