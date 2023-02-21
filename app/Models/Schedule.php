<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'set_date',
        'status',
    ];

    // protected function getIdAttribute($value)
    // {
    //     return 'SCE' . str_pad($value, 6, '0', STR_PAD_LEFT);
    // }

    // protected function getBlogIdAttribute($value)
    // {
    //     return 'BGS' . str_pad($value, 6, '0', STR_PAD_LEFT);
    // }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
