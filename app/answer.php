<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answer';
    
     /**
     * Get the question.
     */
    public function question()
    {
        return $this->belongsTo('App\question');
    }
}
