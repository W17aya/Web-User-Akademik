<div id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas['nama_kelas']." / ".$semester;?></legend>
			<input class="postit id_kelas hide" value="<?php echo $kelas['id_kelas'];?>"/>
			<input class="postit semester hide" value="<?php echo $semester;?>"/>
			<table class="excel">
				<thead>
					<th class="left" colspan="2">SENIN</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_senin', 'senin')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_senin">
					<?php
						if (!empty($dat['senin'])){
							$i = 0;
							foreach ($dat['senin'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[senin][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[senin][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_mapel'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[senin][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[senin][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[senin][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[senin][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<thead>
					<th class="left" colspan="2">SELASA</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_selasa', 'selasa')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_selasa">
					<?php
						if (!empty($dat['selasa'])){
							$i = 0;
							foreach ($dat['selasa'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[selasa][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[selasa][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_mapel'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[selasa][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[selasa][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[selasa][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[selasa][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<thead>
					<th class="left" colspan="2">RABU</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_rabu', 'rabu')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_rabu">
					<?php
						if (!empty($dat['rabu'])){
							$i = 0;
							foreach ($dat['rabu'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[rabu][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[rabu][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_mapel'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[rabu][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[rabu][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[rabu][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[rabu][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<thead>
					<th class="left" colspan="2">KAMIS</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_kamis', 'kamis')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_kamis">
					<?php
						if (!empty($dat['kamis'])){
							$i = 0;
							foreach ($dat['kamis'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[kamis][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[kamis][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_mapel'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[kamis][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[kamis][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[kamis][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[kamis][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<thead>
					<th class="left" colspan="2">JUMAT</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_jumat', 'jumat')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_jumat">
					<?php
						if (!empty($dat['jumat'])){
							$i = 0;
							foreach ($dat['jumat'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[jumat][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[jumat][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_mapel'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[jumat][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[jumat][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[jumat][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[jumat][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<thead>
					<th class="left" colspan="2">SABTU</th>
					<th class="right"><a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_sabtu', 'sabtu')">Add New<a/></th>
				</thead>
				<thead>
					<th width="200px">JAM</th>
					<th>MATA PELAJARAN</th>
					<th>GURU PENGAJAR</th>
				</thead>
				<tbody id="dat_sabtu">
					<?php
						if (!empty($dat['sabtu'])){
							$i = 0;
							foreach ($dat['sabtu'] as $r=>$k){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[sabtu][".$i."][jam] center readonly' value='".$k['jam']."'/></td>
										<td>
											<select class='postit hari[sabtu][".$i."][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[sabtu][".$i."][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
														if ($v['id'] == $k['id_guru'])
														echo " selected ";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
								$i++;
							}
						}
						else{
							for($i=0; $i<3; $i++){
								echo "<tr>
										<td><input type='text' style='width:100%' class='postit hari[sabtu][$i][jam] center readonly' value=''/></td>
										<td>
											<select class='postit hari[sabtu][$i][id_mapel] readonly' style='width:100%'>
												<option></option>";
												foreach ($pelajaran as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
										<td>
											<select class='postit hari[sabtu][$i][id_guru] readonly' style='width:100%'>
												<option></option>";
												foreach ($guru as $j=>$v){
													echo "<option value='$v[id]'";
													echo ">$v[nm]</option>";
												}
								echo		"</select>
										</td>
									 </tr>";
							}
						}
					?>
				</tbody>
				<tfoot>
					<th colspan="3">&nbsp;</th>
				</tfoot>
			</table>
			<br><br>
			<label class="long">&nbsp;</label>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="#f3021" pre="#f3011" class="easyui-linkbutton" iconCls="icon-save" title="Save" onclick="save_r(this, event, '#dkelas')">Save<a/>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="3011" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Kelas')">Back<a/>
	</fieldset>
</div>

<script type="text/javascript">
	function insertR(obj, elm){
		var table = document.getElementById(obj);
		var idx = document.getElementById(obj).rows.length;
		var row=table.insertRow(-1);
		var cell1=row.insertCell(0);
		var cell2=row.insertCell(1);
		var cell3=row.insertCell(2);
		
		cell1.innerHTML="<input type='text' style='width:100%' class='postit hari["+elm+"]["+idx+"][jam] center readonly' value=''/>";
		cell2.innerHTML="<select class='postit hari["+elm+"]["+idx+"][id_mapel] readonly' style='width:100%'><option></option>"+"<?php
							if(!empty($pelajaran)){ 
								foreach ($pelajaran as $j=>$v){
									echo "<option value='$v[id]'";
									echo ">$v[nm]</option>";
								}
							}
						?>"+"</select>";
		cell3.innerHTML="<select class='postit hari["+elm+"]["+idx+"][id_guru] readonly' style='width:100%'><option></option>"+"<?php
							if(!empty($guru)){ 
								foreach ($guru as $j=>$v){
									echo "<option value='$v[id]'";
									echo ">$v[nm]</option>";
								}
							}
						?>"+"</select>";
	}
</script>