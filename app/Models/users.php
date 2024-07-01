<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $fillable = [
        "id_level", "nama", "email", "password"
    ];
    public function level(){
        return $this->belongsTo(Level::class, "id_level" , "id");
    }
}
