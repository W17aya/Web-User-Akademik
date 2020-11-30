<table class="tpmain" width="100%" border="1" >
  <tr>
    <th width="5%" rowspan="2" scope="col"><img src="../../../../design/css/image/p.jpg" /></th>
    <th width="70%" scope="col">BIODATA</th>
  </tr>
  <?php foreach($dat as $r => $td) {?>
  <tr>
    <td><label class="ss">Nim </label><?php echo $td['NIM_MHS']; ?><br/>  
    <label class="ss">Nama </label><?php echo $td['NAMA_MHS']; ?><br/>
	<label class="ss">Tanggal Lahir </label><?php echo $td['TGL_LHR']; ?><br/>
	<label class="ss">Agama </label><?php echo $td['AGAMA_MHS']; ?><br/>
	<label class="ss">No Telepon </label><?php echo $td['NO_TLP']; ?><br/>
	<label class="ss">Alamat </label><?php echo $td['ALAMAT_MHS']; ?><br/>
	<label class="ss">Nama Ayah </label><?php echo $td['NAMA_AYAH']; ?><br/>
	<label class="ss">Pekerjaan Ayah </label><?php echo $td['PEKERJAAN_AYAH']; ?><br/>
	<label class="ss">Nama Ibu </label><?php echo $td['NAMA_IBU']; ?><br/>
	<label class="ss">Pekerjaan Ibu </label><?php echo $td['PEKERJAAN_IBU']; ?><br/>
	<label class="ss">Alamat Orang Tua </label><?php echo $td['ALAMAT_ORTU']; ?><br/>
	<label class="ss">Jenis Kelamin </label><?php echo $td['JENIS_KELAMIN']; ?><br/>
	</td>
  </tr>
  <?php }?>
</table>    
