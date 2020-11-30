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
						echo "<td class='center'>$k[id]</td>";
						echo "<td style='padding:0 3px'>$k[nm]</td>";
						for($d=1; $d<=$day; $d++){
							echo "<td class='center'>";
								if (!empty($absen[$k['id']][$d])){
									echo $absen[$k['id']][$d];
								}
							echo "</td>";
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
<div class="right">
		<a href="#" rel="4014" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Absensi Siswa')">Back<a/>
		<label class="long">&nbsp;</label>
</div>
