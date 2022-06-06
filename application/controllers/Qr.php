<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller 
{
    public function index()
    {
        $data['title'] = 'QR';
        // mempersiapkan qrcode


        // cek apakah ada yang mau absensi
        $time = $this->uri->segment(3);        

        if (!$this->uri->segment(3)) {
            $this->load->view('qr/index', $data);
        } else {

            // set timezone indonesia
            date_default_timezone_set("Asia/Jakarta");

            // persiapan data
            $absen = [
                'user_id' => $data['user']['id'],
                'tanggal' => date('d', $time)
            ];
            // cek apakah absen masuk atau pulang
            if (!$this->absensi->cek_absen($absen)) {
                // jika absen masuk 
                $absen = [
                    'user_id' =>  $data['user']['id'],
                    'tanggal' => date('d', $time),
                    'waktu_masuk' => $time,
                ];

                $this->absensi->absenMasuk($absen);
                    
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah absen masuk</div>');
                redirect('user/wfh');

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

    public function qrcode() {
        $code = base_url('qr/index'). time();

        // kita ubah ke png
        qrcode::png(
            $code,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 8,
            $margin = 1
        );
    }
}