<?php namespace primarypartition\spp\Models;
/**
 * 
 */

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{       
    protected $table = 'accounts';
        
    public $incrementing = false;
    
    protected $fillable = ['password', 'id', 'created_at', 'updated_at'];   
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
