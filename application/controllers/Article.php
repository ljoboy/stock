<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Article extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		if (!isset($this->session->is_connected)){
			redirect('auth/index');
		}
        $this->load->model('Article_model');
    } 

    /*
     * Listing of articles
     */
    function index()
    {
        $data['articles'] = $this->Article_model->get_all_articles();
        
        $data['_view'] = 'article/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new article
     */
    function add()
	{
		$this->form_validation->set_rules('code','Code','required|max_length[45]');
		$this->form_validation->set_rules('fournisseur','Fournisseur','required|max_length[50]');
		$this->form_validation->set_rules('qte','Qte','required|integer');
		$this->form_validation->set_rules('qte_min','Qte Min','required|integer');
		$this->form_validation->set_rules('date_creation','Date Creation','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'code' => $this->input->post('code'),
				'fournisseur' => $this->input->post('fournisseur'),
				'qte' => $this->input->post('qte'),
				'qte_min' => $this->input->post('qte_min'),
				'date_creation' => $this->input->post('date_creation'),
            );
            
            $article_id = $this->Article_model->add_article($params);
            redirect('article/index');
        }
        else
        {            
            $data['_view'] = 'article/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a article
     */
    function edit($id_article)
    {   
        // check if the article exists before trying to edit it
        $data['article'] = $this->Article_model->get_article($id_article);
        
        if(isset($data['article']['id_article']))
        {
			$this->form_validation->set_rules('code','Code','required|max_length[45]');
			$this->form_validation->set_rules('fournisseur','Fournisseur','required|max_length[50]');
			$this->form_validation->set_rules('qte','Qte','required|integer');
			$this->form_validation->set_rules('qte_min','Qte Min','required|integer');
			$this->form_validation->set_rules('date_creation','Date Creation','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'code' => $this->input->post('code'),
					'fournisseur' => $this->input->post('fournisseur'),
					'qte' => $this->input->post('qte'),
					'qte_min' => $this->input->post('qte_min'),
					'date_creation' => $this->input->post('date_creation'),
                );

                $this->Article_model->update_article($id_article,$params);            
                redirect('article/index');
            }
            else
            {
                $data['_view'] = 'article/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error("L'article que vous essayer de modifier n'existe pas");
    } 

    /*
     * Deleting article
     */
    function remove($id_article)
    {
        $article = $this->Article_model->get_article($id_article);

        // check if the article exists before trying to delete it
        if(isset($article['id_article']))
        {
            $this->Article_model->delete_article($id_article);
            redirect('article/index');
        }
        else
            show_error("L'article que vous essayer de supprimer n'existe pas");
    }

	public function test()
	{
		$data['articles'] = $this->Article_model->get_all_articles();

		$data['_view'] = 'article/index';
		$this->load->view('layouts/main2', $data);
	}
}
