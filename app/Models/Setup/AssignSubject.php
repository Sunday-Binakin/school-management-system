<?php


namespace App;
namespace App\Models\Setup;
namespace App\Models\Setup\Student;
use App\Models\Setup\StudentClass;
use App\Models\setup\StudentSubject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignSubject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student_class(): BelongsTo
    {
        return $this->BelongsTo(StudentClass::class, 'class_id', 'id');
    }
    public function school_subject(): BelongsTo
    {
        return $this->BelongsTo(StudentSubject::class, 'subject_id', 'id');
    }
    public function subject_group(): BelongsTo
    {
        return $this->BelongsTo(SubjectGroup::class, 'group_id', 'id');
    }

}
