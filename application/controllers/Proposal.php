<?php
class Proposal extends CI_Controller {

    public function index() {

        $this->load->model("ProposalModel");

        $data = array(
            "proposal" => $this->ProposalModel->get()
        );

        $this->load->view("ProposalView", $data);
    }
     public function tambah() {

        $this->load->model("ProposalModel");

        if($this->input->method() == "post") {

            $insert = $this->ProposalModel->tambah(array(
                'nim' => $this->input->post("nim"),
                'cover' => $this->input->post("cover"),
                'bab1' => $this->input->post("bab1"),
                'bab2' => $this->input->post("bab2"),
                'bab3' => $this->input->post("bab3"),
                'pengajuan' => $this->input->post("pengajuan"),
        ));

            if($insert) {
                echo "Sukses tambah proposal.";
            }else {
                echo "Gagal tambah proposal.";
            }

        }

        $this->load->view("FormProposalView");
    }

  public function hapus($id_proposal) {

        $this->load->model("ProposalModel");

        $hapus = $this->ProposalModel->hapus($id_proposal);

        if($hapus) {
            echo "<script>alert('Sukses hapus proposal')</script>";
        }else {
            echo "<script>alert('Gagal hapus proposal')</script>";
        }

        echo '<meta http-equiv="refresh" content="0;url=../../../">';

    }
}
?>
