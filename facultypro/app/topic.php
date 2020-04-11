<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    //
    protected $fillable = ['group', 'depart', 'subject', 'lecture', 'secvedio', 'secpdf', 'title', 'lecturedown'];
}
