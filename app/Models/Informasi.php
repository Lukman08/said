<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $fillable = [
        'judul',
        'gambar',
        'isi',
    ];
    use HasFactory;

    public function scopePublish(){
        return $query -> where ('status', "publish");
    }
}
