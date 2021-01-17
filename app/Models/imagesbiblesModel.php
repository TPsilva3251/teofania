<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imagesbiblesModel extends Model
{
    protected $fillable  = [
        'img', 'bibles_id'
    ];

    public function bibles()
    {
        return  $this->belongsTo(bibliesModel::class, 'bibles_id');
    }
}
