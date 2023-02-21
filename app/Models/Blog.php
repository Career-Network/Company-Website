<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dateFormat = 'Y-m-d';

    protected $fillable = [
        'title',
        'image',
        'body',
        'author',
        'update_date',
        'hastags',
    ];

    // protected function getIdAttribute($value)
    // {
    //     return 'BGS' . str_pad($value, 6, '0', STR_PAD_LEFT);
    // }

    // protected function getUserIdAttribute($value)
    // {
    //     return 'RE' . str_pad($value, 3, '0', STR_PAD_LEFT);
    // }

    protected function getUpdateDateAttribute($value)
    {
        return date("d M Y",  strtotime($value));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
