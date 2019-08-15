<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		if (!isset($this->session->is_connected)){
			redirect('auth/index');
		}
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
