<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TotalGoal extends Model
{
    //
    use SoftDeletes;
    protected $table = "total_goals";
    protected $dates = ["expired_at","deleted_at","updated_at","created_at"];
}
