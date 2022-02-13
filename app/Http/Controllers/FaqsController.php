<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Faq;

class FaqsController extends Controller
{
    /**
     * shows FAQ
     */

    public function show()
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }
}
