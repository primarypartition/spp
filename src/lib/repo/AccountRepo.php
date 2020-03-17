<?php namespace primarypartition\spp\lib\repo;
/**
 * 
 */

use primarypartition\spp\lib\contracts\repo\IAccountRepo;

use primarypartition\spp\Models\Account;

class AccountRepo implements IAccountRepo 
{    
    protected $account;
    
    /**
     * 
     */
    public function __construct()
    {
        $this->account = new Account;        
    }

    /**
     *
     * @param type $method
     * @param type $args
     * @return type
     */
    public function __call( $method , $args )
    {
        return call_user_func_array([$this->account , $method] , $args);
    }   
}
