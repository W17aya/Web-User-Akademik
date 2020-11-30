<div id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas['nama_kelas']." / ".$semester." - ".$pelajaran;?></legend>
			<input class="postit id_kelas hide" value="<?php echo $kelas['id_kelas'];?>"/>
			<input class="postit id_mapel hide" value="<?php echo $id_mapel;?>"/>
			<input class="postit semester hide" value="<?php echo $semester;?>"/>
			<table class="excel">
				<thead>
					<th width="32px">NO
					</th>
					<th width="140px" class="hide">NIS
					</th>
					<th>NAMA
					</th>
					<th width="100px">NILAI
					</th>
				</thead>
				<tbody id="dat_siswa">
					<?php
						if (!empty($dat)){
							$i = 1;
							foreach ($dat as $r=>$k){
								echo "<tr>";
									echo "<td class='center'>$i</td>";
									echo "<td class='hide'><input type='text' class='postit siswa[$i][nis] center hide' value='$k[nis]' /></td>";
									echo "<td style='padding: 0 10px'>$k[nama_siswa]</td>";
									echo "<td><input type='text' style='width:100%; padding:0;' class='postit siswa[$i][nilai] center readonly' value='$k[nilai]'/></td>";
								echo "</tr>";
								$i++;
							}
						} else {
							echo "<tr>
									<td class='center' colspan='3'>DATA SISWA BELUM DIBUAT
									</td>
								  </tr>";
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="3">&nbsp;</th>
					</tr>
				</tfoot>
			</table>
			<br><br>
			<label class="long">&nbsp;</label>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="#f3322" pre="#f<?php if($semester == 'Ganjil') echo 3012; else echo 3022;?>" class="easyui-linkbutton" iconCls="icon-save" title="Save" onclick="save_r(this, event, '#dkelas')">Save<a/>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="<?php if($semester == 'Ganjil') echo 3012; else echo 3022;?>" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Nilai Akademis Semester <?php echo $semester?>')">Back<a/>
	</fieldset>
</div>