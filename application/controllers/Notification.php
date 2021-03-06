<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Notification extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		if (!isset($this->session->is_connected)){
			redirect('auth/index');
		}
        $this->load->model('Notification_model');
    } 

    /*
     * Listing of notifications
     */
    function index()
    {
        $data['notifications'] = $this->Notification_model->get_all_notifications();
        
        $data['_view'] = 'notification/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new notification
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('titre','Titre','required|max_length[45]');
		$this->form_validation->set_rules('body','Body','required|max_length[45]');
		$this->form_validation->set_rules('id_user','Id User','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'statut' => $this->input->post('statut'),
				'titre' => $this->input->post('titre'),
				'body' => $this->input->post('body'),
				'date_notif' => $this->input->post('date_notif'),
            );
            
            $notification_id = $this->Notification_model->add_notification($params);
            redirect('notification/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
            
            $data['_view'] = 'notification/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a notification
     */
    function edit($id_notification)
    {   
        // check if the notification exists before trying to edit it
        $data['notification'] = $this->Notification_model->get_notification($id_notification);
        
        if(isset($data['notification']['id_notification']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('titre','Titre','required|max_length[45]');
			$this->form_validation->set_rules('body','Body','required|max_length[45]');
			$this->form_validation->set_rules('id_user','Id User','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'statut' => $this->input->post('statut'),
					'titre' => $this->input->post('titre'),
					'body' => $this->input->post('body'),
					'date_notif' => $this->input->post('date_notif'),
                );

                $this->Notification_model->update_notification($id_notification,$params);            
                redirect('notification/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'notification/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The notification you are trying to edit does not exist.');
    } 

    /*
     * Deleting notification
     */
    function remove($id_notification)
    {
        $notification = $this->Notification_model->get_notification($id_notification);

        // check if the notification exists before trying to delete it
        if(isset($notification['id_notification']))
        {
            $this->Notification_model->delete_notification($id_notification);
            redirect('notification/index');
        }
        else
            show_error('The notification you are trying to delete does not exist.');
    }
    
}
