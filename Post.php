<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("post_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->post_model->getAll();
        $this->load->view('template/header');
        $this->load->view('data/index', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('data/create');
        $this->load->view('template/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['nip'] = $this->input->post('nip');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->post_model->save($data);
            redirect('post');
        } else {
            $this->load->view('template/header');
            $this->load->view('data/create');
            $this->load->view('template/footer');
        }
    }

    public function edit($id_nama)
    {
        $data['data'] = $this->post_model->getById($id_nama);
        $this->load->view('template/header');
        $this->load->view('data/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == true) {
            $id_nama = $this->input->post('id_nama');
            $data['nama'] = $this->input->post('nama');
            $data['nip'] = $this->input->post('nip');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->post_model->update($data, $id_nama);
            redirect('post');
        } else {
            $id_nama = $this->input->post('id_nama');
            $data['data'] = $this->post_model->getById($id_nama);
            $this->load->view('template/header');
            $this->load->view('data/edit', $data);
            $this->load->view('template/footer');
        }
    }

    function detail()
    {
        $data['data'] = $this->post_model->getAll();
        $this->load->view('template/header');
        $this->load->view('data/detail', $data);
        $this->load->view('template/footer');
    }

    function delete($id_nama)
    {
        $this->post_model->delete($id_nama);
        redirect('post');
    }
}
