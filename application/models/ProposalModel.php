<?php
class ProposalModel extends CI_Model {

    public function get() {

        $this->load->database();

        return $this->db->get("proposal")->result();

    }
    public function tambah($data = array()) {

        $this->load->database();

        return $this->db->insert("proposal", $data);
    }
    public function hapus($id_proposal) {

        $this->load->database();

        $this->db->where('id_proposal', $id_proposal);
        return $this->db->delete("proposal");
    }
}
?>