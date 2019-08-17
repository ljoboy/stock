<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		if (!isset($this->session->is_connected)){
			redirect('auth/index');
		}
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $data['users'] = $this->User_model->get_all_users();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		$this->form_validation->set_rules('password2','Confirmer','matches[password]');
		$this->form_validation->set_rules('username','Username','required|max_length[20]');
		$this->form_validation->set_rules('email','Email','max_length[255]|valid_email');
		$this->form_validation->set_rules('phone','Phone','integer');
		$this->form_validation->set_rules('level','Niveau','in_list[0,1,2,3]');
		$this->form_validation->set_rules('nom_complet','Nom Complet','max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => sha1($this->input->post('password')),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'level' => $this->input->post('level'),
				'nom_complet' => $this->input->post('nom_complet')
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($id_user)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id_user);
        
        if(isset($data['user']['id_user']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required|max_length[255]');
			$this->form_validation->set_rules('username','Username','required|max_length[20]');
			$this->form_validation->set_rules('email','Email','max_length[255]|valid_email');
			$this->form_validation->set_rules('phone','Phone','integer');
			$this->form_validation->set_rules('nom_complet','Nom Complet','max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'create_time' => $this->input->post('create_time'),
					'level' => $this->input->post('level'),
					'nom_complet' => $this->input->post('nom_complet'),
					'status' => $this->input->post('status'),
                );

                $this->User_model->update_user($id_user,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id_user)
    {
        $user = $this->User_model->get_user($id_user);

        // check if the user exists before trying to delete it
        if(isset($user['id_user']))
        {
            $this->User_model->delete_user($id_user);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }


	function active($id = null, $val = null)
	{
		if ($id == null || $val == null)
			show_error("Mauvaise manipulation, veuillez contacter l'administarteur si ce message persiste");
		$val = ($val == 0) ? 1 : 0;
		$this->User_model->active($id, $val);
	}
}
