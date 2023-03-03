<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Shortcut extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_link');
		$this->load->model('m_news_category');
		$this->load->model('m_shortcut');
	}

	public function index()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['link']                = $this->m_link->read('', '', '');
		$data['news_category']       = $this->m_news_category->read('', '', '');
		$data['shortcut']       	= $this->m_shortcut->read_front();

		// TEMPLATE
		$view         = "_frontend/page/shortcut";
		$viewCategory = "single";
		renderTemplateFront($data, $view, $viewCategory);
	}
}
