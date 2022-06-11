<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
        $data['title'] = 'Personal';
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('profil');

        $data['user'] = $this->registrasi->user($email);
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();
        $data['pengumuman'] = $this->profil->pengumuman();
        
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user/footer');
    }


    public function edit()
	{
        $data['title'] = 'Edit Profile';
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();


        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',
        [
			'required' => 'Nama harus diisi!'
		]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',
        [
			'required' => 'Alamat harus diisi!'
		]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim',
        [
			'required' => 'Nomor hp harus diisi!'
		]);


        if($this->form_validation->run() == false) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/user/footer');

        } else {
            $update['nama'] = $this->input->post('nama');
            $update['email'] = $this->input->post('email');
            $update['tempat_tinggal'] = $this->input->post('alamat');
            $update['no_hp'] = $this->input->post('no_hp');
            $update['tentang'] = $this->input->post('catatan');

            // cek gambar yang akan di upload
            $upload_image = $_FILES['gambar']['name'];
            
            if($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar_lama = $data['user']['gambar'];
                    if ($gambar_lama != 'default.png') {
                        unlink(FCPATH . 'assets/images/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $update['gambar'] = $gambar_baru;
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->load->model('profil');
            $this->profil->index($update);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-dark" role="alert">Profil sudah di update</div>');
			redirect('user/edit');
        }
    }

    public function jadwal()
	{
        $data['title'] = 'Jadwal';
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('jadwal');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();

        // persiapan data
        $bulan = $this->input->post('bulan');

        if (!$bulan) {
            $bulan =  date('m');

            $periode = [
                'bulan' => $bulan,
                'tahun' => '2022',
                'jadwal.nik' => $data['role']['nik']
            ];
            // persiapan data ke variabael
            $data['jadwal'] = $this->jadwal->index($periode);
            
            if (!$data['jadwal']) {
                $data['jadwal'][0] = $this->_jadwalPribadi($bulan);
            }

        } else {
            $bulan = $this->input->post('bulan');

            $periode = [
                'bulan' => $bulan,
                'tahun' => '2022',
                'jadwal.nik' => $data['role']['nik']
            ];
            // persiapan data ke variabael
            $data['jadwal'] = $this->jadwal->index($periode);

            if (!$data['jadwal']) {
                $data['jadwal'][0] = $this->_jadwalPribadi($bulan);
            } 
        }

        

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/jadwal', $data);
        $this->load->view('templates/user/footer');
    }

    private function _jadwalPribadi($bulan)
    {
        return $query = [
            'tanggal' => '-',
            'bulan' => $bulan,
            'tahun' => '2022',
            'jam_masuk' => '-',
            'jam_pulang' => '-'
        ];
    }

    public function ubahpassword()
	{
        $data['title'] = 'Ubah Password';
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('profil');

        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();


        $this->form_validation->set_rules('passwordawal', 'Password Awal', 'required|trim', 
        [
			'required' => 'Password harus diisi!'
		]);
        $this->form_validation->set_rules('passwordbaru', 'Password Baru', 'required|trim|min_length[3]|matches[konfirmasi]', 
        [
			'required' => 'Password harus diisi!',
            'min_length' => 'password kurang dari 3 karakter!',
            'matches' => 'password harus sama dengan konfirmasi'
		]);
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required|trim|min_length[3]|matches[passwordbaru]', 
        [
			'required' => 'Password harus diisi!',
            'min_length' => 'password kurang dari 3 karakter!',
            'matches' => 'password harus sama dengan password baru'
		]);


        if ( !$this->form_validation->run()) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('user/ubahpassword', $data);
            $this->load->view('templates/user/footer');
        } else {
            $password_awal = $this->input->post('passwordawal');
            $password_baru = $this->input->post('passwordbaru');

            if (!password_verify($password_awal, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-dark" role="alert">Password Salah!</div>');
			    redirect('user/ubahpassword');
            } else {
                if($password_awal == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-dark" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
			        redirect('user/ubahpassword');
                } else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $password_update['password'] = $password_hash;

                    $this->profil->ubahpassword($email, $password_update);

                    $this->session->set_flashdata('message', '<div class="alert alert-success text-dark" role="alert">Password sudah diganti!</div>');
			        redirect('user/ubahpassword');
                }
            }
        }
    }

    public function absensi()
	{
        // set timezone indonesia
        date_default_timezone_set("Asia/Jakarta");

        $data['title'] = 'Absensi';
        $email = ['email' =>  $this->session->userdata('email')];
        
        // load model
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('absensi');

        // query database
        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();
        // query absensi
        $user_id = $data['user']['id'];
        $data['absensi'] = $this->absensi->index($user_id);

		$this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/absensi', $data);
        $this->load->view('templates/user/footer');
	}

    public function wfh()
    {
        // set timezone indonesia
        date_default_timezone_set("Asia/Jakarta");

        // data menu
        $data['title'] = 'WFH/WFO';
    
        $email = ['email' =>  $this->session->userdata('email')];
        $this->load->model('registrasi');
        $this->load->model('menu');
        $this->load->model('absensi');
        $this->load->model('jadwal');
    
        $data['user'] = $this->registrasi->ambil_data($email, 'user');
        $data['role'] = $this->registrasi->join_data($email);
        $data['menu'] = $this->menu->index($data['role']['role_id']);
        $data['sub_menu'] = $this->menu->sub_menu();
        
        // cek apakah ada yang mau absensi
        $time = $this->uri->segment(3);        
            
        if (!$this->uri->segment(3)) {
            // jika tidak ada waktu yang dikirim
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('user/wfh', $data);
            $this->load->view('templates/user/footer');
        } else {
            // set timezone indonesia
            date_default_timezone_set("Asia/Jakarta");

            // cek jadwal kerja
            $query = [
                'tanggal' => date('d'),  
                'bulan' => date('m'),  
                'tahun' => date('o'),
                'jadwal.nik' => $data['role']['nik'] 
            ];  

            $jadwal = $this->jadwal->index($query)[0];
            $waktu_masuk = strtotime($jadwal['tahun'].'-'.$jadwal['bulan'].'-'.$jadwal['tanggal'].' '.$jadwal['jam_masuk']);
            
            // persiapan data
            $absen = [
                'user_id' => $data['user']['id'],
                'tanggal' => date('d', $time)
            ];
            $waktu_sekarang = strtotime(date("Y-m-d H:i"));

            // cek apakah absen masuk atau pulang
            if (!$this->absensi->cek_absen($absen)) {
                // jika absen masuk 
                
                
                if ($waktu_sekarang>$waktu_masuk) {
                    
                    $terlambat_jam = (date('H', $waktu_sekarang) - date('H', $waktu_masuk));
                    $terlambat_menit = ($terlambat_jam*60);
                    $jmlterlambat = $terlambat_menit + (date('i', $waktu_sekarang));

                    $denda = ($jmlterlambat/10)*5000;

                    $absen = [
                        'terlambat' => $jmlterlambat,
                        'denda' => $denda,
                        'user_id' =>  $data['user']['id'],
                        'tanggal' => date('d', $time),
                        'waktu_masuk' => $time,
                    ];
    
                    $this->absensi->absenMasuk($absen);
                        
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah absen masuk</div>');
                    redirect('user/wfh');
                } else {
                    $absen = [
                        'user_id' =>  $data['user']['id'],
                        'tanggal' => date('d', $time),
                        'waktu_masuk' => $time,
                    ];
    
                    $this->absensi->absenMasuk($absen);
                        
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah absen masuk</div>');
                    redirect('user/wfh');
                }

            } else {
                

                // jika absen pulang
                $absenPulang = [
                    'user_id' =>  $data['user']['id'],
                    'tanggal' => date('d', $time),
                    'waktu_pulang' => $time
                ];

                $this->absensi->absenPulang($absen, $absenPulang);
                    
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah absen pulang</div>');
                redirect('user/wfh');
            }
        }
    }
}