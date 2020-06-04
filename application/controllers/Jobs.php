<?php
	class Jobs extends CI_Controller{

	public function index($offset = 0){

			// Pagination Config
			$config['base_url'] = base_url() . 'jobs/index/';
			$config['total_rows'] = $this->db->count_all('jobs');
			$config['per_page'] = 6;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);


			$data['title'] = 'Show Jobs Pages';

			$data['jobs'] = $this->Job_model->get_jobs($config['per_page'], $offset);
			$data['blogs'] = $this->Blog_model->get_blogs();
			$data['categories'] = $this->Category_model->get_categories();

			//print_r($data['jobs']);die();

			$this->load->view('templates/header');
			$this->load->view('jobs/index',$data);
			$this->load->view('templates/footer');
	}

	public function Create(){

		$data['title'] = 'Create Jobs Pages';

		$this->form_validation->set_rules('job_name', 'Job Name', 'required');
		$this->form_validation->set_rules('company_name', 'Company Name', 'required');
		$this->form_validation->set_rules('job_desc', 'Job Description', 'required');
		$this->form_validation->set_rules('job_type', 'Job Type', 'required');
		$this->form_validation->set_rules('job_category', 'Job Category', 'required');
		$this->form_validation->set_rules('company_address', 'Company Address', 'required');
		$this->form_validation->set_rules('company_min_salary', 'Company Min Salary', 'required');
		$this->form_validation->set_rules('company_max_salary', 'Company Max Salary', 'required');


		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');
			$this->load->view('jobs/create',$data);
			$this->load->view('templates/footer');

		}else{
			// Upload Pdf or txt Resume
				$this->load->library('upload');
				$config['upload_path'] = './assets/Apanajob/job/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']    = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->upload->initialize($config);
				if (!$this->upload->do_upload('company_logo')){

					//echo $this->upload->display_errors();

					$this->session->set_flashdata('company_logo', 'Only accepted Jpeg | Jpg | png files , not upload Company Logo Try again');
					redirect('jobs/create');
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$company_logo = $_FILES['company_logo']['name'];

					//print_r($resume);die();
					//echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
				}


				$this->Job_model->create($company_logo);

				redirect('jobs/create');
				
		}
	}

	public function view($job_id){

			$data['jobs'] = $this->Job_model->get_job_by_id($job_id);

			if(empty($data['jobs'])){
				show_404();
			}

			//print_r( $data['blogs']);
			//die();

			$this->load->view('templates/header');
			$this->load->view('jobs/view' , $data);
			$this->load->view('templates/footer');

		}

}
