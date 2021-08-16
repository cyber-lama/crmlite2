<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TaskClient
 *
 * @property int $client_id
 * @property int $task_id
 * @method static \Illuminate\Database\Eloquent\Builder|TaskClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskClient whereTaskId($value)
 * @mixin \Eloquent
 */
class TaskClient extends Model
{
    use HasFactory;
}
