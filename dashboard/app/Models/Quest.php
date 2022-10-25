<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'test_id', 'description','reward'];

    public function test(){
        return $this->belongsTo(Test::class);
    }
}
