<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question';
    
    /**
     * Get the answers for the Question.
     */
    public function answers()
    {
        return $this->hasMany('App\Comment', 'foreign_key', 'question_id');
    }
}
