<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = ['Data_id','Dustbin_id','block_name', 'Status','block_id'];

    public function dustbin()
{
    return $this->belongsTo(Dustbin::class);
}
}
