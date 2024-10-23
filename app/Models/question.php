<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'question_text_de',
        'question_text_en',
        'question_text_dari',
        'question_text_pashto',
        'category',
        'state',
        'image',
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
