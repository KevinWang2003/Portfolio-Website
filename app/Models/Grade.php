<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function addResult($grade)
    {
        if($this->best_grade == null)
        {
            $this->best_grade = $grade;
            if($grade >= $this->lowest_passing_grade);
            {
                $this->passed_at = now();
            }
        } elseif($grade > $this->best_grade) {
            $this->best_grade = $grade;
            if($grade > $this->lowest_passing_grade);
            {
                $this->passed_at = now();
            }
        }
        $this->save();
    }
}
