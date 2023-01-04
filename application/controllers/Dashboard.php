<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'Dashboard - Wedding';
		$data['title1'] = 'Data Ucapan Tamu';
		$data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();

		// Mendapatkan IP user
        $ip    = $this->input->ip_address();

        // Mendapatkan tanggal sekarang
        $date  = date("Y-m-d");
        $waktu = time();
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;


        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        }

        // Jika sudah ada, update
        else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        // Hitung jumlah pengunjung
        $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();

        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();

        // hitung total pengunjung
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;

        $bataswaktu = time() - 300;

        // hitung pengunjung online
        $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();


        $data['pengunjunghariini']  = $pengunjunghariini;
        $data['totalpengunjung']    = $totalpengunjung;
        $data['pengunjungonline']   = $pengunjungonline;
		
        $this->template->load('layout/main', 'admin/v_dashboard', $data);
	}
}
