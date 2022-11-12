<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LessonMaterial
 *
 * @property int $id
 * @property int $lesson_id
 * @property string $markdown
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial whereMarkdown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LessonMaterial whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LessonMaterial extends Model
{
    use HasFactory;

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
}
