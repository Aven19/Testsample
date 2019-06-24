<?php

class Test extends CI_Controller{


	 public function index()
	{
		$this->load->helper(array('form', 'url')); 
		$this->load->view('career');

	}

	public function form_validation()
	{


		$this->load->library('form_validation');
                $this->form_validation->set_rules('Name', 'Name', 'required');
                 $this->form_validation->set_rules("Email", 'Email', 'required');
                 $this->form_validation->set_rules("Job", 'Job', 'required');
                 $this->form_validation->set_rules("Age", 'Age', 'required');
                 $this->form_validation->set_rules("Gender", 'Gender', 'required');
                 $this->form_validation->set_rules("Phone", 'Phone', 'required');
                 $this->form_validation->set_rules("Address", 'Address', 'required');
                 if ($this->form_validation->run())
                {
                       $this->load->model("main_model");
                       $data = array(  
                        "Name"     => $this->input->post('Name'),  
                        "Email"  => $this->input->post('Email'),  
                        "Job"   => $this->input->post('Job'),  
                        "Age" => $this->input->post('Age'),
                        "Gender"   => $this->input->post('Gender'),
                        "Phone"   => $this->input->post('Phone'),
                        "Address"   => $this->input->post('Address') 
                        ); 
                       $this->main_model->insert_data($data);
                       redirect('Test/inserted');
                    
                }
                else
                {
                        $this->index();
                }
	}


        public function inserted()
        {
                $this->index();
        }
}