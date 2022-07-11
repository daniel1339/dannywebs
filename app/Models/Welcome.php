<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function images(){
        return $this->hasMany(Image::class);
       }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
