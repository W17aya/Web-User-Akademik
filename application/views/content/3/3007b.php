<table class="tpmain">
	<thead>
		<tr>
			<th>ID MENGAJAR</th>
			<th>ID DOSEN</th>
			<th>ID MATKUL</th>
			<th class="hide">NAMA MATKUL</th>
			
			<th width="50" class="center nsort">DETAIL</th>
			<th width="70" class="center nsort">.::.</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit ID_MENGAJAR pk" val="<?php echo $td['ID_MENGAJAR'];?>"><?php echo $td['ID_MENGAJAR'];?></td>
						<td class="postit ID_DOSEN" val="<?php echo $td['ID_DOSEN'];?>"><?php echo $td['ID_DOSEN'];?></td>
						<td class="postit ID_MATKUL" val="<?php echo $td['ID_MATKUL'];?>"><?php echo $td['ID_MATKUL'];?></td>
						<td class="postit NAMA_MATAKULIAH hide" val="<?php echo $td['NAMA_MATAKULIAH'];?>"><?php echo $td['NAMA_MATAKULIAH'];?></td>
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
		<legend class="just_info ss">JADWAL MENGAJAR</legend>
			<label class="ss">ID MENGAJAR</label><input type="text" class="postit ID_MENGAJAR wide ro pk" value=""/><br/>
			<label class="ss">ID DOSEN</label><input type="text" class="postit ID_DOSEN wide ro" value=""/><br/>
			<label class="ss">ID MATKUL</label><input type="text" class="postit ID_MATKUL wide" value=""/><br/>
			</form>
</div>