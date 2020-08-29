<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    //
    use SoftDeletes;
    protected $table = "countries";
    protected $dates = ["expired_at","deleted_at","updated_at","created_at"];
}
