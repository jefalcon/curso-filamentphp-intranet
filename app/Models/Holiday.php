<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Holiday extends Model
{
    //
    use HasFactory;
    public function user()
    {
        return $this->belongsToMany(User::class, 'table_user_departament', 'departament_id', 'user_id');
    }
    public function calendar()
    {
        return $this->belongsTo(Calendar::class);
    }
}
