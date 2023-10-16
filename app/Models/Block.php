<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $fillable = ['block_id','block_name','User_id'];
    public function user()
{
    return $this->belongsTo(User::class);
}
public function dustbin()
{
    return $this->hasMany(Dustbin::class);
}

}
