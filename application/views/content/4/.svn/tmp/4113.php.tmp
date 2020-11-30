<form id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas['nama_kelas']." / ".$semester;?></legend>
		
		<br><br><br>
		<table class="excel">
			<thead>
				<tr>
					<th width="75px">NO</th>
					<th class="hide">ID KELAS</th>
					<th class="hide">KELAS</th>
					<th class="hide">ID MAPEL</th>
					<th class="hide">SEMESTER</th>
					<th class="hide">TYPE</th>
					<th >NAMA PELAJARAN</th>
					<th width="100px">NILAI</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (!empty($dat)){
						$i = 1;
						foreach ($dat as $r => $td){
				?>
							<tr>
								<td class="center"><?php echo $i;?></td>
								<td class="postit id_kelas hide" val="<?php echo $kelas['id_kelas'];?>"><?php echo $kelas['id_kelas'];?></td>
								<td class="postit nama_kelas hide" val="<?php echo $kelas['nama_kelas'];?>"><?php echo $kelas['nama_kelas'];?></td>
								<td class="postit id_mapel hide" val="<?php echo $td['id_mapel'];?>"><?php echo $td['id_mapel'];?></td>
								<td class="postit semester hide" val="<?php echo $semester;?>"><?php echo $semester;?></td>
								<td class="postit type hide" val="<?php echo $type['id'];?>"><?php echo $type['id'];?></td>
								<td class="postit pelajaran" style="padding: 2px 10px" val="<?php echo $td['nama_pelajaran'];?>"><?php echo $td['nama_pelajaran'];?></td>
								<td class="center" style="padding: 2px 0">
									<a href="#f<?php echo $menu;?>" rel="4103" class="upd" title="<?php echo $type['title'];?>" onclick="change_page(this, event, '<?php echo $type['title'];?>')"><a/>
								</td>
							</tr>
				<?php
							$i++;
						}
					} else {
							echo "<tr>
									<td class='center' colspan='9' rowspan='3'>JADWAL PELAJARAN BELUM DIBUAT
									</td>
								  </tr>";
						}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="6">&nbsp;
					</th>
				</tr>
			</tfoot>
		</table>
		<br><br>
		<div class="right">
				<a href="#" rel="<?php if($semester == 'Ganjil') echo 4013; else echo 4023;?>" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Nilai Akademis Semester <?php echo $semester;?>')">Back<a/>
				<label class="long">&nbsp;</label>
		</div>	
	</fieldset>
</form>
