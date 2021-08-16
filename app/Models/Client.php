<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;
    public function data():HasOne
    {
        return $this->hasOne(
            ClientData::class,
            "client_id",
            "id"
        );
    }
}
