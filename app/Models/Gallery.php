<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $uploads = '/albums/';

    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
