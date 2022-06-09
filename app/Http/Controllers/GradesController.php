<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('/grades/index', [
                'grades' => Grade::all()
            ]);
        } else {
            abort(401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('grades.create');
        } else {
            abort(401);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));
        return redirect(route('grades.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
        return view('grades.edit', compact('grade'));
        } else {
            abort(401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->addResult($request->best_grade);
        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect(route('grades.index'));
    }

    /**
     * Validates the Grade
     *
     * @param Request $request
     * @return array
     */
    public function validateGrade(Request $request): array
    {
        return $request->validate([
            'course_id' => 'required',
            'test_name' => 'required',
            'best_grade' => 'required'
        ]);
    }
}
