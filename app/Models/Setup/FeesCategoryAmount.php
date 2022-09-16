<?php

namespace App\Models\setup;

use App\Models\Setup\StudentClass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeesCategoryAmount extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function fee_category():BelongsTo
    {
        return $this->BelongsTo(StudentFeesCategory::class , 'fee_category_id', 'id');
    }
    public function student_class(): BelongsTo
    {
        return $this->BelongsTo(StudentClass::class, 'class_id', 'id');
    }
}
