<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Transfert_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get transfert by id_transfert
     */
    function get_transfert($id_transfert)
    {
        return $this->db->get_where('transferts',array('id_transfert'=>$id_transfert))->row_array();
    }
        
    /*
     * Get all transferts
     */
    function get_all_transferts()
    {
        $this->db->order_by('id_transfert', 'desc');
        return $this->db->get('transferts')->result_array();
    }
        
    /*
     * function to add new transfert
     */
    function add_transfert($params)
    {
        $this->db->insert('transferts',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update transfert
     */
    function update_transfert($id_transfert,$params)
    {
        $this->db->where('id_transfert',$id_transfert);
        return $this->db->update('transferts',$params);
    }
    
    /*
     * function to delete transfert
     */
    function delete_transfert($id_transfert)
    {
        return $this->db->delete('transferts',array('id_transfert'=>$id_transfert));
    }
}
