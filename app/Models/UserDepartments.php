<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserDepartments
 *
 * @property int $user_id
 * @property int $department_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartments query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartments whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartments whereUserId($value)
 * @mixin \Eloquent
 */
class UserDepartments extends Model
{
    use HasFactory;
}
