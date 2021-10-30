<?php

class Tugas6 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Tugas6');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'pembeli',
            'Nama Pembeli',
            'required',
            [
                'required' => 'Nama Pembeli Harus Diisi'
            ]
        );
        $this->form_validation->set_rules(
            'hp',
            'Nomor Handphone',
            'required',
            [
                'required' => 'Nomor Handphone Harus Disi'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
            $this->load->view('v_input6', $data);
        } else {
            $data = [
                'pembeli' => $this->input->post('pembeli'),
                'hp' => $this->input->post('hp'),
                'merk' => $this->input->post('merk'),
                'ukur' => $this->input->post('ukur'),
                'harga' => $this->Model_Tugas6->proses($this->input->POST('merk'))
            ];

            $this->load->view('v_output6', $data);
        }
    }
}
