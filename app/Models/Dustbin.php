<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dustbin extends Model
{
    use HasFactory;
    protected $fillable = ['Dustbin_id', 'Type','Block_id'];

public function block()
{
    return $this->belongsTo(Block::class);
}
public function data()
{
    return $this->hasMany(Data::class);
}
}