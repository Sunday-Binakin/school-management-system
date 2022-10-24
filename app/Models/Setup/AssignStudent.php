<?php

namespace App\Models\Setup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignStudent extends Model
{
    use HasFactory;

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    function student_class(): belongsTo
    {
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }
    function student_year(): belongsTo
    {
        return $this->belongsTo(StudentYear::class, 'year_id', 'id');
    }
}
