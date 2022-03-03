<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // protected $table="buses";
    use HasFactory;
    public function bus() {
        return $this->belongsTo('App\Models\Bus');
    }

    public function reservations() {
        $this->hasMany('\App\Models\Reservation');
    }
    
}

