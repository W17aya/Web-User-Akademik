<br>
<table class="excel">
	<!--thead>
		<tr>
			<th colspan="33">
				<div class="right">
					<label class="ss" style="text-align:right; padding:0 5px 5px 0">Semester</label>
					<select class="postit semester">
						<option>Ganjil</option>
						<option>Genap</option>
					</select>
					<label class="ss" style="text-align:right; padding:0 5px 0px 0">Tahun Ajaran</label>
					<input type="text" class="postit tahun_ajaran" value="" />
				</div>
			</th>
		</tr>
	</thead-->
	<thead>
		<tr>
			<th width="75px">NIS</th>
			<th width="200px">Nama</th>
			<?php
				for($d=1; $d<=$day; $d++){
					echo "<th width='15px'>$d</th>";
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
			if (!empty($siswa)){
				$i = 0;
				foreach ($siswa as $r => $k){
					echo "<tr>";
						echo "<td class='center'>$k[id]<input type='text' class='postit absen[".$i."][siswa][nis] hide' value='$k[id]'></td>";
						echo "<td style='padding:0 3px'>$k[nm]</td>";
						for($d=1; $d<=$day; $d++){
							echo "<td><input type='text' style='width:100%;text-align: center; padding:0px;' class='postit absen[".$i."][siswa][tanggal][".$d."] readonly' value='";
								if (!empty($absen[$k['id']][$d])){
									echo $absen[$k['id']][$d];
								}
							echo "' maxlength='1'/></td>";
						}
					echo "</tr>";
					$i++;
				}
			} else {
				echo "<tr>";
					echo "<td></td>";
					echo "<td></td>";
					for($d=1; $d<=$day; $d++){
						echo "<td></td>";
					}
				echo "</tr>";
			}
		?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="33">&nbsp;
			</th>
		</tr>
	</tfoot>
</table>
<br><br>
<div class="center">
		<a href="#dkelas" rel="#f3023" pre="#f3013" class="easyui-linkbutton" iconCls="icon-save" title="Save" onclick="save_r(this, event, '#dkelas')">Save<a/>
		<label class="ss">&nbsp;</label>
		<a href="#" rel="3013" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Absensi Siswa')">Back<a/>
</div>
