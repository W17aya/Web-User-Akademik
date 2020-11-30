<table class="tpmain">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th class="hide">NAMA KELAS</th>
			<th>NAMA KELAS</th>
			<th width="150">KELAS</th>
			<th>WALI KELAS</th>
			<th width="100" class="center nsort">DATA SISWA</th>
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
						<td class="postit id_tahun center" val="<?php echo $td['id_tahun'];?>"><?php echo $i;?></td>
						<td class="postit id_kelas pk hide" val="<?php echo $td['id_kelas'];?>"><?php echo $td['id_kelas'];?></td>
						<td class="postit nama_kelas" val="<?php echo $td['nama_kelas'];?>"><?php echo $td['nama_kelas'];?></td>
						<td class="postit kelas center" val="<?php echo $td['kelas'];?>"><?php echo $td['kelas'];?></td>
						<td class="postit id_guru" val="<?php echo $td['id_guru'];?>"><?php echo $td['nama_guru'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="1024" class="upd" title="Detail" onclick="change_page(this, event, 'Data Kelas')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="update" class="upd" title="Edit" onclick="tr2dform(this, event, 'Edit')"><a/>
							<a href="#f<?php echo $menu;?>" rel="delete" class="del" title="Delete" onclick="delete_r(this, event)"><a/>
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
			<th class="right" colspan="6"><a href="#f<?php echo $menu;?>" rel="create" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="tr2dform(this, event, 'Add New')">Add New<a/></th>
		</tr>
	</tfoot>
</table>

<div id="<?php echo 'f'.$menu?>" class="hide">
	<form class="ss">
		<fieldset class="ss">
		<legend class="just_add ss">Add New</legend>
		<legend class="just_upd ss">Edit</legend>
		<legend class="just_info ss">Class</legend>
			<input type="text" class="postit id_tahun im hide" value="<?php echo $tahun;?>"/>
			<input type="text" class="postit id_kelas wide pk hide" value=""/>
			<label class="ss">Nama Kelas</label><input type="text" class="postit nama_kelas wide" value=""/><br/>
			<label class="ss">Kelas</label><select class="postit kelas">
				<option value="">Please Select</option>
				<?php
					if ($kelas){
						foreach ($kelas as $r => $k){
							echo "<option value='$k[id]'>$k[nm]</option>";
						}
					}
				?>
			</select><br/>
			<label class="ss">Wali Kelas</label><select class="postit id_guru">
				<option value="">Please Select</option>
				<?php
					if ($guru){
						foreach ($guru as $r => $k){
							echo "<option value='$k[id]'>$k[nm]</option>";
						}
					}
				?>
			</select><br/>
		</fieldset>
	</form>
</div>
<br><br><br>
<!--div class="right">
	<a href="#" rel="1004" class="easyui-linkbutton" iconCls="icon-back" title="Back" onclick="go_back(this, event, 'Kelas')">Back<a/>
	<label class="short">&nbsp;</label>
</div-->