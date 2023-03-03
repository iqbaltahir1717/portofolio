<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_shortcut extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function read($limit, $start, $key)
    {
        $this->db->select('*');
        $this->db->from('tbl_shortcut');

        if ($key != '') {
            $this->db->like("shortcut_title", $key);
        }

        if ($limit != "" or $start != "") {
            $this->db->limit($limit, $start);
        }

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return null;
    }

    public function read_front()
    {
        $this->db->select('*');
        $this->db->from('tbl_shortcut');
        $this->db->where('shortcut_active', 1);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return null;
    }

    public function create($data)
    {
        $this->db->insert('tbl_shortcut', $data);
    }

    public function update($data)
    {
        $this->db->update('tbl_shortcut', $data, array('shortcut_id' => $data['shortcut_id']));
    }

    public function delete($id)
    {
        $this->db->delete('tbl_shortcut', array('shortcut_id' => $id));
    }

    public function get($id)
    {
        $this->db->where('shortcut_id', $id);
        $query = $this->db->get('tbl_shortcut', 1);
        return $query->result();
    }

    // public function widget() {
    //     $query  = $this->db->query(" SELECT
    //         (SELECT count(regulation_id) FROM tbl_web_regulation) as total_regulasi,
    //         (SELECT count(news_id) FROM tbl_web_news) as total_berita
    //     ");
    //     return $query->result();
    // }

    function __destruct()
    {
        $this->db->close();
    }
}
