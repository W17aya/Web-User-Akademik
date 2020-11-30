<table class="tpmain display">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th class="hide">KODE KELAS</th>
			<th class="hide">SEMESTER</th>
			<th >NAMA KELAS</th>
			<th width="150">KELAS</th>
			<th class="nsort" width="100">EVALUASI</th>
			<th class="nsort" width="100">UTS</th>
			<th class="nsort" width="100">UAS</th>
			<th class="nsort" width="100">RAPOR</th>
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
						<td class="postit semester hide" val="<?php echo $semester;?>"><?php echo $semester;?></td>
						<td class="postit nama_kelas" val="<?php echo $td['nama_kelas'];?>"><?php echo $td['nama_kelas'];?></td>
						<td class="postit kelas center" val="<?php echo $td['kelas'];?>"><?php echo $td['kelas'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3112" class="upd" title="Evaluasi" onclick="change_page(this, event, 'Evaluasi')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3212" class="upd" title="UTS" onclick="change_page(this, event, 'Ujian Tengah Semester')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3312" class="upd" title="UAS" onclick="change_page(this, event, 'Ujian Akhir Semester')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="3412" class="upd" title="Rapor" onclick="change_page(this, event, 'Laporan Hasil Belajar')"><a/>
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
			<th class="right" colspan="8">&nbsp;</th>
		</tr>
	</tfoot>
</table>
<br><br>
<div class="right">
	<a href="#" rel="3002" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Kelas')">Back<a/>
	<label class="long">&nbsp;</label>
</div>