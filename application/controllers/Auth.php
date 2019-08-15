<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if (isset($this->session->is_connected)){
			redirect('dashboard/index');
		}
		$this->form_validation->set_rules('pseudo', 'pseudo', 'trim|required', ['required' => 'Le %s est obligatoire']);
		$this->form_validation->set_rules('mdp', 'mot de passe', 'required', ['required' => 'Le %s est obligatoire']);
		if ($this->form_validation->run() == TRUE) {
			$pseudo = $this->input->post('pseudo', true);
			$mdp = sha1($this->input->post('mdp'));
			$user = $this->user_model->connectUser($pseudo, $mdp);
			if ($user != null) {
				$array = array(
					'id' => $user->id_user,
					'username' => $user->username,
					'level' => $user->level,
					'create_time' => $user->create_time,
					'nom_complet' => $user->nom_complet,
					'type' => TYPE[$user->level],
					'is_connected' => true
				);

				$this->session->set_userdata($array);
				redirect('dashboard/index');
			} else {
				$this->session->set_flashdata('error', "<h3>Echec d'authentification !</h3> Combinaison <strong>Pseudo / Mot de passe</strong> Incorrecte !");
				$this->session->set_flashdata('pseudo', $pseudo);
				redirect();
			}
		} else {
			$data['title'] = "page d'authentification";
			$this->load->view('layouts/login', $data, FALSE);
		}
	}

	function logout()
	{
		$this->session->unset_userdata('is_connected');
		redirect();
	}

}
