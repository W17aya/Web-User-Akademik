<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class mMain extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->library('pagination');
		$this->user	= unserialize(base64_decode($this->session->userdata('user')));
	}
	
	function get_menu(){
		$menu = array();
		if (!empty($this->user)){
			// $g = $this->user['group'];
			
			// $sql = "select * from ss_menu where menu_id in (select menu_id from ss_privilege where usergroup_id='$g' and flag=1) and menu_pid=0 and active=1 order by 1";
			$id = $this->user['id'];
			
			$sql = "select * from ss_menu where menu_id in (select menu_id from ss_privilege where user_id='$id' and flag=1) and menu_pid=0 and active=1 order by 1";
			$menu = fetchArray($sql);
		}
		
		return $menu;
	}
	
	function get_submenu($menu_id = null){
		$submenu = array();
		if (!empty($menu_id) && !empty($this->user)){
			// $g = $this->user['group'];
			
			// $sql = "select * from ss_menu where menu_id in (select menu_id from ss_privilege where usergroup_id='$g' and flag=1) and menu_pid=$menu_id and active=1 order by 1";
			$id = $this->user['id'];
			
			$sql = "select * from ss_menu where menu_id in (select menu_id from ss_privilege where user_id='$id' and flag=1) and menu_pid=$menu_id and active=1 order by 1";
			$submenu = fetchArray($sql);
		}
		
		return $submenu;
	}
	
	function select($menu, $param=null){
		$sql ='';
		switch($menu){
			case 1001:
				break;
			case 1002:
				break;
			case 1003:
				break;
			case 2001:
					$id = $this->user['id'];
					$sql = "select * from mahasiswa where NIM_MHS='$id'"; 
				break;
			case 2002:
				if ($param == 'Mahasiswa'){
					$id = $this->user['id'];
					$sql = "select mahasiswa.NIM_MHS,mahasiswa.NAMA_MHS,mata_kuliah.ID_MATKUL,mata_kuliah.NAMA_MATAKULIAH,nilai.NILAI from mahasiswa,nilai,mata_kuliah where nilai.NIM_MHS='$id' AND mahasiswa.NIM_MHS=nilai.NIM_MHS AND mata_kuliah.ID_MATKUL=nilai.ID_MATKUL";
				}  else {
					$sql = "select nilai.NIM_MHS,mata_kuliah.ID_MATKUL,mata_kuliah.NAMA_MATAKULIAH,nilai.NILAI from nilai,mata_kuliah where mata_kuliah.ID_MATKUL=nilai.ID_MATKUL";
				}
				break;
			case 3001:
					$sql = "select * from dosen";
				break;
			case 3002:
					$sql = "select * from mahasiswa";
				break;
			case 3003:
					$sql = "select nilai.NIM_MHS,mata_kuliah.ID_MATKUL,mata_kuliah.NAMA_MATAKULIAH,nilai.NILAI from nilai,mata_kuliah where mata_kuliah.ID_MATKUL=nilai.ID_MATKUL";
				break;
			case 3004:
					$sql = "select * from ruangan";
				break;
			case 3005:
					$sql = "select * from mata_kuliah";
				break;
			case 3006:
					$sql = "select jadwal.ID_MATKUL,mata_kuliah.NAMA_MATAKULIAH,jadwal.ID_RUANGAN,ruangan.NAMA_RUANGAN,jadwal.HARI,jadwal.JAM from jadwal,mata_kuliah,ruangan where jadwal.ID_MATKUL=mata_kuliah.ID_MATKUL AND ruangan.ID_RUANGAN=jadwal.ID_RUANGAN";
				break;
			case 3007:
					$sql = "select mengajar.ID_MENGAJAR,mengajar.ID_DOSEN,dosen.NAMA_DOSEN,mengajar.ID_MATKUL,mata_kuliah.NAMA_MATAKULIAH from mengajar,dosen,mata_kuliah where dosen.ID_DOSEN=mengajar.ID_DOSEN AND mata_kuliah.ID_MATKUL=mengajar.ID_MATKUL";
				break;
			
			
				
		case 2004:	
				if ($param == 'Siswa'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,lhb.nis,lhb.nilai,lhb.id_mapel,lhb.semester,mata_pelajaran.nama_pelajaran from lhb,siswa,mata_pelajaran where siswa.nis='$id' AND siswa.nis=lhb.nis AND mata_pelajaran.id_mapel=lhb.id_mapel";
				} else if ($param == 'Guru' || $param == 'Wali Kelas' || $param == 'Guru BK'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,lhb.nis,lhb.nilai,lhb.id_mapel,lhb.semester,mata_pelajaran.nama_pelajaran from lhb,siswa,mata_pelajaran where siswa.nis=lhb.nis AND mata_pelajaran.id_mapel=lhb.id_mapel";
				} else {
					$sql = "select siswa.nama_siswa,lhb.nis,lhb.nilai,lhb.id_mapel,lhb.semester,mata_pelajaran.nama_pelajaran from lhb,siswa,mata_pelajaran where  siswa.nis=lhb.nis AND mata_pelajaran.id_mapel=lhb.id_mapel";
				}
				break;
			case 2005:	
				if ($param == 'Siswa'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,kelas_detail.nama_kelas from siswa,kelas_detail,kelas_siswa where siswa.nis='$id' AND siswa.nis=kelas_siswa.nis AND kelas_detail.id_kelas=kelas_siswa.id_kelas ";
				} else if ($param == 'Guru' || $param == 'Wali Kelas' || $param == 'Guru BK'){
					$id = $this->user['id'];
					$sql = "select siswa.nis,nama_siswa,kelas_detail.nama_kelas from siswa,kelas_detail,kelas_siswa where siswa.nis=kelas_siswa.nis AND kelas_detail.id_kelas=kelas_siswa.id_kelas";
				} else {
					$sql = "select siswa.nis,nama_siswa,kelas_detail.nama_kelas from siswa,kelas_detail,kelas_siswa where siswa.nis=kelas_siswa.nis AND kelas_detail.id_kelas=kelas_siswa.id_kelas";
				}
				break;
			case 3004:	
				if ($param == 'Siswa'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,prestasi.prestasi,keterangan,tahun from siswa,prestasi where siswa.nis='$id' AND siswa.nis=prestasi.nis";
				} else if ($param == 'Guru' || $param == 'Wali Kelas' || $param == 'Guru BK'){
					$id = $this->user['id'];
					$sql = "select * from prestasi where id_guru='$id'";
				} else {
					$sql = "select siswa.nama_siswa,prestasi.prestasi,keterangan,tahun from siswa,prestasi where siswa.nis=prestasi.nis";
				}
				break;
			case 3021:
				$sql = "select a.*, g.nama_guru from (select j.*, p.nama_pelajaran from (select * from jadwal_pelajaran where id_kelas=$param[id_kelas] and semester='$param[semester]')j left join mata_pelajaran p on j.id_mapel=p.id_mapel) a left join guru g on a.id_guru = g.id_guru";
				break;
			case 3112:
				$sql = "select a.id_mapel, b.nama_pelajaran from (select distinct id_mapel from jadwal_pelajaran where id_kelas=$param[id_kelas] and semester='$param[semester]') a left join mata_pelajaran b on a.id_mapel=b.id_mapel";
				break;
			case 3122:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from evaluasi where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 3222:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from uts where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 3322:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from uas where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 3422:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from lhb where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
				
			case 4113:
				$sql = "select a.id_mapel, b.nama_pelajaran from (select distinct id_mapel from jadwal_pelajaran where id_kelas=$param[id_kelas] and semester='$param[semester]') a left join mata_pelajaran b on a.id_mapel=b.id_mapel";
				break;
			case 4123:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from evaluasi where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 4223:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from uts where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 4323:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from uas where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 4423:
				$sql = "select a.*, b.nilai from (select nis, nama_siswa from siswa where nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])) a left join (select nis, nilai from lhb where id_mapel='$param[id_mapel]' and id_kelas=$param[id_kelas] and semester='$param[semester]') b on a.nis=b.nis";
				break;
			case 4001:
				$sql = "select g.*, p.nama_pelajaran from guru g left join mata_pelajaran p on g.id_mapel=p.id_mapel";
				break;
			case 4002:
				$sql = "select * from siswa";
				break;
			case 4003:	
				if ($param == 'Siswa'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,nilai_evaluasi.nis,nilai_uts,mata_pelajaran.nama_pelajaran from siswa,mata_pelajaran,nilai_evaluasi where nilai_evaluasi.nis='$id' AND mata_pelajaran.id_mapel=nilai_evaluasi.id_mapel AND nilai_evaluasi.nis=siswa.nis";
				} else if ($param == 'Wali Kelas'){
					$id = $this->user['id'];
					$sql = "select * from nilai_evaluasi where nis in (select nis from siswa where nama_kelas=(select nama_kelas where id_guru=$id)) ";
				} else {
					$sql = "select siswa.nama_siswa,nilai_evaluasi.nis,nilai_uts,mata_pelajaran.nama_pelajaran from siswa,mata_pelajaran,nilai_evaluasi where mata_pelajaran.id_mapel=nilai_evaluasi.id_mapel AND nilai_evaluasi.nis=siswa.nis";
				}
				break;
			case 4004:	
				if ($param == 'Siswa'){
					$id = $this->user['id'];
					$sql = "select siswa.nama_siswa,nilai_evaluasi.nis,nilai_raport,mata_pelajaran.nama_pelajaran from siswa,mata_pelajaran,nilai_evaluasi where nilai_evaluasi.nis='$id' AND mata_pelajaran.id_mapel=nilai_evaluasi.id_mapel AND nilai_evaluasi.nis=siswa.nis";
				} else if ($param == 'Wali Kelas'){
					$id = $this->user['id'];
					$sql = "select * from nilai_evaluasi where nis in (select nis from siswa where nama_kelas=(select nama_kelas where id_guru=$id)) ";
				} else {
					$sql = "select siswa.nama_siswa,nilai_evaluasi.nis,nilai_raport,mata_pelajaran.nama_pelajaran from siswa,mata_pelajaran,nilai_evaluasi where mata_pelajaran.id_mapel=nilai_evaluasi.id_mapel AND nilai_evaluasi.nis=siswa.nis";
				}break;
		}
		if (!empty($sql)) return fetchArray($sql);
		else return null;
	}
	
	function crud($menu, $act, $post){
		$ack = 0;
		$tbl = '';
		switch($act){
			case 'create' :
				switch ($menu){
					case 2002:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('nilai')){
							$ack = 1;
						}
						break;
					case 3001:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('dosen')){
							$ack = 1;
						}
						break;
					case 3002:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('mahasiswa')){
							$ack = 1;
						}
						break;
					case 3003:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('nilai')){
							$ack = 1;
						}
						break;
					case 3004:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('ruangan')){
							$ack = 1;
						}
						break;
					case 3005:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('mata_kuliah')){
							$ack = 1;
						}
						break;
					case 3006:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('jadwal')){
							$ack = 1;
						}
						break;
					case 3007:
						foreach($post as $k=>$v) if($v!='') $this->db->set($k, $v);
						if ($this->db->insert('mengajar')){
							$ack = 1;
						}
						break;
				}
				break;
			case 'update' :
				foreach($post as $k=>$v) if(empty($v)) unset($post[$k]);
				switch ($menu){
					case 2002:
						if ($this->db->update('nilai', $post, array('id_matkul'=>$post['id_matkul']))){
							$ack = 1;
						}
						break;
					case 3001:
						if ($this->db->update('dosen', $post, array('id_dosen'=>$post['id_dosen']))){
							$ack = 1;
						}
						break;
					case 3002:
						if ($this->db->update('mahasiswa', $post, array('nim_mhs'=>$post['nim_mhs']))){
							$ack = 1;
						}
						break;
					case 3003:
						if ($this->db->update('nilai', $post, array('nim_mhs'=>$post['nim_mhs']))){
							$ack = 1;
						}
						break;
					case 3004:
						if ($this->db->update('ruangan', $post, array('id_ruangan'=>$post['id_ruangan']))){
							$ack = 1;
						}
						break;
					case 3005:
						if ($this->db->update('mata_kuliah', $post, array('id_matkul'=>$post['id_matkul']))){
							$ack = 1;
						}
						break;
					case 3006:
						if ($this->db->update('jadwal', $post, array('id_matkul'=>$post['id_matkul']))){
							$ack = 1;
						}
						break;
					case 3007:
						if ($this->db->update('mengajar', $post, array('id_mengajar'=>$post['id_mengajar']))){
							$ack = 1;
						}
						break;
					
					}
				break;
			case 'delete' :
				switch ($menu){
					case 2002:
						$sql = "delete from nilai where id_matkul='$post[id_matkul]";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3001:
						$sql = "delete from dosen where id_dosen='$post[id_dosen]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3002:
						$sql = "delete from mahasiswa where nim_mhs='$post[nim_mhs]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3003:
						$sql = "delete from nilai where nim_mhs='$post[nim_mhs]' ";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3004:
						$sql = "delete from ruangan where id_ruangan='$post[id_ruangan]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3005:
						$sql = "delete from mata_kuliah where id_matkul='$post[id_matkul]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3006:
						$sql = "delete from jadwal where id_matkul='$post[id_matkul]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
					case 3007:
						$sql = "delete from mengajar where id_mengajar=$post[id_mengajar]";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
						break;
					case 4002:
						$sql = "delete from siswa where nis='$post[nis]'";
						if ($this->db->query($sql)){
							$ack = 1;
						}
						break;
				}
				break;
			case 'save' :
				switch ($menu){
					case 1024:
						// printz($post);
						if (!empty($post['nis'])){
							$this->db->query("delete from kelas_siswa where id_kelas=$post[id_kelas]");
							foreach ($post['nis'] as $r=>$v){
								if (!empty($v)){
									$sql = "insert kelas_siswa(id_kelas, nis) values($post[id_kelas], '$v')";
									$this->db->query($sql);
								}
							}
						}
						$ack = 1;
						break;
					case 3021:
						$this->db->query("delete from jadwal_pelajaran where id_kelas=$post[id_kelas] and semester='$post[semester]'");
						// printz("delete from jadwal_pelajaran where id_kelas=$post[id_kelas] and semester='$post[semester]'");
						foreach ($post['hari'] as $a => $b){
							foreach ($b as $d => $e){
								if (!empty($e['id_mapel']) || !empty($e['id_guru']) || !empty($e['jam'])){
									$key = "id_kelas, semester, hari";
									$val = "$post[id_kelas], '$post[semester]', '$a'";
									foreach ($e as $k => $v){
										if (!empty($v)){
											$key .= ", $k";
											if (is_numeric($k)){
												$val .= ", $v";
											} else {
												$val .= ", '$v'";
											}
										}
									}
									$sql = "insert into jadwal_pelajaran($key) values($val)";
									// echo $sql."<br>";
									$this->db->query($sql);
								}
							}
						}
						$ack = 1;
						break;
					case 1016:
						foreach ($post['id_mapel'] as $r=>$v){
							$this->db->query("delete from kkm where id_mapel='$v' and kelas='$post[kelas]'");
							$sql = "insert into kkm (id_mapel, kelas, nilai_standar) values ('$v', '$post[kelas]', ".$post['kkm'][$r].")";
							$this->db->query($sql);
						}
						$ack = 1;
						break;
					case 3023:
						foreach ($post['absen'] as $r => $a){
							foreach ($a as $s => $d){
								$this->db->query("delete from absen_siswa where nis='$d[nis]' and id_kelas=$post[id_kelas] and month(tanggal_absen)=$post[bulan] and year(tanggal_absen)=$post[tahun]");
							}
						}
						foreach ($post['absen'] as $r => $a){
							foreach ($a as $s => $d){
								foreach($d['tanggal'] as $k => $t){
									if (!empty($t)){
										$day = $post['tahun']."-".$post['bulan']."-".$k;
										$sql = "insert into absen_siswa(nis, semester, tanggal_absen, id_kelas, absen) values('$d[nis]', '$post[semester]', '$day', $post[id_kelas], '$t')";
										$this->db->query($sql);
									}
								}
							}
						}
						$ack = 1;
						break;
					case 3122 :
						$ack = 1;
						break;
					case 3222 :
						if (!empty($post['siswa'])){
							$this->db->query("delete from uts where id_kelas=$post[id_kelas] and id_mapel='$post[id_mapel]' and semester='$post[semester]'");
							foreach ($post['siswa'] as $r => $k){
								if (empty($k['nilai'])) $k['nilai'] = 'null';
								$sql = "insert into uts(id_kelas, id_mapel, nis, nilai, semester) values($post[id_kelas], '$post[id_mapel]', '$k[nis]', $k[nilai], '$post[semester]')";
								$this->db->query($sql);
							}
						}
						$ack = 1;
						break;
					case 3322 :
						if (!empty($post['siswa'])){
							$this->db->query("delete from uts where id_kelas=$post[id_kelas] and id_mapel='$post[id_mapel]' and semester='$post[semester]'");
							foreach ($post['siswa'] as $r => $k){
								if (empty($k['nilai'])) $k['nilai'] = 'null';
								$sql = "insert into uas(id_kelas, id_mapel, nis, nilai, semester) values($post[id_kelas], '$post[id_mapel]', '$k[nis]', $k[nilai], '$post[semester]')";
								$this->db->query($sql);
							}
						}
						$ack = 1;
						break;
					case 3422 :
						if (!empty($post['siswa'])){
							$this->db->query("delete from uts where id_kelas=$post[id_kelas] and id_mapel='$post[id_mapel]' and semester='$post[semester]'");
							foreach ($post['siswa'] as $r => $k){
								if (empty($k['nilai'])) $k['nilai'] = 'null';
								$sql = "insert into lhb(id_kelas, id_mapel, nis, nilai, semester) values($post[id_kelas], '$post[id_mapel]', '$k[nis]', $k[nilai], '$post[semester]')";
								$this->db->query($sql);
							}
						}
						$ack = 1;
						break;
				}
		}
		
		return $ack;
	}
	
	function reff($reff = '', $param = null, $ret = "all"){
		$sql = '';
		$whr = '';
		switch ($reff){
			case 'dosen' :
				$sql = "select id_dosen id, nama_dosen nm from dosen";
				break;
			case 'siswa' :
				if (!empty($param['id_kelas'])) $whr .="and nis in (select nis from kelas_siswa where id_kelas=$param[id_kelas])";
				$sql = "select nis id, nama_siswa nm from siswa where 1 $whr order by 1";
				break;
			case 'kelas' :
				$sql = "select kelas id, kelas nm from kelas";
				break;
			case 'mapel' :
				$sql = "select id_matkul id, nama_matakuliah nm from mata_kuliah";
				break;
		}
		if (!empty($sql)) return fetchArray($sql, $ret);
		else return;
	}
	
	function chjadwal($data){
		$out = array('senin' => array(), 'selasa' => array(), 'rabu' => array(), 'kamis' => array(), 'jumat' => array(), 'sabtu' => array());
		// $out = array();
		$sn = 0; $sl = 0; $rb = 0; $km = 0; $jm = 0; $sb = 0;
		if (!empty($data)){
			foreach ($data as $r => $k){
				if ($k['hari'] == 'senin'){
					$out['senin'][$sn] = $k;
					$sn++;
				} else if ($k['hari'] == 'selasa'){
					$out['selasa'][$sl] = $k;
					$sl++;
				} else if ($k['hari'] == 'rabu'){
					$out['rabu'][$rb] = $k;
					$rb++;
				} else if ($k['hari'] == 'kamis'){
					$out['kamis'][$km] = $k;
					$km++;
				} else if ($k['hari'] == 'jumat'){
					$out['jumat'][$jm] = $k;
					$jm++;
				} else {
					$out['sabtu'][$sb] = $k;
					$sb++;
				}
			}
		}
		return $out;
	}
	
	function get_absen($param){
		$o = array();
		$s = fetchArray("select nis from kelas_siswa where id_kelas=$param[id_kelas]");
		if (!empty($s)){
			foreach ($s as $r=>$k){
				$a = fetchArray("select day(tanggal_absen) as tanggal, absen from absen_siswa where nis='$k[nis]' and id_kelas=$param[id_kelas] and semester='$param[semester]' and month(tanggal_absen)=$param[bulan] and year(tanggal_absen)=$param[tahun]");
				$o[$k['nis']] = $this->chidarray($a);
			}
		}
		return $o;
	}
	
	function chidarray($param){
		$out = array();
		if (!empty($param)){
			foreach($param as $r=>$k){
				$out[$k['tanggal']]=$k['absen'];
			}
		}
		return $out;
	}
	
	function set_name($id){
		return fetchArray("select nama_siswa from siswa where nis='$id'", "one");
	}
}