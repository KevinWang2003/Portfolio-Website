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

    /**
     * shows profile
     */

    public  function showProfile()
    {
        return view('profile');
    }

    /**
     * shows blog
     */

    public  function showBlog()
    {
        return view('blog');
    }

    /**
     * shows FAQ
     */

    public  function showFAQ()
    {
        return view('faq');
    }

    /**
     * shows portfolio
     */

    public  function showPortfolio()
    {
        return view('portfolio');
    }

    /**
     * shows dashboard
     */

    public  function showDashboard()
    {
        return view('dashboard');
    }
}
