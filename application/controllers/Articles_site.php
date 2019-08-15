<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Articles_site extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Articles_site_model');
    } 

    /*
     * Listing of articles_sites
     */
    function index()
    {
        $data['articles_sites'] = $this->Articles_site_model->get_all_articles_sites();
        
        $data['_view'] = 'articles_site/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new articles_site
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('qte_min','Qte Min','required|integer');
		$this->form_validation->set_rules('qte','Qte','required|integer');
		$this->form_validation->set_rules('date_update','Date Update','required');
		$this->form_validation->set_rules('id_article','Id Article','required|integer');
		$this->form_validation->set_rules('id_site','Id Site','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_article' => $this->input->post('id_article'),
				'id_site' => $this->input->post('id_site'),
				'qte_min' => $this->input->post('qte_min'),
				'qte' => $this->input->post('qte'),
				'date_update' => $this->input->post('date_update'),
            );
            
            $articles_site_id = $this->Articles_site_model->add_articles_site($params);
            redirect('articles_site/index');
        }
        else
        {
			$this->load->model('Article_model');
			$data['all_articles'] = $this->Article_model->get_all_articles();

			$this->load->model('Site_model');
			$data['all_sites'] = $this->Site_model->get_all_sites();
            
            $data['_view'] = 'articles_site/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a articles_site
     */
    function edit($id_articles_site)
    {   
        // check if the articles_site exists before trying to edit it
        $data['articles_site'] = $this->Articles_site_model->get_articles_site($id_articles_site);
        
        if(isset($data['articles_site']['id_articles_site']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('qte_min','Qte Min','required|integer');
			$this->form_validation->set_rules('qte','Qte','required|integer');
			$this->form_validation->set_rules('date_update','Date Update','required');
			$this->form_validation->set_rules('id_article','Id Article','required|integer');
			$this->form_validation->set_rules('id_site','Id Site','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_article' => $this->input->post('id_article'),
					'id_site' => $this->input->post('id_site'),
					'qte_min' => $this->input->post('qte_min'),
					'qte' => $this->input->post('qte'),
					'date_update' => $this->input->post('date_update'),
                );

                $this->Articles_site_model->update_articles_site($id_articles_site,$params);            
                redirect('articles_site/index');
            }
            else
            {
				$this->load->model('Article_model');
				$data['all_articles'] = $this->Article_model->get_all_articles();

				$this->load->model('Site_model');
				$data['all_sites'] = $this->Site_model->get_all_sites();

                $data['_view'] = 'articles_site/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The articles_site you are trying to edit does not exist.');
    } 

    /*
     * Deleting articles_site
     */
    function remove($id_articles_site)
    {
        $articles_site = $this->Articles_site_model->get_articles_site($id_articles_site);

        // check if the articles_site exists before trying to delete it
        if(isset($articles_site['id_articles_site']))
        {
            $this->Articles_site_model->delete_articles_site($id_articles_site);
            redirect('articles_site/index');
        }
        else
            show_error('The articles_site you are trying to delete does not exist.');
    }
    
}
