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
            
            if ($this->input->post('jabatan') == 01) {
                $role = 1;
            } elseif ($this->input->post('jabatan') == 02 ) {
                $role = 2;
            } else {
                $role = 3;
            }
            
            if ($hasil != null) {
                // persiapan data
                $no = $data['user']['id'];
                $time = $data['user']['waktu_gabung'];
                $divisi = $this->input->post('divisi');
                $jabatan = $this->input->post('jabatan');

                $update = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'nik' => $divisi . $jabatan . date("Y",$time) . $no,
                    'jabatan_id' => htmlspecialchars($this->input->post('jabatan', true)),
                    'divisi_id' => htmlspecialchars($this->input->post('divisi', true)),
                    'tempat_tinggal' => htmlspecialchars($this->input->post('alamat', true)),
                    'role_id' => $role
                ];

                $id = $hasil['id'];
                $this->user->update($update, $id);
    
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan sudah diperbarui</div>');
                redirect('admin/list');
            } else {

                $this->form_validation->set_rules('nama', 'Nama', 'required|trim', 
                [
                    'required' => 'nama harus diisi!'
                ]);
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', 
                [
                    'required' => 'email harus diisi!',
                    'valid_email' => 'email tidak valid!',
                    'is_unique' => 'email sudah terdaftar!',
                ]);

                if ($this->form_validation->run() == false) {
                    $this->load->view('templates/user/header', $data);
                    $this->load->view('templates/user/sidebar', $data);
                    $this->load->view('templates/user/topbar', $data);
                    $this->load->view('admin/listuser', $data);
                    $this->load->view('templates/user/footer');
                } else {

                    $no_terahir = $this->user->no_terahir();
                    $no = ($no_terahir['id'] + 1);
                    $time = time();
                    $divisi = $this->input->post('divisi');
                    $jabatan = $this->input->post('jabatan');

                    $dataBaru = [
                        'nama' => htmlspecialchars($this->input->post('nama', true)),
                        'nik' => $divisi . $jabatan . date("Y",$time) . $no,
                        'jabatan_id' => htmlspecialchars($jabatan, true),
                        'divisi_id' => htmlspecialchars($divisi, true),
                        'tempat_tinggal' => htmlspecialchars($this->input->post('alamat', true)),
                        'email' => htmlspecialchars($this->input->post('email', true)),
                        'gambar' => 'default.png',
                        'password' => password_hash('12345', PASSWORD_DEFAULT),
                        'waktu_gabung' => $time,
                        'aktif' => 1,
                        'role_id' =>$role
                    ];
                    
                    $this->registrasi->register($dataBaru,'user');
                    
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan sudah ditambahkan</div>');
                    redirect('admin/list');
                }
            }            
        }
        
    }

    public function perizinan()
	{
        $data['title'] = 'Perizinan';

        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('perizinan');

        $data['user']       = $this->registrasi->ambil_data($email, 'user');
        $data['role']       = $this->registrasi->join_data($email);
        $data['menu']       = $this->menu->index($data['role']['role_id']);
        $data['sub_menu']   = $this->menu->sub_menu();
        $data['cuti']       = $this->perizinan->semua();

        if ($this->uri->segment(3)) {
            var_dump($this->input->post('tolak'));
            die;
        }

		$this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('admin/perizinan', $data);
        $this->load->view('templates/user/footer');
	}
}