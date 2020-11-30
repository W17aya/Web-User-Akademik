<div id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas['nama_kelas'];?></legend>
			<input class="postit id_kelas hide" value="<?php echo $kelas['id_kelas'];?>"/>
			<table class="excel">
				<thead>
					<th width="140px">NIS
					</th>
					<th>NAMA
					</th>
					<!--th width="1px">
					</th-->
				</thead>
				<tbody id="dat_siswa">
					<?php
						if (!empty($dat)){
							$i = 0;
							foreach ($dat as $r=>$k){
								echo "<tr>";
								echo "<td><input type='text' style='width:100%; padding:0;' class='postit nis[".$i."] center readonly' value='".$k['nis']."' onblur='set_name(this)'/></td>";
								echo "<td><label style='padding: 0 10px'></label>".$k['nama_siswa']."</td>";
								// echo "<td><input type='text' style='width:100%' class='postit old[".$i."] center readonly hide' value='".$k['nis']."'/></td>";
								echo "</tr>";
								$i++;
							}
						}
						else{
						echo "<tr>
									<td><input type='text' style='width:100%; padding:0;' class='postit nis[0] center readonly' value='' onblur='set_name(this)'/></td>
									<td><label style='padding: 0 10px'></label></td>
							  </tr>";}
									// <td><input type='text' style='width:100%' class='postit old[0] center readonly hide' value=''/></td>
					?>
				</tbody>
				<tfoot>
					<tr>
						<th class="right" colspan="2"><a href="#" rel="create" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="insertR('dat_siswa')">Add New<a/></th>
						<!--th ></th-->
					</tr>
				</tfoot>
			</table>
			<br><br>
			<label class="long">&nbsp;</label>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="#f1024" pre="#f1014" class="easyui-linkbutton" iconCls="icon-save" title="Save" onclick="save_r(this, event, '#dkelas')">Save<a/>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="1014" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Kelas')">Back<a/>
	</fieldset>
</div>

<script type="text/javascript">
	function insertR(obj){
		var table = document.getElementById(obj);
		var idx = document.getElementById(obj).rows.length;
		var row=table.insertRow(-1);
		var cell1=row.insertCell(0);
		var cell2=row.insertCell(1);
		// var cell3=row.insertCell(2);
		
		cell1.innerHTML="<input type='text' style='width:100%; padding:0;' class='postit nis["+idx+"] center readonly' value='' onblur='set_name(this)'/>";
		cell2.innerHTML="<label style='padding: 0 10px'></label>";
		// cell3.innerHTML="<input type='text' style='width:100%' class='postit old["+idx+"] center readonly hide' value=''/>";
	}
</script>