<table class="tpmain">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th>TAHUN AJARAN</th>
			<th width="100" class="center nsort">JADWAL KELAS</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php 
			if ($dat) {
				$i = 1;
				foreach($dat as $r => $td) {
		?>
					<tr>
						<td class="postit id_tahun pk" val="<?php echo $td['id_tahun'];?>"><?php echo $i;?></td>
						<td class="postit tahun_ajaran" val="<?php echo $td['tahun_ajaran'];?>"><?php echo $td['tahun_ajaran'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="4014" class="info" title="Detail" onclick="change_page(this, event, 'Jadwal Pelajaran')"><a/>
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
			<th class="right" colspan="3">&nbsp;</th>
		</tr>
	</tfoot>
</table>