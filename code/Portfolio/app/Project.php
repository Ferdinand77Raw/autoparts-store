<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//  protected $table = 'Project';

    protected $fillable = ["Name", "Origin", "Price", "Photo"];
}
