<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Articles_site_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get articles_site by id_articles_site
     */
    function get_articles_site($id_articles_site)
    {
        return $this->db->get_where('articles_site',array('id_articles_site'=>$id_articles_site))->row_array();
    }
        
    /*
     * Get all articles_sites
     */
	function get_all_articles_sites($id_site = null)
    {
		$this->db->order_by('id', 'desc');
		if ($id_site !== null) {
			$this->db->where('id_site', $id_site);
		}
		return $this->db->get('articles_sites_liste')->result_array();
    }
        
    /*
     * function to add new articles_site
     */
    function add_articles_site($params)
    {
        $this->db->insert('articles_site',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update articles_site
     */
    function update_articles_site($id_articles_site,$params)
    {
        $this->db->where('id_articles_site',$id_articles_site);
        return $this->db->update('articles_site',$params);
    }
    
    /*
     * function to delete articles_site
     */
    function delete_articles_site($id_articles_site)
    {
        return $this->db->delete('articles_site',array('id_articles_site'=>$id_articles_site));
    }
}
