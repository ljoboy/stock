<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Notification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get notification by id_notification
     */
    function get_notification($id_notification)
    {
        return $this->db->get_where('notifications',array('id_notification'=>$id_notification))->row_array();
    }
        
    /*
     * Get all notifications
     */
    function get_all_notifications()
    {
        $this->db->order_by('id_notification', 'desc');
        return $this->db->get('notifications')->result_array();
    }
        
    /*
     * function to add new notification
     */
    function add_notification($params)
    {
        $this->db->insert('notifications',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update notification
     */
    function update_notification($id_notification,$params)
    {
        $this->db->where('id_notification',$id_notification);
        return $this->db->update('notifications',$params);
    }
    
    /*
     * function to delete notification
     */
    function delete_notification($id_notification)
    {
        return $this->db->delete('notifications',array('id_notification'=>$id_notification));
    }
}
