<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'path'
    ];

    public function upload()
    {
        return $this->belongsTo('App\Upload');
    }

}
