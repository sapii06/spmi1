<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getGrafikData() {
        $this->db->select('i.indeks_judul, j.jawab_jenis, COUNT(h.hasil_id) AS total');
        $this->db->from('tb_indeks i');
        $this->db->join('tb_hasil h', 'h.hasil_indeks = i.indeks_id', 'left');
        $this->db->join('tb_jawaban j', 'j.jawab_id = h.hasil_jawaban', 'left');
        $this->db->group_by(array('i.indeks_id', 'j.jawab_id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getJawabanData() {
	    $this->db->select('j.jawab_jenis, COUNT(h.hasil_id) AS total');
	    $this->db->from('tb_jawaban j');
	    $this->db->join('tb_hasil h', 'h.hasil_jawaban = j.jawab_id', 'left');
	    $this->db->group_by('j.jawab_id');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function getChartData() {
    $this->db->select('DATE_FORMAT(hasil_tgl, "%Y/%m/%d") AS tanggal, jawab_jenis, COUNT(*) AS total');
    $this->db->from('tb_hasil');
    $this->db->join('tb_jawaban', 'tb_hasil.hasil_jawaban = tb_jawaban.jawab_id');
    $this->db->group_by('tanggal, jawab_jenis');
    $query = $this->db->get();
    return $query->result();
}
	
	public function simpan_indeks() {
		$data = array (
			'indeks_id'			=>   rand(),
			'indeks_judul'		=>   ucwords($this->input->post('judul')),
			'indeks_for'		=>   $this->input->post('for'),
		);
	
		$this->db->insert('tb_indeks', $data);
	}

	public function edit_indeks($id) {
		$data = array (
			'indeks_judul'		=>   ucwords($this->input->post('judul')),
			'indeks_for'		=>   $this->input->post('for'),
		);
	
		$this->db->where('indeks_id', $id);
		$this->db->update('tb_indeks', $data);
	}

	public function simpan_kuesioner() {
		$this->db->order_by('kuesioner_next', 'DESC');
		$sqlinc = $this->db->get('tb_kuesioner');
		if ($sqlinc->num_rows() == 0) {
			$autoinc = 1;
		}else {
			$urutinc = $sqlinc->row()->kuesioner_next;
			$urutinc++;
			$autoinc = $urutinc;
		}
		$data = array (
			'kuesioner_id'			=>   md5(rand()),
			'kuesioner_judul'		=>   $this->input->post('judul'),
			'kuesioner_indeksid'	=>   $this->input->post('indeks'),
			'kuesioner_next'		=>   $autoinc,
		);
	
		$this->db->insert('tb_kuesioner', $data);
	}

	public function edit_kuesioner($id) {
		$data = array (
			'kuesioner_judul'		=>   $this->input->post('judul'),
			'kuesioner_indeksid'	=>   $this->input->post('indeks'),
		);
	
		$this->db->where('kuesioner_id', $id);
		$this->db->update('tb_kuesioner', $data);
	}

	public function simpan_jawaban() {
		$data = array (
			'jawab_jenis'		=>   ucwords($this->input->post('judul')),
			'jawab_emoji'		=>   strtolower($this->input->post('emoji')),
			'jawab_type_text'	=>   strtolower($this->input->post('type')),
		);
	
		$this->db->insert('tb_jawaban', $data);
	}

	public function edit_jawaban($id) {
		$data = array (
			'jawab_jenis'		=>   ucwords($this->input->post('judul')),
			'jawab_emoji'		=>   strtolower($this->input->post('emoji')),
			'jawab_type_text'	=>   strtolower($this->input->post('type')),
		);
	
		$this->db->where('jawab_id', $id);
		$this->db->update('tb_jawaban', $data);
	}

	public function data_responden() {
		$this->db->select('*');
		$this->db->from('tb_hasil');
		$this->db->join('tb_mahasiswa', 'tb_mahasiswa.mhs_nim = tb_hasil.hasil_user');
		$this->db->join('tb_prodi', 'tb_prodi.prodi_id = tb_mahasiswa.mhs_prodi');
		$this->db->group_by('hasil_user');
		return $this->db->get()->result_array();
	}

	public function data_mahasiswa() {
		$this->db->select('tb_mahasiswa.mhs_nim as mhsnim, tb_mahasiswa.mhs_nama as mhsname, tb_mahasiswa.mhs_username as mhsuname,tb_mahasiswa.mhs_email as mhsemail, tb_mahasiswa.mhs_semester as mhssms, tb_mahasiswa.mhs_tahun as tahun, tb_prodi.prodi_nama as mhsprodi, GROUP_CONCAT(tb_makul.makul_nama SEPARATOR ", ") as makulname');
	    $this->db->from('tb_mahasiswa');
	    $this->db->join('tb_makul_mhs', 'tb_makul_mhs.promhs_mhs = tb_mahasiswa.mhs_nim','left');
	    $this->db->join('tb_makul', 'tb_makul.makul_id = tb_makul_mhs.promhs_id','left');
	    $this->db->join('tb_prodi', 'tb_prodi.prodi_id = tb_mahasiswa.mhs_prodi','left');
	    $this->db->group_by('tb_mahasiswa.mhs_nim');
		return $this->db->get()->result_array();
	}

	public function simpan_mahasiswa() {
		$mata_kuliah = $this->input->post('makul');
		$data = array (
			'mhs_nim'			=>   $this->input->post('nim'),
			'mhs_nama'			=>   ucwords($this->input->post('nama')),
			'mhs_username'		=>   str_replace(" ", "", $this->input->post('username')),
			'mhs_email'			=>   strtolower(str_replace(" ", "", $this->input->post('email'))),
			'mhs_prodi'			=>   $this->input->post('prodi'),
			'mhs_semester'		=>   $this->input->post('sms'),
			'mhs_tahun'			=>   $this->input->post('tahun'),
			'mhs_password'		=>   password_hash($this->input->post('nim'), PASSWORD_DEFAULT),
		);
	
		if($this->db->insert('tb_mahasiswa', $data)) {
			foreach ($mata_kuliah as $makul_id) {
				$data2 = array(
		            'promhs_id'		=> $makul_id,
		            'promhs_mhs'	=> $this->input->post('nim'),
		        );
		        $this->db->insert('tb_makul_mhs', $data2);
			}
		}
	}

	public function edit_mahasiswa($id) {
		$mata_kuliah = $this->input->post('makul');
		$this->db->where('promhs_mhs', $id);
		$this->db->delete('tb_makul_mhs');
		if($this->input->post('password')) {
			$data = array (
				'mhs_nim'			=>   $this->input->post('nim'),
				'mhs_nama'			=>   ucwords($this->input->post('nama')),
				'mhs_username'		=>   str_replace(" ", "", $this->input->post('username')),
				'mhs_email'			=>   strtolower(str_replace(" ", "", $this->input->post('email'))),
				'mhs_prodi'			=>   $this->input->post('prodi'),
				'mhs_semester'		=>   $this->input->post('sms'),
				'mhs_tahun'			=>   $this->input->post('tahun'),
				'mhs_password'		=>   password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			);
		
			$this->db->where('mhs_nim', $id);
			if($this->db->update('tb_mahasiswa', $data)) {
				foreach ($mata_kuliah as $makul_id) {
					$data2 = array(
			            'promhs_id'		=> $makul_id,
			            'promhs_mhs'	=> $this->input->post('nim'),
			        );
			        $this->db->insert('tb_makul_mhs', $data2);
				}
			}
		}else {
			$data = array (
				'mhs_nim'			=>   $this->input->post('nim'),
				'mhs_nama'			=>   ucwords($this->input->post('nama')),
				'mhs_username'		=>   str_replace(" ", "", $this->input->post('username')),
				'mhs_email'			=>   strtolower(str_replace(" ", "", $this->input->post('email'))),
				'mhs_prodi'			=>   $this->input->post('prodi'),
				'mhs_semester'		=>   $this->input->post('sms'),
				'mhs_tahun'			=>   $this->input->post('tahun'),
			);
		
			$this->db->where('mhs_nim', $id);
			if($this->db->update('tb_mahasiswa', $data)) {
				foreach ($mata_kuliah as $makul_id) {
					$data2 = array(
			            'promhs_id'		=> $makul_id,
			            'promhs_mhs'	=> $this->input->post('nim'),
			        );
			        $this->db->insert('tb_makul_mhs', $data2);
				}
			}
		}
	}

	public function detail_responden($id) {
		$cek = $this->db->get_where('tb_responden',['respo_id' => $id])->row_array();
		$this->db->select('*');
		$this->db->from('tb_kuesioner');
		$this->db->join('tb_hasil', 'tb_hasil.hasil_kuesioner = tb_kuesioner.kuesioner_id');
		$this->db->join('tb_jawaban', 'tb_jawaban.jawab_id = tb_hasil.hasil_jawaban');
		$this->db->where('hasil_user', $cek['respo_nopol']);
		$this->db->order_by('kuesioner_next', 'ASC');
		return $this->db->get()->result_array();
	}

	public function detail_responden_rata($id) {
		$cek = $this->db->get_where('tb_responden',['respo_id' => $id])->row_array();
		$this->db->select('*');
		$this->db->from('tb_kuesioner');
		$this->db->join('tb_hasil', 'tb_hasil.hasil_kuesioner = tb_kuesioner.kuesioner_id');
		$this->db->join('tb_jawaban', 'tb_jawaban.jawab_id = tb_hasil.hasil_jawaban');
		$this->db->where('hasil_user', $cek['respo_nopol']);
		$this->db->order_by('hasil_jawaban', 'ASC');
		return $this->db->get()->row_array();
	}

	public function data_notifikasi_utama() {
		$this->db->order_by('noti_created', 'DESC');
		$this->db->where('noti_status', 0);
		$this->db->limit(5);
		return $this->db->get('tb_notifikasi')->result_array();
	}

	public function data_notifikasi() {
		$this->db->order_by('noti_created', 'DESC');
		return $this->db->get('tb_notifikasi')->result_array();
	}

	public function pesan_notifikasi_utama() {
		$this->db->select('*');
		$this->db->from('tb_krisar');
		$this->db->join('tb_mahasiswa', 'tb_mahasiswa.mhs_nim = tb_krisar.krisar_user');
		$this->db->order_by('krisar_created', 'DESC');
		$this->db->where('krisar_status', 0);
		$this->db->limit(5);
		return $this->db->get()->result_array();
	}

	public function pesan_notifikasi() {
		$this->db->select('*');
		$this->db->from('tb_krisar');
		$this->db->join('tb_mahasiswa', 'tb_mahasiswa.mhs_nim = tb_krisar.krisar_user');
		$this->db->order_by('krisar_created', 'DESC');
		return $this->db->get()->result_array();
	}

	public function top_responden_byjob() {
		$this->db->select('count(respo_pekerjaan) as job, respo_pekerjaan as peker');
		$this->db->group_by('respo_pekerjaan');
		return $this->db->get('tb_responden')->result();
	}

	public function top_responden_bypdk() {
		$this->db->select('count(respo_pendidikan) as job, respo_pendidikan as peker');
		$this->db->group_by('respo_pendidikan');
		return $this->db->get('tb_responden')->result();
	}

	public function data_responden_home() {
		$this->db->order_by('respo_created', 'DESC');
		$this->db->limit(6);
		return $this->db->get('tb_responden')->result_array();
	}

	public function data_hasil_home() {
		$this->db->order_by('hasil_created', 'DESC');
		$this->db->limit(6);
		return $this->db->get('tb_hasil')->result_array();
	}

	public function log_bybrowser() {
		$this->db->select('count(browser_log_info) as job, browser_log_info as peker');
		$this->db->group_by('browser_log_info');
		return $this->db->get('tb_log_akses')->result();
	}

	public function log_byos() {
		$this->db->select('count(os_log_info) as job, os_log_info as peker');
		$this->db->group_by('os_log_info');
		return $this->db->get('tb_log_akses')->result();
	}

	public function grafik_kueby() {
        $this->db->select('k.kuesioner_judul, j.jawab_jenis, COUNT(h.hasil_id) AS total');
        $this->db->from('tb_kuesioner k');
        $this->db->join('tb_hasil h', 'h.hasil_kuesioner = k.kuesioner_id', 'left');
        $this->db->join('tb_jawaban j', 'j.jawab_id = h.hasil_jawaban', 'left');
        $this->db->group_by(array('k.kuesioner_id', 'j.jawab_id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function grafik_kuebyfilter($sms,$tahun) {
        $this->db->select('k.kuesioner_judul, j.jawab_jenis, COUNT(h.hasil_id) AS total');
        $this->db->from('tb_kuesioner k');
        $this->db->join('tb_hasil h', 'h.hasil_kuesioner = k.kuesioner_id', 'left');
        $this->db->join('tb_jawaban j', 'j.jawab_id = h.hasil_jawaban', 'left');
        $this->db->group_by(array('k.kuesioner_id', 'j.jawab_id'));
        $this->db->where('hasil_sms', $sms);
        $this->db->where('hasil_tahun', $tahun);
        $query = $this->db->get();
        return $query->result();
    }

    public function listahun() {
    	$this->db->group_by('hasil_tahun');
    	return $this->db->get('tb_hasil')->result_array();
    }

	public function getProdiData() {
	    $this->db->select('p.prodi_nama, COUNT(m.mhs_nim) AS total');
	    $this->db->from('tb_prodi p');
	    $this->db->join('tb_mahasiswa m', 'm.mhs_prodi = p.prodi_id', 'left');
	    $this->db->group_by('p.prodi_id');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function getProdiDatafilter($sms,$tahun) {
	    $this->db->select('p.prodi_nama, COUNT(m.mhs_nim) AS total');
	    $this->db->from('tb_prodi p');
	    $this->db->join('tb_mahasiswa m', 'm.mhs_prodi = p.prodi_id', 'left');
	    $this->db->group_by('p.prodi_id');
	    $this->db->where('mhs_semester', $sms);
        $this->db->where('mhs_tahun', $tahun);
	    $query = $this->db->get();
	    return $query->result();
	}

	public function listahun2() {
    	$this->db->group_by('mhs_tahun');
    	return $this->db->get('tb_mahasiswa')->result_array();
    }

	public function update_profil() {
		$sandi = $this->input->post('password');
		$cek = $this->db->get_where('tb_admin',['admin_id' => $this->session->userdata('id')])->row_array();

		if(password_verify($sandi, $cek['admin_password'])) {

			// get foto
		    $config['upload_path'] = 'assets/images/user/';
		    $config['allowed_types'] = 'jpg|png|jpeg|gif';
		    $config['encrypt_name'] = TRUE;
		
		    $this->upload->initialize($config);
		    if (!empty($_FILES['gambar']['name'])) {
		        if ( $this->upload->do_upload('gambar') ) {
		            $gambar = $this->upload->data();
		                
		            $data = array(
	                    'admin_nama'			=>	ucwords($this->input->post('nama')),
	                    'admin_email'			=>	strtolower($this->input->post('email')),
						'admin_foto'			=>	$gambar['file_name'],
	                );
	                $this->db->where('admin_id', $this->session->userdata('id'));
					$this->db->update('tb_admin', $data);
					$this->session->set_flashdata('flash', 'Profil anda berhasil diperbaharui');
					redirect('admin/profil');
	           }
		    }else {
		    	$data = array(
	                'admin_nama'			=>	ucwords($this->input->post('nama')),
                    'admin_email'			=>	strtolower($this->input->post('email')),
					'admin_foto'			=>	$this->input->post('gambar_old'),
		        );
		        $this->db->where('admin_id', $this->session->userdata('id'));
				$this->db->update('tb_admin', $data);
				$this->session->set_flashdata('flash', 'Profil anda berhasil diperbaharui');
				redirect('admin/profil');
		    }
		}else {
			$this->session->set_flashdata('error', 'Konfirmasi password salah');
			redirect('admin/profil');
		}
	}

	public function update_password() {
		$sandi = $this->input->post('password');
		$sandi2 = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);
		$cek = $this->db->get_where('tb_admin',['admin_id' => $this->session->userdata('id')])->row_array();

		if(password_verify($sandi, $cek['admin_password'])) {
			$this->db->set('admin_password', $sandi2);
			$this->db->where('admin_id', $this->session->userdata('id'));
			$this->db->update('tb_admin');
			$this->session->set_flashdata('flash', 'Password anda berhasil diperbaharui');
			redirect('admin/password');
		}else {
			$this->session->set_flashdata('error', 'Konfirmasi password lama salah');
			redirect('admin/password');
		}
	}
}