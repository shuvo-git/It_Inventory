<?php

namespace App\Modules\Group\Models;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
	protected $table = 'groups';

    protected $guarded = ["ID"];
    
    public $timestamps = false;
}
