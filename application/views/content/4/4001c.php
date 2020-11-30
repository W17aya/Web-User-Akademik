<table class="tpmain">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th width="150">NIP</th>
			<th>NAMA</th>
			<th width="250">BIDANG</th>
			<th width="75">JENIS KELAMIN</th>
			<th class="hide">TANGGAL LAHIR</th>
			<th class="hide">AGAMA</th>
			<th class="hide">NO TELP</th>
			<th class="hide">ALAMAT GURU</th>
			<th class="hide">FOTO</th>
			
			</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php
			if ($dat) {
				$i = 1;
		?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit id_guru pk" val="<?php echo $td['id_guru'];?>"><?php echo $i;?></td>
						<td class="postit nip" val="<?php echo $td['nip'];?>"><?php echo $td['nip'];?></td>
						<td class="postit nama_guru" val="<?php echo $td['nama_guru'];?>"><?php echo $td['nama_guru'];?></td>
						<td class="postit id_mapel" val="<?php echo $td['id_mapel'];?>"><?php echo $td['nama_pelajaran'];?></td>
						<td class="postit jenis_kelamin center" val="<?php echo $td['jenis_kelamin'];?>"><?php echo $td['jenis_kelamin'];?></td>					
						<td class="postit tanggal_lahir center hide" val="<?php echo $td['tanggal_lahir'];?>"><?php echo $td['tanggal_lahir'];?></td>					
						<td class="postit agama center hide" val="<?php echo $td['agama'];?>"><?php echo $td['agama'];?></td>					
						<td class="postit telepon center hide" val="<?php echo $td['telepon'];?>"><?php echo $td['telepon'];?></td>					
						<td class="postit alamat center hide" val="<?php echo $td['alamat'];?>"><?php echo $td['alamat'];?></td>					
						<td class="postit foto center hide" val="<?php echo $td['foto'];?>"><?php echo $td['foto'];?></td>					
					</tr>
		<?php 
					$i++;
				}
			}?>
	</tbody>
	<tfoot>
	</tfoot>
</table>

