<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Sorti_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get sorti by id_sorti
     */
    function get_sorti($id_sorti)
    {
        return $this->db->get_where('sortis',array('id_sorti'=>$id_sorti))->row_array();
    }
        
    /*
     * Get all sortis
     */
	function get_all_sortis($id_site = null)
    {
        $this->db->order_by('id_sorti', 'desc');
		if ($id_site !== null) {
			$this->db->where('id_site', $id_site);
		}
		return $this->db->get('sorti_list')->result_array();
    }
        
    /*
     * function to add new sorti
     */
    function add_sorti($params)
    {
        $this->db->insert('sortis',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update sorti
     */
    function update_sorti($id_sorti,$params)
    {
        $this->db->where('id_sorti',$id_sorti);
        return $this->db->update('sortis',$params);
    }
    
    /*
     * function to delete sorti
     */
    function delete_sorti($id_sorti)
    {
        return $this->db->delete('sortis',array('id_sorti'=>$id_sorti));
    }
}
