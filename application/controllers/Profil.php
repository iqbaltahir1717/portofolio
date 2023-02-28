<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_content');
		$this->load->model('m_link');
		$this->load->model('m_news_category');
	}

	public function sejarah()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['link']                = $this->m_link->read('', '', '');
		$data['content']             = $this->m_content->get('sejarah');
		$data['news_category']       = $this->m_news_category->read('', '', '');
		$data['regulation_category'] = $this->m_regulation_category->read('', '', '');

		// TEMPLATE
		$view         = "_frontend/profil/sejarah";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}
}
