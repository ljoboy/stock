<?php
/* 
 * Developpé par Jonathan Yombo Bosemwa
 * www.ljoboy.me | about.me/ljoboy
 */
 
class Article_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get article by id_article
     */
    function get_article($id_article)
    {
        return $this->db->get_where('articles',array('id_article'=>$id_article))->row_array();
    }
        
    /*
     * Get all articles
     */
    function get_all_articles()
    {
        $this->db->order_by('id_article', 'desc');
        return $this->db->get('articles')->result_array();
    }
        
    /*
     * function to add new article
     */
    function add_article($params)
    {
        $this->db->insert('articles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update article
     */
    function update_article($id_article,$params)
    {
        $this->db->where('id_article',$id_article);
        return $this->db->update('articles',$params);
    }
    
    /*
     * function to delete article
     */
    function delete_article($id_article)
    {
        return $this->db->delete('articles',array('id_article'=>$id_article));
    }
}
