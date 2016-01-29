<?php

namespace Controller;

use \W\Controller\Controller;

class FooterController extends Controller
{

	public function aide()
	{
		$this->show('buddy/aide');
	}

	public function legal()
	{
		$this->show('buddy/legal');
	}

	public function cgu()
	{
		$this->show('buddy/cgu');
	}

	public function contact()
	{
		if(isset($_POST['submit'])) {
			$this->redirectToRoute('envoimail');
		}
		$this->show('buddy/contact');
		
	}

	public function envoimail()
	{
		$this->show('buddy/envoimail');
	}

}