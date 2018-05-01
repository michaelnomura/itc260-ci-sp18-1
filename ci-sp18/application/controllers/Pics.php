<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pics extends CI_Controller {

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
    //staart test code
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
        $this->load->helper('url_helper');
    }
    //end test code
    
	public function index()
	{
        $data['pics'] = $this->pics_model->get_pics('cart');
        $data['title'] = 'Pics archive';
		$this->load->view('pics/index',$data);
	}
    public function view($slug = NULL)
    {
        $data['pics'] = $this->pics_model->get_pics($slug);

        if (empty($data['pics']))
        {
                show_404();
        }
        
        $data['title'] = 'News archive';
        $this->load->view('pics/view', $data);

    }//end of view
    
    public function search()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Enter tag to display images';

        $this->form_validation->set_rules('tags', 'Tags', 'required');
        $slug = 'game';

        if ($this->form_validation->run() === FALSE)
        {//if form is not complete
            $this->load->view('pics/search', $data);
        }else{//if form is complete
            


            
            
            //$this->load->view('news/success');
            $slug = $this->pics_model->set_tags();
            
            
            if($slug!==false)
            {//data has been entered show page
                feedback('Success!','info');
                redirect('/pics/view/' . $slug);
            }else{//problem show warning
                feedback('Error!','error');
                redirect('/pics/search/');
            }

        }
    }
}
