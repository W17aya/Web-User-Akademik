<?php 
	if ($user['group'] == 'Siswa'){
		include "2004a.php";
	} else if ($this->user['group']=='Guru' || $this->user['group']=='Wali Kelas' || $this->user['group']=='Guru BK'){
		include "2004b.php";
	} else {
		include "2004c.php";
	}
?>