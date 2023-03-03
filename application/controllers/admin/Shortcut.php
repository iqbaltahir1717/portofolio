<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Shortcut extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_shortcut');
        if (!$this->session->userdata('user_id') or $this->session->userdata('user_group') != 1) {
            // ALERT
            $alertStatus  = 'failed';
            $alertMessage = 'Anda tidak memiliki Hak Akses atau Session anda sudah habis';
            getAlert($alertStatus, $alertMessage);
            redirect('admin/dashboard');
        }
    }

    public function index()
    {
        $this->session->unset_userdata('sess_search_shortcut');
        // PAGINATION
        $baseUrl    = base_url() . "admin/shortcut/index/";
        $totalRows  = count((array) $this->m_shortcut->read('', '', ''));
        $perPage    = $this->session->userdata('sess_rowpage');
        $uriSegment = 4;
        $paging     = generatePagination($baseUrl, $totalRows, $perPage, $uriSegment);
        $page       = ($this->uri->segment($uriSegment)) ? $this->uri->segment($uriSegment) : 0;

        $data['numbers']    = $paging['numbers'];
        $data['links']      = $paging['links'];
        $data['total_data'] = $totalRows;

        //DATA
        $data['setting'] = getSetting();
        $data['title']   = 'Shortcut Settings';
        $data['shortcut']    = $this->m_shortcut->read($perPage, $page, '');

        // TEMPLATE
        $view         = "_backend/shortcut";
        $viewCategory = "all";
        renderTemplate($data, $view, $viewCategory);
    }

    public function search()
    {
        if ($this->input->post('key')) {
            $data['search'] = $this->input->post('key');
            $this->session->set_userdata('sess_search_shortcut', $data['search']);
        } else {
            $data['search'] = $this->session->userdata('sess_search_shortcut');
        }

        // PAGINATION
        $baseUrl    = base_url() . "admin/shortcut/search/" . $data['search'] . "/";
        $totalRows  = count((array)$this->m_shortcut->read('', '', $data['search']));
        $perPage    = $this->session->userdata('sess_rowpage');
        $uriSegment = 5;
        $paging     = generatePagination($baseUrl, $totalRows, $perPage, $uriSegment);
        $page       = ($this->uri->segment($uriSegment)) ? $this->uri->segment($uriSegment) : 0;

        $data['numbers']    = $paging['numbers'];
        $data['links']      = $paging['links'];
        $data['total_data'] = $totalRows;

        //DATA
        $data['setting'] = getSetting();
        $data['title']   = 'Shortcut Settings';
        $data['shortcut']    = $this->m_shortcut->read($perPage, $page, $data['search']);

        // TEMPLATE
        $view         = "_backend/shortcut";
        $viewCategory = "all";
        renderTemplate($data, $view, $viewCategory);
    }

    public function create()
    {

        csrfValidate();


        $data['shortcut_id']    = '';
        $data['shortcut_title']  = $this->input->post('shortcut_title');
        $data['shortcut_link']   = $this->input->post('shortcut_link');
        $data['shortcut_icon_link'] =  $this->input->post('shortcut_icon_link');
        $data['shortcut_description'] =  $this->input->post('shortcut_description');
        $data['shortcut_active'] =  1;
        $data['createtime'] = date('Y-m-d H:i:s');
        $this->m_shortcut->create($data);

        // LOG
        $message    = $this->session->userdata('user_name') . " added shortcut = " . $data['shortcut_title'];
        createLog($message);

        // ALERT

        $alertStatus  = "success";

        $alertMessage = "Success added data shortcut = " . $data['shortcut_title'];
        getAlert($alertStatus, $alertMessage);

        redirect('admin/shortcut');
    }

    public function update()
    {

        csrfValidate();

        // POST

        $data['shortcut_id']   = $this->input->post('shortcut_id');
        $data['shortcut_title']  = $this->input->post('shortcut_title');
        $data['shortcut_link']   = $this->input->post('shortcut_link');
        $data['shortcut_icon_link'] =  $this->input->post('shortcut_icon_link');
        $data['shortcut_description'] =  $this->input->post('shortcut_description');
        $data['shortcut_active'] =   $this->input->post('shortcut_active');
        $this->m_shortcut->update($data);

        // LOG
        $message    = $this->session->userdata('user_name') . " updated data shortcut = " . $data['shortcut_title'];
        createLog($message);

        // ALERT
        $alertStatus  = "success";
        $alertMessage = "Success updated data shortcut = " . $data['shortcut_title'];
        getAlert($alertStatus, $alertMessage);

        redirect('admin/shortcut');
    }

    public function delete()
    {

        csrfValidate();
        // POST
        $this->m_shortcut->delete($this->input->post('shortcut_id'));

        // LOG
        $message    = $this->session->userdata('user_name') . " deleted data shortcut ID = " . $this->input->post('shortcut_id') . " - " . $this->input->post('shortcut_title');
        createLog($message);

        // ALERT
        $alertStatus  = "failed";
        $alertMessage = "Success deleted data shortcut = " . $this->input->post('shortcut_id')  . " - " . $this->input->post('shortcut_title');
        getAlert($alertStatus, $alertMessage);

        redirect('admin/shortcut');
    }
}
