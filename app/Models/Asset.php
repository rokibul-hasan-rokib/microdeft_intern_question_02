<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{


    final public function get_asset_assoc()
    {
        return self::query()->pluck('name','id');
    }
}