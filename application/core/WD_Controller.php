<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 所有Controller的基类
 * 
 * @author Moon
 */
class WD_Controller extends CI_Controller {
	protected $page_data;
	
	/**
	 * 覆盖构造函数
	 */
	public function __construct() {
		parent::__construct();
		
		//$this->_auto_login();
		$this->_init_page_data();
		$this->_init_login_data();
	}
	
	/**
	 * 初始化页面公共数据
	 */
	private function _init_page_data() {
		$this->page_data = array();
		$this->page_data['mata_keywords'] = '';
		$this->page_data['mata_description'] = '';
		$this->page_data['main_content'] = '';
		
		$this->page_data['cookie_user_id'] = (int) $this->input->cookie(KEY_USER_ID);
		$this->page_data['cookie_user_name'] = (string) $this->input->cookie(KEY_USER_NAME);
	}
	
	/**
	 * 初始化登录信息
	 */
	private function _init_login_data() {
		// 初始化user id
		$this->page_data['login_user_id'] = (int) $this->session->userdata(KEY_USER_ID);
		// 初始化user name
		$this->page_data['login_user_name'] = (string) $this->session->userdata(KEY_USER_NAME, TRUE);
	}
}