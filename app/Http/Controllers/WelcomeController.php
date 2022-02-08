<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function show() {
        return view('welcome');
    }
    public  function showProfile() {
        return view('profile');
    }
    public  function showBlog() {
        return view('blog');
    }
    public  function showFAQ() {
        return view('faq');
    }
    public  function showPortfolio() {
        return view('portfolio');
    }
    public  function showDashboard() {
        return view('dashboard');
    }
}
