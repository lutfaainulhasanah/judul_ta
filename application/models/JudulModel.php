<?php
class JudulModel extends CI_Model {

    public function get() {

        $this->load->database();

        return $this->db->get("judul")->result();

    }

    public function detail($id_judul) {

        $this->load->database();
        $this->db->where('id_judul', $id_judul);
        return $this->db->get("judul")->result();
    }

    public function tambah($data = array()) {

        $this->load->database();

        return $this->db->insert("judul", $data);
    }

    public function ubah($data = array(), $id_judul) {

        $this->load->database();

        $this->db->where('id_judul', $id_judul);
        return $this->db->update("judul", $data);
    }

    public function hapus($id_judul) {

        $this->load->database();

        $this->db->where('id_judul', $id_judul);
        return $this->db->delete("judul");
    }
}
?>