<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Site_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get site by id_site
     */
    function get_site($id_site)
    {
        return $this->db->get_where('sites',array('id_site'=>$id_site))->row_array();
    }
        
    /*
     * Get all sites
     */
    function get_all_sites()
    {
		$this->db->order_by('id', 'desc');
		return $this->db->get('sites_liste')->result_array();
    }
        
    /*
     * function to add new site
     */
    function add_site($params)
    {
        $this->db->insert('sites',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update site
     */
    function update_site($id_site,$params)
    {
        $this->db->where('id_site',$id_site);
        return $this->db->update('sites',$params);
    }
    
    /*
     * function to delete site
     */
    function delete_site($id_site)
    {
        return $this->db->delete('sites',array('id_site'=>$id_site));
    }

	/*
	* Get site by superviseur
	*/
	public function get_by_superviseur($id_user)
	{
		return $this->db->get_where('sites', array('superviseur' => $id_user))->row_array();
	}
}
