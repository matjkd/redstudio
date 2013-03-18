<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Welcome extends MY_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this -> load -> model('captcha_model');
		}

		public function index()
		{
			

			
			
			$this->frontpage();
		}

		
		
		function frontpage() {
			$data['hello'] = 'template/nate/parts/hello';
			$data['latest_works'] = 'template/nate/parts/latest-works';
			$data['slideshow'] = 'template/nate/parts/slideshow';
			$this -> load -> vars($data);
			$this -> load -> view('template/nate/main');
		}
		
		function contentpage($page) {
			if($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
		}
			$data['page'] = $page;
			$this -> load -> vars($data);
			$this -> load -> view('template/nate/main');
			
		}

		function test()
		{
			$data['main_content'] = 'slideshow/slideshow';
			$this -> load -> vars($data);
			$this -> load -> view('template/main');
		}

		

		

	

		

	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */
