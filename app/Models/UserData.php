<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserData extends Model
{
    use HasFactory;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    const GENDER_NONE = 0;

    public static function genderList()
    {
        return [
            static::GENDER_MALE => 'Мужчина',
            static::GENDER_FEMALE => 'Женщина',
            static::GENDER_NONE => 'Не определился'
        ];
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

}
