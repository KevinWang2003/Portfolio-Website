<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Faq;

class FaqsController extends Controller
{
    /**
     * shows FAQ page
     */

    public function show()
    {
        return view('../faqs/index', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * function to show FAQ create page
     */

    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Stores the new data to the database
     */

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faqs/index');
    }
}
