<?php namespace primarypartition\spp\Http\Controllers\api\v1\home;
/**
 * debug
 * 
 */

use App\Http\Controllers\Controller;
use primarypartition\spp\lib\contracts\repo\IAccountRepo;

use Config;

class IndexController extends Controller
{
    protected $account;
    
    /**
     * 
     * @param IAccountRepo $account
     */
    public function __construct(IAccountRepo $account) 
    {
        $this->account = $account; 
    }
    
    /**
     * 
     * @return type
     */
    public function index()
    {

    }
}
