<?php 
	if ($user['group'] == 'Siswa'){
		include "4002a.php";
	} else if ($this->user['group']=='Guru' || $this->user['group']=='Wali Kelas' || $this->user['group']=='Guru BK'){
		include "4002b.php";
	} else {
		include "4002c.php";
	}
?>