<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ClientData
 *
 * @property int $id
 * @property string $phone
 * @property string|null $region
 * @property string|null $city
 * @property string|null $street
 * @property string|null $house
 * @property int $client_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @method static \Database\Factories\ClientDataFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientData whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClientData extends Model
{
    use HasFactory;

    public function client(): BelongsTo
    {
        return $this->belongsTo(
            Client::class,
            "client_id",
            "id"
        );
    }
}
