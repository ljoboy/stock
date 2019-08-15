<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Site extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Site_model');
    } 

    /*
     * Listing of sites
     */
    function index()
    {
        $data['sites'] = $this->Site_model->get_all_sites();
        
        $data['_view'] = 'site/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new site
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom_site','Nom Site','required|max_length[50]');
		$this->form_validation->set_rules('details','Details','max_length[255]');
		$this->form_validation->set_rules('superviseur','Superviseur','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'type' => $this->input->post('type'),
				'superviseur' => $this->input->post('superviseur'),
				'nom_site' => $this->input->post('nom_site'),
				'details' => $this->input->post('details'),
            );
            
            $site_id = $this->Site_model->add_site($params);
            redirect('site/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
            
            $data['_view'] = 'site/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a site
     */
    function edit($id_site)
    {   
        // check if the site exists before trying to edit it
        $data['site'] = $this->Site_model->get_site($id_site);
        
        if(isset($data['site']['id_site']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom_site','Nom Site','required|max_length[50]');
			$this->form_validation->set_rules('details','Details','max_length[255]');
			$this->form_validation->set_rules('superviseur','Superviseur','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'type' => $this->input->post('type'),
					'superviseur' => $this->input->post('superviseur'),
					'nom_site' => $this->input->post('nom_site'),
					'details' => $this->input->post('details'),
                );

                $this->Site_model->update_site($id_site,$params);            
                redirect('site/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'site/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The site you are trying to edit does not exist.');
    } 

    /*
     * Deleting site
     */
    function remove($id_site)
    {
        $site = $this->Site_model->get_site($id_site);

        // check if the site exists before trying to delete it
        if(isset($site['id_site']))
        {
            $this->Site_model->delete_site($id_site);
            redirect('site/index');
        }
        else
            show_error('The site you are trying to delete does not exist.');
    }
    
}
