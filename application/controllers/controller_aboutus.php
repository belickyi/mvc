<?php

class Controller_Aboutus extends Controller
{

	function action_index()
	{
		$this->view->generate('aboutus_view.php', 'template_view.php');
	}
}
