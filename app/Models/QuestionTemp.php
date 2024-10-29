<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
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

    public static array $bundesland = [
        'Baden-Württemberg',
        'Bayern',
        'Berlin',
        'Brandenburg',
        'Bremen',
        'Hamburg',
        'Hessen',
        'Mecklenburg-Vorpommern',
        'Niedersachsen',
        'Nordrhein-Westfalen',
        'Rheinland-Pfalz',
        'Saarland',
        'Sachsen',
        'Sachsen-Anhalt',
        'Schleswig-Holstein',
        'Thüringen',
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeByState($query, $state)
    {
        if (in_array($state, self::$bundesland)) {
            return $query->where('state', $state);
        }

        return $query; 
    }

}
