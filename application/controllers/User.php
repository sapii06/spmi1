<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('mhs_status') != 'in_logged') {
			redirect('user/login');
		}
	}

	public function dashboard() {
		$data = array (
			'title'			=>	'Dashboard Mahasiswa',
			'me'			=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
			'prodi'			=>	$this->db->get('tb_prodi')->num_rows(),
			'makul'			=>	$this->db->get('tb_makul')->num_rows(),
		);
		$this->load->view('user/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	public function indeks() {
		$data = array (
			'title'			=>	'Indeks',
			'me'			=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
			'indeks'			=>	$this->db->get('tb_indeks')->result_array(),
		);
		$this->load->view('user/header', $data);
		$this->load->view('user/indeks', $data);
		$this->load->view('user/footer');
	}

	public function kuesioner_answ($id) {
		$data = array (
			'title'				=>	'Tanggapi Kuesioner',
			'me'				=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
			'kuesioner'			=>	$this->db->get_where('tb_kuesioner',['kuesioner_indeksid' => $id])->result_array(),
		);
		$this->load->view('user/header', $data);
		$this->load->view('user/kuesioner_jawaban', $data);
		$this->load->view('user/footer');
	}

	public function kuesioner_submit($kuid,$id) {
		$cekmhs = $this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array();
		$cekidx = $this->db->get_where('tb_kuesioner',['kuesioner_id' => $kuid])->row_array();
		$cekhasil = $this->db->get_where('tb_hasil',['hasil_kuesioner' => $kuid, 'hasil_user' => $this->session->userdata('mhs_id'), 'hasil_prodi' => $cekmhs['mhs_prodi'], 'hasil_sms' => $cekmhs['mhs_semester']])->row_array();
		if($cekhasil) {
		$this->db->set('hasil_jawaban', $id);
		$this->db->where('hasil_id', $cekhasil['hasil_id']);
		$this->db->update('tb_hasil');
		$this->session->set_flashdata('flash', 'Jawaban diperbaharui');
		}else {
		$data = array (
			'hasil_id'				=>	md5(rand()),
			'hasil_user'			=>	$this->session->userdata('mhs_id'),
			'hasil_indeks'			=>	$cekidx['kuesioner_indeksid'],
			'hasil_kuesioner'		=>	$kuid,
			'hasil_jawaban'			=>	$id,
			'hasil_tgl'				=>	date('Y-m-d'),
			'hasil_sms'				=>	$cekmhs['mhs_semester'],
			'hasil_prodi'			=>	$cekmhs['mhs_prodi'],
			'hasil_tahun'			=>	date('Y'),
		);
	
		$this->db->insert('tb_hasil', $data);
		$this->session->set_flashdata('flash', 'Jawaban tersimpan');
		}
		redirect('user/indeks/'.$cekidx['kuesioner_indeksid']);
	}

	public function kritik() {
		$data = array (
			'title'				=>	'Kritik & Saran',
			'me'				=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
		);
		$this->form_validation->set_rules('isi', 'isi', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/header', $data);
			$this->load->view('user/kritik', $data);
			$this->load->view('user/footer');
		}else {
			$this->User_model->send_pesan();
			$this->session->set_flashdata('flash', 'Pesan anda berhasil dikirim.');
			redirect('user/kritik-saran');
		}
	}

	public function ringkasan() {
		$data = array (
			'title'			=>	'Ringkasan',
			'me'			=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
			'mhs'			=>	$this->User_model->data_mahasiswa(),
		);
		$this->load->view('user/header', $data);
		$this->load->view('user/ringkasan', $data);
		$this->load->view('user/footer');
	}

	public function password() {
		$data = array (
			'title'				=>	'Atur Password',
			'me'				=>	$this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array(),
		);
		$this->form_validation->set_rules('password1', 'password1', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		$this->form_validation->set_rules('password2', 'password2', 'required|matches[password1]', [
					'required'	=>	'Kolom ini tidak boleh kosong',
					'matches'	=>	'Konfirmasi password baru salah']);
		$this->form_validation->set_rules('password', 'password', 'required', [
					'required'	=>	'Kolom ini tidak boleh kosong']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/header', $data);
			$this->load->view('user/set_password', $data);
			$this->load->view('user/footer');
		}else {
			$this->User_model->update_password();
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */