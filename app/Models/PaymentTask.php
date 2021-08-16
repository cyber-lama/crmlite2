<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentTask
 *
 * @property int $task_id
 * @property int $payment_id
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentTask query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentTask wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentTask whereTaskId($value)
 * @mixin \Eloquent
 */
class PaymentTask extends Model
{
    use HasFactory;
}
