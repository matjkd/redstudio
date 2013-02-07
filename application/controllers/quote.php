<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Quote extends MY_Controller
	{


		function __construct()
		{
			parent::__construct();
			$this -> load -> model('captcha_model');
		}

		public function smiths($page = NULL)
		{
			if (!isset($page))
			{
				$page = 'overview';
			}
			$data['main'] = "quotes/smiths/" . $page;
			$this -> load -> vars($data);
			$this -> load -> view('template/quote/smiths');

		}

	}
