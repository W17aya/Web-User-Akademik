<?php 
 if ( ! defined('BASEPATH'))
 exit('No direct script access allowed');

 class Main extends CI_Controller
 {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mMain');
		
		$index	= $this->config->item('index_page');
		$host	= $this->config->item('base_url');

		$this->url = empty($index) ? $host : $host . $index . '/';
		$this->user	= unserialize(base64_decode($this->session->userdata('user')));
		
	}
	
	function index()
	{
		$param['user'] = $this->user;
		$param['error'] = $this->session->flashdata('err_login');
		$param['url'] = $this->url;
		$param['tmenu'] = $this->mMain->get_menu();
		$param['smenu'] = $this->mMain->get_submenu();
		$param['cmenu'] = 'Home';
		$data['tMenu'] = $this->load->view('menu/tmenu', $param, true);
		$data['content'] = $this->load->view('frontpage/default', $param, true);

		$this->load->view('index', $data);
	}
	
	public function page($menu, $act = '', $p = ''){
		if (!$this->user){
			if ($this->input->is_ajax_request()) echo "expired";
			else header("Location: $this->url");
		} else {
			$page = 'default';
			$post = array();
			$this->post($post);
			$param['dat'] = array();
			$param['user'] = $this->user;
			$param['error'] = $this->session->flashdata('err_login');
			$param['url'] = $this->url;
			$param['menu'] = $menu;
			$param['tmenu'] = $this->mMain->get_menu();
			$param['smenu'] = $this->mMain->get_submenu($menu);
			$param['cmenu'] = $act;
			$data['tMenu'] = $this->load->view('menu/tmenu', $param, true);
			if ($param['smenu']) $data['sMenu'] = $this->load->view('menu/smenu', $param, true);
			switch ($menu){
				case 0 :
				case 1 :
				case 2 :
				case 3 :
				case 4 :
				case 5 :
					break;
				case 1001 :
					$page = 1;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 1002 :
					$page = 1;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 1003 :
					$page = 1;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 1004 :
					$page = 1;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 2001 :
					$page = 2;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 2002 :
					$page = 2;
					if ($this->user['group']=='Mahasiswa'){
						$param['dat'] = $this->mMain->select($menu, 'Mahasiswa');
					} else {
						$param['dat'] = $this->mMain->select($menu, 'Admin');
					} 
					break;
				case 3001 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3002 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3003 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3004 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3005 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3006 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 3007 :
					$page = 3;
					$param['dat'] = $this->mMain->select($menu);
					break;
					
				case 3012 :
					$page = 3;
					$param['semester'] = "Ganjil";
					$param['kelas'] = $this->mMain->reff('kelas');
					$param['dat'] = $this->mMain->select(1014);
					break;
				case 3022 :
					$page = 3;
					$menu = 3012;
					$param['semester'] = "Genap";
					$param['kelas'] = $this->mMain->reff('kelas');
					$param['dat'] = $this->mMain->select(1014);
					break;
					
				case 3021 :
					$page = 3;
					$post['semester'] = "Ganjil";
					$param['semester'] = "Ganjil";
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['pelajaran'] = $this->mMain->reff('mapel');
					$param['guru'] = $this->mMain->reff('guru');
					$param['dat'] = $this->mMain->select($menu, $post);
					$param['dat'] = $this->mMain->chjadwal($param['dat']);
					break;
				case 3031 :
					$page = 3;
					$menu = 3021;
					$post['semester'] = "Genap";
					$param['semester'] = "Genap";
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['pelajaran'] = $this->mMain->reff('mapel');
					$param['guru'] = $this->mMain->reff('guru');
					$param['dat'] = $this->mMain->select($menu, $post);
					$param['dat'] = $this->mMain->chjadwal($param['dat']);
					break;
					
				case 3112 :
					$page = 3;
					$menu = 3112;
					$param['type'] = array('id'=>1, 'title'=>"Evaluasi");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				case 3212 :
					$page = 3;
					$menu = 3112;
					$param['type'] = array('id'=>2, 'title'=>"Ujian Tengah Semester");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					// printz($param['dat']);
					break;
				case 3312 :
					$page = 3;
					$menu = 3112;
					$param['type'] = array('id'=>3, 'title'=>"Ujian Akhir Semester");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				case 3412 :
					$page = 3;
					$menu = 3112;
					$param['type'] = array('id'=>4, 'title'=>"Laporan Hasil Belajar");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				
				case 3102 :
					$page = 3;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['pelajaran'] = $post['pelajaran'];
					$param['id_mapel'] = $post['id_mapel'];
					switch ($post['type']){
						case 1 : $menu = 3122; break;
						case 2 : $menu = 3222; break;
						case 3 : $menu = 3322; break;
						case 4 : $menu = 3422; break;
					}
					if ($menu != 3122){
						$param['dat'] = $this->mMain->select($menu, $post);
						// printz($param['dat']);
					}
					break;
					
				case 3023 :
					$page = 3;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['bulan'] = $this->set_month();
					$param['tahun'] = $this->set_year();
					$param['semester'] = "Ganjil";
					break;
				case 3033 :
					$page = 3;
					$menu = 3023;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['bulan'] = $this->set_month();
					$param['tahun'] = $this->set_year();
					$param['semester'] = "Genap";
					break;
					
				case 3004 :
					$page = 3;
					if ($this->user['group']=='Siswa'){
						$param['dat'] = $this->mMain->select($menu, 'Siswa');
					} else if ($this->user['group']=='Wali Kelas'){
						$param['dat'] = $this->mMain->select($menu, 'Wali_kelas');
					} else {
						$param['dat'] = $this->mMain->select($menu, 'Admin');
					printz($param['dat']);
					}
					break;
				case 4001 :
					$page = 4;
					$param['dat'] = $this->mMain->select($menu);
					break;
				case 4002 :
					$page = 4;
					$param['dat'] = $this->mMain->select($menu);
					break;
					
				case 4003 :
				case 4004 :
					$page = 4;
					$param['dat'] = $this->mMain->select(1003);
					break;
					
				case 4014 :
					$page = 4;
					$param['kelas'] = $this->mMain->reff('kelas');
					$param['dat'] = $this->mMain->select(1014);
					break;
					
				case 4013 :
					$page = 4;
					$param['semester'] = "Ganjil";
					$param['kelas'] = $this->mMain->reff('kelas');
					$param['dat'] = $this->mMain->select(1014);
					break;
				case 4023 :
					$page = 4;
					$menu = 4013;
					$param['semester'] = "Genap";
					$param['kelas'] = $this->mMain->reff('kelas');
					$param['dat'] = $this->mMain->select(1014);
					break;
					
				case 4113 :
					$page = 4;
					$menu = 4113;
					$param['type'] = array('id'=>1, 'title'=>"Evaluasi");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				case 4213 :
					$page = 4;
					$menu = 4113;
					$param['type'] = array('id'=>2, 'title'=>"Ujian Tengah Semester");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					// printz($param['dat']);
					break;
				case 4313 :
					$page = 4;
					$menu = 4113;
					$param['type'] = array('id'=>3, 'title'=>"Ujian Akhir Semester");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				case 4413 :
					$page = 4;
					$menu = 4113;
					$param['type'] = array('id'=>4, 'title'=>"Laporan Hasil Belajar");
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['dat'] = $this->mMain->select($menu, $post);
					break;
				
				case 4103 :
					$page = 4;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['semester'] = $post['semester'];
					$param['pelajaran'] = $post['pelajaran'];
					$param['id_mapel'] = $post['id_mapel'];
					switch ($post['type']){
						case 1 : $menu = 4123; break;
						case 2 : $menu = 4223; break;
						case 3 : $menu = 4323; break;
						case 4 : $menu = 4423; break;
					}
					if ($menu != 4123){
						$param['dat'] = $this->mMain->select($menu, $post);
						// printz($param['dat']);
					}
					break;
					
				case 4024 :
					$page = 4;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['bulan'] = $this->set_month();
					$param['tahun'] = $this->set_year();
					$param['semester'] = "Ganjil";
					break;
				case 4034 :
					$page = 4;
					$menu = 4024;
					$param['kelas'] = array('id_kelas'=>$post['id_kelas'], 'nama_kelas'=>$post['nama_kelas']);
					$param['bulan'] = $this->set_month();
					$param['tahun'] = $this->set_year();
					$param['semester'] = "Genap";
					break;
			}
			if ($page == 'default'){
				$data['content'] = $this->load->view('frontpage/default', $param, true);
				$this->load->view('index', $data);
			} else {
				$data['content'] = $this->load->view('content/'.$page.'/'.$menu, $param, true);
				echo $data['content'];
			}
		}
	}
	
	public function crud($menu, $act = ''){
		if (!empty($act)){
			$menu	= (int)str_replace('f', '', $menu);
			$this->post($post);
			$ack = $this->mMain->crud($menu, $act, $post);
		} else {
			$ack = 'salah pilihan';
		}
		echo $ack;
	}
	
	public function get_absen($page, $menu){
		$post=$this->input->post();
		$param['day'] = cal_days_in_month(CAL_GREGORIAN, $post['bulan'], $post['tahun']);
		$param['siswa'] = $this->mMain->reff('siswa', $post);
		$param['absen'] = $this->mMain->get_absen(array('id_kelas'=>$post['id_kelas'], 'semester'=>$post['semester'], 'bulan'=>$post['bulan'], 'tahun'=>$post['tahun']));
		$view = $this->load->view('content/'.$page.'/'.$menu, $param, true);
		
		echo $view;
	}
	
	private function set_year(){
		$y = array();
		$today = getdate();
		$s = intval($today['year']) - 5;
		for($i = $s; $i <= intval($today['year']); $i++){
			$y[$i] = array('id' => $i, 'nm' => $i); 
		}
		return $y;
	}
	
	private function set_month(){
		$m = array();
		$m_id = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
		$m_nm = array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		for ($i=0; $i<12; $i++){
			$m[$i]['id'] = $m_id[$i];
			$m[$i]['nm'] = $m_nm[$i];
		}
		return $m;
	}
	
	public function ac($reff){
		$out = array();
		$resp = $this->mMain->reff($reff);
		foreach ($resp as $r=>$k){
			array_push($out,array('value'=>$k['nis']));
		}
		echo (json_encode($out));
	}
	
	public function get_name($id){
		$nm = $this->mMain->set_name($id);
		if (empty($nm)) echo "0";
		else echo $nm;
	}
	
	private function post(&$post) {
		foreach($_POST as $k=>$v) {
			$post[strtolower($k)] = $this->input->post($k);			
		}
	}

	private function get(&$get) {
		foreach($_GET as $k=>$v) {
			$get[strtolower($k)] = $this->input->get($k);
		}
	}
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */