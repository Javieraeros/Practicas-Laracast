<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
//TODO Readme

/**
 * Class Model
 * This class is the one that every model may inherit from
 *
 * Here we put that there is not guarded attributes
 * @package App
 */
class Model extends Eloquent
{
    protected $guarded=[];
}
