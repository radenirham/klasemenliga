<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = "match";
    public $incrementing = true;
    protected $fillable = [
        'id_club',
        'main',
        'menang',
        'seri',
        'kalah',
        'gm',
        'gk',
        'point',
        'created_at',
        'updated_at',
    ];

    public function club() {
        return $this->belongsTo(Club::class,"id_club", "id");
    }
}
