<?php 

namespace Eduboard\Http;

class Active
{
	public static function set($path, $active = 'active') 
	{
        return call_user_func_array('Request::is', (array)$path) ? $active : '';      
	}
}

