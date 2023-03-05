<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_link');
		$this->load->model('m_news');
		$this->load->model('m_news_category');
		$this->load->model('m_setting');
	}

	public function index()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['news']                = $this->m_news->read_pinned();
		$data['link']                = $this->m_link->read('', '', '');
		$data['news_category']       = $this->m_news_category->read('', '', '');

		// COUNT VIEW
		$setting['setting_id']    = 1;
		$setting['setting_kunjungan'] = ($data['setting'][0]->setting_kunjungan + 1);
		$this->m_setting->update_setting($setting);

		// TEMPLATE
		$view         = "_frontend/home";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}
}
