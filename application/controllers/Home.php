<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
    }

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}


	public function profile(){	
		$this->load->view('header');
		$data['cats']=$this->user->viewcat();
		$data['show_cat']=$this->user->showCat($this->session->data->member_id);
		$data['profiles']=$this->user->viewprofile();
		$data['cat_breeds']=$this->user->cat_breed();
		$data['provinces']=$this->user->provinces();
		$this->load->view('profile',$data);
		$this->load->view('cat',$data);
		$this->load->view('footer');

	}

	public function editprofile(){	
		$result= $this->user->update();
		redirect(base_url('home/profile'));
	}

	public function addcat(){	
		$result= $this->user->addCat();
		redirect(base_url('home/profile'));
	}

	public function editcat(){	
		$result= $this->user->editCat();
	
	}


}
