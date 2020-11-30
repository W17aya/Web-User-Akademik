<table class="tpmain">
	<thead>
		<tr>
			<th>NIM MHS</th>
			<th>ID MATA KULIAH</th>
			<th>NAMA MATA KULIAH</th>
			<th>NILAI</th>
			
			<th width="50" class="center nsort">DETAIL</th>
			<th width="70" class="center nsort">.::.</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit NIM_MHS pk" val="<?php echo $td['NIM_MHS'];?>"><?php echo $td['NIM_MHS'];?></td>
						<td class="postit ID_MATKUL" val="<?php echo $td['ID_MATKUL'];?>"><?php echo $td['ID_MATKUL'];?></td>
						<td class="postit NAMA_MATAKULIAH" val="<?php echo $td['NAMA_MATAKULIAH'];?>"><?php echo $td['NAMA_MATAKULIAH'];?></td>
						<td class="postit NILAI" val="<?php echo $td['NILAI'];?>"><?php echo $td['NILAI'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="detail" class="info" title="Detail" onclick="tr2dform2(this, event, 'Detail')"><a/>
						</td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="update" class="upd" title="Edit" onclick="tr2dform(this, event, 'Edit')"><a/>
							<a href="#f<?php echo $menu;?>" rel="delete" class="del" title="Delete" onclick="delete_r(this, event)"><a/>
						</td>
					</tr>
				<!--?php }?-->
			<?php }?>
		<?php }?>
	</tbody>
	<tfoot>
		<tr>
			<th class="right" colspan="18"><a href="#f<?php echo $menu;?>" rel="create" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="tr2dform(this, event, 'Add New')">Add New<a/></th>
		</tr>
	</tfoot>
</table>

<div id="<?php echo 'f'.$menu?>" class="hide">
	<form class="ss">
		<fieldset class="ss">
		<legend class="just_add ss">Add New</legend>
		<legend class="just_upd ss">Edit</legend>
		<legend class="just_info ss">NILAI</legend>
			<label class="ss">NIM MHS</label><input type="text" class="postit NIM_MHS wide ro pk" value=""/><br/>
			<label class="ss">ID MATKUL</label><input type="text" class="postit ID_MATKUL ro wide" value=""/><br/>
			<label class="ss">NILAI</label><select class="postit NILAI">
				<option></option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
			</select><br/></fieldset>
	</form>
</div>