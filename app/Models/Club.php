<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = "club";
    public $incrementing = true;
    protected $fillable = [
        'nama',
        'kota',
        'created_at',
        'updated_at',
    ];
}
