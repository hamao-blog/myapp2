<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pairing extends Model
{
    //
    protected $table = "pairings";
    protected $dates = ["expired_at","deleted_at","updated_at","created_at"];
}
