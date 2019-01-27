<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
            return view('welcome_message');
	}

	public function jason()
	{
		return view('jason');
	}
	      
  public function justin()
  {
      return view('justin');
  }
	//--------------------------------------------------------------------

}
