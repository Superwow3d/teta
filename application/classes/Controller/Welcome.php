<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Core {

	public function action_index()
	{
        $hello='HELLO';
        $this->set('hello',$hello);
	}

} // End Welcome
