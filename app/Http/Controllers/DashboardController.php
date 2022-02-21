<?php

namespace App\Http\Controllers;

class DashboardController
{
    /**
     * shows dashboard
     */
    public function show()
    {
        return view('dashboard');
    }
}
