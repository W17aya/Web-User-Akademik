<table class="tpmain">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th>NAMA KELAS</th>
			<th>KELAS</th>
			<th width="70" class="center nsort">.::.</th>
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
						<td class="postit nama_kelas pk" val="<?php echo $td['nama_kelas'];?>"><?php echo $td['nama_kelas'];?></td>
						<td class="postit kelas" val="<?php echo $td['kelas'];?>"><?php echo $td['kelas'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="1015" class="info" title="Detail" onclick="change_page(this, event, 'Jadwal Kelas')"><a/>
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
			<th class="right" colspan="4">&nbsp;</th>
		</tr>
	</tfoot>
</table>