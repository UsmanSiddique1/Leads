<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['time','place','date','meeting_with'];

    public function lead(){
        return $this->belongsTo(Lead::class);
    }

    protected $casts = [
        'time' => 'datetime',
        'date' => 'datetime',
       
    ];
}
