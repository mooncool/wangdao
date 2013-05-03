<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 用户model
 * 
 * @author Moon
 */
class User_model extends CI_Model {
	/**
	 * 添加一个用户
	 * 
	 * @param array $data
	 * @return int
	 */
	function add($data) {
		$this->db->trans_start();
		$this->db->insert('user', $data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		log_message('debug', $this->db->last_query());
		
		return $insert_id;
	}
}