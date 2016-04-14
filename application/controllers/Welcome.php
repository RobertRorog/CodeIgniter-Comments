<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('welcome_model');
    }
	
	public function index()
	{
        $data['url_form'] = 'save';
        
        $result = $this->welcome_model->all_comments();
        if ($result != false) {
            $data['result_display'] = $result;
        } else {
            $data['result_display'] = "No record found !";
        }

		$this->load->view('welcome_message', $data);
	}
    
    /*
     * Save Comments
     */
    public function save(){
        $this->load->helper('url');
        if (empty($this->input->post('title'))) $title = 'Empty Title'; else $title = $this->input->post('title');
        if (empty($this->input->post('comment'))) $comment = 'Empty Comment'; else $comment = $this->input->post('comment');
        
        $data = array(
                    'title' => $title,
                    'comment' => $comment                    
                    );
        
        //Transfering data to Model
        $this->welcome_model->form_insert($data);
        
        redirect('http://testowa.rr/anglia/ci/welcome#admin','refresh');
    }
}
