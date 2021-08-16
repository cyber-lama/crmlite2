<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\UserData
 *
 * @property int $id
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $phone
 * @property int|null $gender
 * @property string|null $birthday
 * @property string|null $region
 * @property string|null $city
 * @property string|null $street
 * @property string|null $house
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\UserDataFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserData query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserData whereUserId($value)
 * @mixin \Eloquent
 */
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
