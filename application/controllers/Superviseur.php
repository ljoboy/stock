<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superviseur extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->is_connected)) {
			redirect('auth/index');
		}

		if ($this->session->level != SUPERVISEUR_USER) redirect('dashboard/index');

		$this->load->model('Transfert_model');
		$this->load->model('Articles_site_model');
		$this->load->model('site_model');
		$this->load->model('Sorti_model');
	}

	public function articles()
	{
		$site = $this->site_model->get_by_superviseur($this->session->id);
		$site = ($site) ? $site : null;
		if (!$site) redirect('dashboard/index');
		$data['articles_sites'] = $this->Articles_site_model->get_all_articles_sites($site['id_site']);
		$data['_view'] = 'articles_site/index';
		$this->load->view('layouts/main', $data);
	}

	public function sorties_liste()
	{
		$site = $this->site_model->get_by_superviseur($this->session->id);
		$site = ($site) ? $site : null;
		$data['sortis'] = $this->Sorti_model->get_all_sortis($site['id_site']);
		$data['_view'] = 'sorti/index';
		$this->load->view('layouts/main', $data);
	}

	public function sorties_add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('qte', 'Qte', 'required|integer');
		$this->form_validation->set_rules('date_sortie', 'Date Sortie', 'required');
		$this->form_validation->set_rules('nom_client', 'Nom Client', 'max_length[50]');
		$this->form_validation->set_rules('ijd', 'Ijd', 'required|max_length[20]');
		$this->form_validation->set_rules('id_articles_site', 'Id Articles Site', 'required|integer');

		if ($this->form_validation->run()) {
			$params = array('id_articles_site' => $this->input->post('id_articles_site'), 'qte' => $this->input->post('qte'), 'date_sortie' => $this->input->post('date_sortie'), 'nom_client' => $this->input->post('nom_client'), 'ijd' => $this->input->post('ijd'),);

			$sorti_id = $this->Sorti_model->add_sorti($params);
			redirect('sorti/index');
		} else {
			$this->load->model('Articles_site_model');
			$data['all_articles_sites'] = $this->Articles_site_model->get_all_articles_sites();

			$data['_view'] = 'sorti/add';
			$this->load->view('layouts/main', $data);
		}
	}

	public function demande_add()
	{

	}

	public function demande_liste()
	{
		$data['transferts'] = $this->Transfert_model->get_all_transferts();

		$data['_view'] = 'transfert/index';
		$this->load->view('layouts/main', $data);
	}

	public function entrees()
	{

	}
}

/* End of file Superviseur.php */
