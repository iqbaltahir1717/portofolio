<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_content');
		$this->load->model('m_link');
		$this->load->model('m_news');
		$this->load->model('m_news_category');
	}

	public function index()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['news']                = $this->m_news->read(4, 0, '', 1, '');
		$data['link']                = $this->m_link->read('', '', '');
		$data['news_category']       = $this->m_news_category->read('', '', '');

		// TEMPLATE
		$view         = "_frontend/home";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}
}
