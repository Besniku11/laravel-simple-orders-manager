<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
