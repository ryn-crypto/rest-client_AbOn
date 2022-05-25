<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
        $data['title'] = 'Dasboard';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user/footer');
    }

    public function list()
	{
        $data['title'] = 'Data Karyawan';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('user');

        
        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();
        $data['list'] = $this->user->index();


        // menentukan update atau tidak
        if (!$this->input->post('nama')) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('admin/listuser', $data);
            $this->load->view('templates/user/footer');    
        } else {
            $email_user = $this->input->post('email');
            $hasil = $this->user->ambil_data($email_user);

            if ($hasil != null) {
                // persiapan data
                $update = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'nik' => htmlspecialchars($this->input->post('nik', true)),
                    'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
                    'departemen' => htmlspecialchars($this->input->post('departemen', true)),
                    'tempat_tinggal' => htmlspecialchars($this->input->post('alamat', true)),
                ];

                $id = $hasil['id'];
                $this->user->update($update, $id);
    
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan sudah diperbarui</div>');
                redirect('admin/list');
            } else {
                $dataBaru = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'nik' => htmlspecialchars($this->input->post('nik', true)),
                    'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
                    'departemen' => htmlspecialchars($this->input->post('departemen', true)),
                    'tempat_tinggal' => htmlspecialchars($this->input->post('alamat', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                ];
            }            
        }
        
    }

    public function ubah()
	{
        
        $id =  $this->uri->segment(3);

        $this->load->model('daftar');
        $data = $this->daftar->data($id);
        $role_id = $data['role_id'];

        if ($role_id == 2) {
            $role = 1;
        } else {
            $role = 2;
        }

        $this->daftar->ubah($role, $id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konfigurasi sudah berhasil</div>');
        redirect('admin/list');
    }

    public function suspend()
	{
        
        $id =  $this->uri->segment(3);

        $this->load->model('daftar');
        $data = $this->daftar->data($id);
        $a = $data['aktif'];

        if ($a == 1) {
            $aktif = 0;
        } else {
            $aktif = 1;
        }

        $this->daftar->suspend($aktif, $id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konfigurasi sudah berhasil</div>');
        redirect('admin/list');
    }

    public function hapus()
	{
        
        $id =  $this->uri->segment(3);

        if (!$id) {
            redirect('admin/pesanan');
        } else {
            $this->load->model('raid');
            $this->raid->hapus($id);
            
            $this->session->set_flashdata('message', '<div class="alert alert-warning mb-2" role="alert">Data sudah dihapus !!</div>');
            redirect('admin/pesanan');
        }
    }

    public function perizinan()
	{
        $data['title'] = 'Perizinan';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('daftar');

        $data['user']       = $this->registrasi->ambil_data($email, 'user');
        $data['role']       = $this->registrasi->join_data($email);
        $data['menu']       = $this->menu->index($data['role']['role_id']);
        $data['sub_menu']   = $this->menu->sub_menu();
        $data['horseman']   = $this->daftar->index();

        // mengambil data transaksi dari database
        $this->load->model('raid');
        $data['raid'] = $this->raid->index();

        // var_dump($data['raid']);
        // die;

		$this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('admin/perizinan', $data);
        $this->load->view('templates/user/footer');
	}

}