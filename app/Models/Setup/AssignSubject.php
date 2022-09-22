<?php

namespace App\Models\Setup;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignSubject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student_class(): BelongsTo
    {
        return $this->BelongsTo(StudentClass::class, 'class_id', 'id');
    }

}
