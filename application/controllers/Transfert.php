<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Transfert extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		if (!isset($this->session->is_connected)){
			redirect('auth/index');
		}
        $this->load->model('Transfert_model');
    } 

    /*
     * Listing of transferts
     */
    function index()
    {
        $data['transferts'] = $this->Transfert_model->get_all_transferts();
        
        $data['_view'] = 'transfert/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new transfert
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_article','Id Article','required|integer');
		$this->form_validation->set_rules('id_site','Id Site','required|integer');
		$this->form_validation->set_rules('qte_envoyer','Qte Envoyer','required|integer');
		$this->form_validation->set_rules('id_demandeur','Id Demandeur','required|integer');
		$this->form_validation->set_rules('id_sender','Id Sender','required|integer');
		$this->form_validation->set_rules('details','Details','max_length[255]');

		if($this->form_validation->run())
		{
			$params = array(
				'id_article' => $this->input->post('id_article'),
				'id_site' => $this->input->post('id_site'),
				'id_demandeur' => $this->input->post('id_demandeur'),
				'id_sender' => $this->input->post('id_sender'),
				'qte_envoyer' => $this->input->post('qte_envoyer'),
				'date_envoi' => $this->input->post('date_envoi'),
				'status' => $this->input->post('status'),
				'date_reception' => $this->input->post('date_reception'),
				'details' => $this->input->post('details'),
			);

			$transfert_id = $this->Transfert_model->add_transfert($params);
			redirect('transfert/index');
		}
		else
		{
			$this->load->model('Article_model');
			$data['all_articles'] = $this->Article_model->get_all_articles();

			$this->load->model('Site_model');
			$data['all_sites'] = $this->Site_model->get_all_sites();

			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
			$data['all_users'] = $this->User_model->get_all_users();

			$data['_view'] = 'transfert/add';
			$this->load->view('layouts/main',$data);
		}
    }  

    function direct()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('id_article','Id Article','required|integer');
		$this->form_validation->set_rules('id_site','Id Site','required|integer');
		$this->form_validation->set_rules('qte_envoyer','Qte Envoyer','required|integer');
		$this->form_validation->set_rules('details','Details','max_length[255]');

		if($this->form_validation->run())
		{
			$params = array(
				'id_article' => $this->input->post('id_article'),
				'id_site' => $this->input->post('id_site'),
				'id_demandeur' => 0,
				'id_sender' => $this->session->id,
				'qte_envoyer' => $this->input->post('qte_envoyer'),
				'date_envoi' => date('Y-m-d H:i:s'),
				'status' => STOCK_INITIAL,
				'details' => $this->input->post('details'),
			);

			$transfert_id = $this->Transfert_model->add_transfert($params);
			redirect('transfert/index');
		}
		else
		{
			$this->load->model('Article_model');
			$data['all_articles'] = $this->Article_model->get_all_articles();

			$this->load->model('Site_model');
			$data['all_sites'] = $this->Site_model->get_all_sites();
			$data['site'] = $this->Site_model->get_by_superviseur($this->session->id);

			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$data['_view'] = 'transfert/add';
			$this->load->view('layouts/main',$data);
		}
	}
    /*
     * Editing a transfert
     */
    function edit($id_transfert)
    {   
        // check if the transfert exists before trying to edit it
        $data['transfert'] = $this->Transfert_model->get_transfert($id_transfert);
        
        if(isset($data['transfert']['id_transfert']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_article','Id Article','required|integer');
			$this->form_validation->set_rules('id_site','Id Site','required|integer');
			$this->form_validation->set_rules('qte_envoyer','Qte Envoyer','required|integer');
			$this->form_validation->set_rules('id_demandeur','Id Demandeur','required|integer');
			$this->form_validation->set_rules('id_sender','Id Sender','required|integer');
			$this->form_validation->set_rules('details','Details','max_length[255]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_article' => $this->input->post('id_article'),
					'id_site' => $this->input->post('id_site'),
					'id_demandeur' => $this->input->post('id_demandeur'),
					'id_sender' => $this->input->post('id_sender'),
					'qte_envoyer' => $this->input->post('qte_envoyer'),
					'date_envoi' => $this->input->post('date_envoi'),
					'status' => $this->input->post('status'),
					'date_reception' => $this->input->post('date_reception'),
					'details' => $this->input->post('details'),
                );

                $this->Transfert_model->update_transfert($id_transfert,$params);            
                redirect('transfert/index');
            }
            else
            {
				$this->load->model('Article_model');
				$data['all_articles'] = $this->Article_model->get_all_articles();

				$this->load->model('Site_model');
				$data['all_sites'] = $this->Site_model->get_all_sites();

				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'transfert/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The transfert you are trying to edit does not exist.');
    } 

    /*
     * Deleting transfert
     */
    function remove($id_transfert)
    {
        $transfert = $this->Transfert_model->get_transfert($id_transfert);

        // check if the transfert exists before trying to delete it
        if(isset($transfert['id_transfert']))
        {
            $this->Transfert_model->delete_transfert($id_transfert);
            redirect('transfert/index');
        }
        else
            show_error('The transfert you are trying to delete does not exist.');
    }
    
}
