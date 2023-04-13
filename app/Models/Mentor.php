<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
