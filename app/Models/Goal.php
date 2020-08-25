<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = "goals";
    protected $dates = ["expired_at","deleted_at","updated_at","created_at"];
}
