<div id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas;?></legend>
			<input class="postit kelas hide" value="<?php echo $kelas;?>"/>
			<table class="excel">
				<thead>
					<th width="32">NO
					</th>
					<th class="hide">KODE
					</th>
					<th>MATA PELAJARAN
					</th>
					<th width="120px">KKM
					</th>
				</thead>
				<tbody id="dat_mapel">
					<?php
						if (!empty($dat)){
							$i = 0;
							foreach ($dat as $r=>$k){
								echo "<tr>";
								echo "<td class='center'>".($i+1)."</td>";
								echo "<td class='hide'><input type='text' style='width:100%' class='postit id_mapel[".$i."] readonly' value='".$k['id_mapel']."'/></td>";
								echo "<td style='padding: 0 10px'>".$k['nama_pelajaran']."</td>";
								echo "<td><input type='text' style='width:100%; text-align:center' class='postit kkm[".$i."] readonly' value='".$k['nilai_standar']."'/></td>";
								echo "</tr>";
								$i++;
							}
						}
						else{
							echo "<tr>
									<td colspan='4'>&nbsp;</td>
								  </tr>";
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th class="right" colspan="4">&nbsp;</th>
					</tr>
				</tfoot>
			</table>
			<br><br>
			<label class="long">&nbsp;</label>
			<label class="ss">&nbsp;</label>
			<a href="#dkelas" rel="#f1016" pre="#f1006" class="easyui-linkbutton" iconCls="icon-save" title="Save" onclick="save_r(this, event, '#dkelas')">Save<a/>
			<label class="ss">&nbsp;</label>
			<a href="#" rel="1006" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Kelas')">Back<a/>
	</fieldset>
</div>

<script type="text/javascript">
	function insertR(obj){
		var table = document.getElementById(obj);
		var idx = document.getElementById(obj).rows.length;
		var row=table.insertRow(-1);
		var cell1=row.insertCell(0);
		var cell2=row.insertCell(1);
		
		cell1.innerHTML="<input type='text' style='width:100%' class='postit nis["+idx+"] readonly' value='' autocomplete='off' role='textbox' aria-autocomplete='list' aria-haspopup='true'/>";
		cell2.innerHTML="<label class='nama_siswa["+idx+"]'></label>";
	}
</script>