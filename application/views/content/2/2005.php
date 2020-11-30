<?php 
	if ($user['group'] == 'Siswa'){
		include "2005a.php";
	} else if ($this->user['group']=='Guru' || $this->user['group']=='Wali Kelas' || $this->user['group']=='Guru BK'){
		include "2005b.php";
	} else {
		include "2005c.php";
	}
?>
