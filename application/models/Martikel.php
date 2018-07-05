<?php 
/**
 * 
 */
class Martikel extends CI_Model
{
<<<<<<< HEAD
=======
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	function all_articles()
	{
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}

	function latest_article(){
		$this->db->limit(5);
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}

	function single_article($url)
	{
		$this->db->like('article_url', $url);
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$data = $this->db->get('_article');
		return $data->row_array();
	}

	function show_by_category($url)
	{
		$this->db->like('c.category_url', $url);
		$this->db->where('a.article_status', '1');
		$this->db->join('_category c', 'c.category_id = a.article_id_category');
		$data = $this->db->get('_article a');
		return $data->result_array();
	}

>>>>>>> da39e0cd253a84d6c872e8d930eb9c8c6e202f4e
	function show_artikel(){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function kategori(){
		$ambil = $this->db->get('_category');

		return $ambil->result_array();
	}

	function save($input){
		$this->db->insert('_article',$input);
	}

	function artikel_by_id($article_id){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->where('_article.article_id', $article_id );
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function edit($update, $article_id){
		$this->db->where('_article.article_id', $article_id);
		$this->db->update('_article', $update);

	}

}

?>