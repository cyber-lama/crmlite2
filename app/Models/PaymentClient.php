<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentClient
 *
 * @property int $client_id
 * @property int $payment_id
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentClient wherePaymentId($value)
 * @mixin \Eloquent
 */
class PaymentClient extends Model
{
    use HasFactory;
}
