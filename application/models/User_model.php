<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function data_mahasiswa() {
		$this->db->select('tb_mahasiswa.mhs_nim as mhsnim, tb_mahasiswa.mhs_nama as mhsname, tb_mahasiswa.mhs_username as mhsuname,tb_mahasiswa.mhs_email as mhsemail, tb_mahasiswa.mhs_semester as mhssms, tb_prodi.prodi_nama as mhsprodi, GROUP_CONCAT(tb_makul.makul_nama SEPARATOR ", ") as makulname');
	    $this->db->from('tb_mahasiswa');
	    $this->db->join('tb_makul_mhs', 'tb_makul_mhs.promhs_mhs = tb_mahasiswa.mhs_nim','left');
	    $this->db->join('tb_makul', 'tb_makul.makul_id = tb_makul_mhs.promhs_id','left');
	    $this->db->join('tb_prodi', 'tb_prodi.prodi_id = tb_mahasiswa.mhs_prodi','left');
	    $this->db->where('mhs_nim', $this->session->userdata('mhs_id'));
		return $this->db->get()->row_array();
	}

	public function send_pesan() {
		$data = array (
			'krisar_id'			=>   md5(rand()),
			'krisar_user'		=>   $this->session->userdata('mhs_id'),
			'krisar_isi'		=>   $this->input->post('isi'),
			'krisar_status'		=>   0,
		);
	
		$this->db->insert('tb_krisar', $data);
	}

	public function update_password() {
		$sandi = $this->input->post('password');
		$sandi2 = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);
		$cek = $this->db->get_where('tb_mahasiswa',['mhs_nim' => $this->session->userdata('mhs_id')])->row_array();

		if(password_verify($sandi, $cek['mhs_password'])) {
			$this->db->set('mhs_password', $sandi2);
			$this->db->where('mhs_nim', $this->session->userdata('mhs_id'));
			$this->db->update('tb_mahasiswa');
			$this->session->set_flashdata('flash', 'Password anda berhasil diperbaharui');
			redirect('user/password');
		}else {
			$this->session->set_flashdata('error', 'Konfirmasi password lama salah');
			redirect('user/password');
		}
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */