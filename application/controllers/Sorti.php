<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Sorti extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sorti_model');
    } 

    /*
     * Listing of sortis
     */
    function index()
    {
        $data['sortis'] = $this->Sorti_model->get_all_sortis();
        
        $data['_view'] = 'sorti/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new sorti
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('qte','Qte','required|integer');
		$this->form_validation->set_rules('date_sortie','Date Sortie','required');
		$this->form_validation->set_rules('nom_client','Nom Client','max_length[50]');
		$this->form_validation->set_rules('ijd','Ijd','required|max_length[20]');
		$this->form_validation->set_rules('id_articles_site','Id Articles Site','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_articles_site' => $this->input->post('id_articles_site'),
				'qte' => $this->input->post('qte'),
				'date_sortie' => $this->input->post('date_sortie'),
				'nom_client' => $this->input->post('nom_client'),
				'ijd' => $this->input->post('ijd'),
            );
            
            $sorti_id = $this->Sorti_model->add_sorti($params);
            redirect('sorti/index');
        }
        else
        {
			$this->load->model('Articles_site_model');
			$data['all_articles_sites'] = $this->Articles_site_model->get_all_articles_sites();
            
            $data['_view'] = 'sorti/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a sorti
     */
    function edit($id_sorti)
    {   
        // check if the sorti exists before trying to edit it
        $data['sorti'] = $this->Sorti_model->get_sorti($id_sorti);
        
        if(isset($data['sorti']['id_sorti']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('qte','Qte','required|integer');
			$this->form_validation->set_rules('date_sortie','Date Sortie','required');
			$this->form_validation->set_rules('nom_client','Nom Client','max_length[50]');
			$this->form_validation->set_rules('ijd','Ijd','required|max_length[20]');
			$this->form_validation->set_rules('id_articles_site','Id Articles Site','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_articles_site' => $this->input->post('id_articles_site'),
					'qte' => $this->input->post('qte'),
					'date_sortie' => $this->input->post('date_sortie'),
					'nom_client' => $this->input->post('nom_client'),
					'ijd' => $this->input->post('ijd'),
                );

                $this->Sorti_model->update_sorti($id_sorti,$params);            
                redirect('sorti/index');
            }
            else
            {
				$this->load->model('Articles_site_model');
				$data['all_articles_sites'] = $this->Articles_site_model->get_all_articles_sites();

                $data['_view'] = 'sorti/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sorti you are trying to edit does not exist.');
    } 

    /*
     * Deleting sorti
     */
    function remove($id_sorti)
    {
        $sorti = $this->Sorti_model->get_sorti($id_sorti);

        // check if the sorti exists before trying to delete it
        if(isset($sorti['id_sorti']))
        {
            $this->Sorti_model->delete_sorti($id_sorti);
            redirect('sorti/index');
        }
        else
            show_error('The sorti you are trying to delete does not exist.');
    }
    
}
