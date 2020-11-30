<table class="tpmain">
	<thead>
		<tr>
			<th width="200">NIS</th>
			<th>NAMA</th>
			<th width="75">JENIS KELAMIN</th>
			<th width="75">TANGGAL LAHIR</th>
			<th width="75">STATUS</th>
			<th class="hide">AGAMA</th>
			<th class="hide">NO TELP</th>
			<th class="hide">ALAMAT</th>
			<th class="hide">NAMA AYAH</th>
			<th class="hide">PEKERJAAN AYAH</th>
			<th class="hide">NAMA IBU</th>
			<th class="hide">PEKERJAAN IBU</th>
			<th class="hide">ALAMAT ORANGTUA</th>
			<th class="hide">TANGGAL MASUK</th>
			<th class="hide">TANGGAL KELUAR</th>
			<th class="hide">ASAL SEKOLAH</th>
			<th class="hide">FOTO</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit nis pk" val="<?php echo $td['nis'];?>"><?php echo $td['nis'];?></td>
						<td class="postit nama_siswa" val="<?php echo $td['nama_siswa'];?>"><?php echo $td['nama_siswa'];?></td>
						<td class="postit jenis_kelamin center" val="<?php echo $td['jenis_kelamin'];?>"><?php echo $td['jenis_kelamin'];?></td>					
						<td class="postit tanggal_lahir center" val="<?php echo $td['tanggal_lahir'];?>"><?php echo $td['tanggal_lahir'];?></td>					
						<td class="postit status center" val="<?php echo $td['status'];?>"><?php if ($td['status'] == 1) echo "Siswa"; else echo "Alumni";?></td>					
						<td class="postit agama center hide" val="<?php echo $td['agama'];?>"><?php echo $td['agama'];?></td>					
						<td class="postit telepon center hide" val="<?php echo $td['telepon'];?>"><?php echo $td['telepon'];?></td>					
						<td class="postit alamat center hide" val="<?php echo $td['alamat'];?>"><?php echo $td['alamat'];?></td>					
						<td class="postit nama_ayah center hide" val="<?php echo $td['nama_ayah'];?>"><?php echo $td['nama_ayah'];?></td>					
						<td class="postit pekerjaan_ayah center hide" val="<?php echo $td['pekerjaan_ayah'];?>"><?php echo $td['pekerjaan_ayah'];?></td>					
						<td class="postit nama_ibu center hide" val="<?php echo $td['nama_ibu'];?>"><?php echo $td['nama_ibu'];?></td>					
						<td class="postit pekerjaan_ibu center hide" val="<?php echo $td['pekerjaan_ibu'];?>"><?php echo $td['pekerjaan_ibu'];?></td>					
						<td class="postit alamat_ortu center hide" val="<?php echo $td['alamat_ortu'];?>"><?php echo $td['alamat_ortu'];?></td>					
						<td class="postit tanggal_masuk center hide" val="<?php echo $td['tanggal_masuk'];?>"><?php echo $td['tanggal_masuk'];?></td>					
						<td class="postit tanggal_keluar center hide" val="<?php echo $td['tanggal_keluar'];?>"><?php echo $td['tanggal_keluar'];?></td>					
						<td class="postit asal_sekolah center hide" val="<?php echo $td['asal_sekolah'];?>"><?php echo $td['asal_sekolah'];?></td>					
						<td class="postit foto center hide" val="<?php echo $td['foto'];?>"><?php echo $td['foto'];?></td>					
					</tr>
				<!--?php }?-->
			<?php }?>
		<?php }?>
	</tbody>
</table>

