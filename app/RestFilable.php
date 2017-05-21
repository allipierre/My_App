<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestFilable extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ename', 'mgr','sal','Kunde','deptno','hiredate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
