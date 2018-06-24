<?php
class Judul extends CI_Controller {

    public function index() {

        $this->load->model("JudulModel");

        $data = array(
            "judul" => $this->JudulModel->get()
        );

        $this->load->view("JudulView", $data);
    }
     public function tambah() {

        $this->load->model("JudulModel");

        if($this->input->method() == "post") {

            $insert = $this->JudulModel->tambah(array(
                'nim' => $this->input->post("nim"),
                'judul' => $this->input->post("judul"),
                'ringkasan' => $this->input->post("ringkasan"),
        ));

            if($insert) {
                echo "Sukses tambah judul.";
            }else {
                echo "Gagal tambah judul.";
            }

        }

        $this->load->view("FormJudulView");
    }

    public function ubah($id_judul = 0) {

        $this->load->model("JudulModel");

        $data = array(
            'judul' => $this->JudulModel->detail($id_judul)
        );

        if($this->input->method() == "post") {

            $insert = $this->JudulModel->ubah(array(
                'nim' => $this->input->post("nim"),
                'judul' => $this->input->post("judul"),
                'ringkasan' => $this->input->post("ringkasan"),
            ), $id_judul);

            if($insert) {
                echo "Sukses ubah judul.";
            }else {
                echo "Gagal ubah judul.";
            }
        }

        $this->load->view("FormJudulView", $data);
    }

    public function hapus($id_judul) {

        $this->load->model("JudulModel");

        $hapus = $this->JudulModel->hapus($id_judul);

        if($hapus) {
            echo "<script>alert('Sukses hapus judul')</script>";
        }else {
            echo "<script>alert('Gagal hapus judul')</script>";
        }

        echo '<meta http-equiv="refresh" content="0;url=../../">';

    }
}
?>
