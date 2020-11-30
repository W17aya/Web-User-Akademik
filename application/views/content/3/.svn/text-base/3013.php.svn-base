<table class="tpmain display">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th class="hide">KODE KELAS</th>
			<th >NAMA KELAS</th>
			<th width="150">KELAS</th>
			<th class="nsort" width="100">SEMESTER GANJIL</th>
			<th class="nsort" width="100">SEMESTER GENAP</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php 
			if ($dat) {
				$i = 1;
				foreach($dat as $r => $td) {
		?>
					<tr>
						<td class="center"><?php echo $i;?></td>
						<td class="postit id_kelas pk hide" val="<?php echo $td['id_kelas'];?>"><?php echo $td['id_kelas'];?></td>
						<td class="postit nama_kelas" val="<?php echo $td['nama_kelas'];?>"><?php echo $td['nama_kelas'];?></td>
						<td class="postit kelas center" val="<?php echo $td['kelas'];?>"><?php echo $td['kelas'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3023" class="upd" title="Semester Ganjil" onclick="change_page(this, event, 'Absensi Siswa')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3033" class="upd" title="Semester Genap" onclick="change_page(this, event, 'Absensi Siswa')"><a/>
						</td>
					</tr>
		<?php
					$i++;
				}
			}
		?>
	</tbody>
	<tfoot>
		<tr>
			<th class="right" colspan="7">&nbsp;</th>
		</tr>
	</tfoot>
</table>