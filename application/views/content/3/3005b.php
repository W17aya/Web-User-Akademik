<table class="tpmain">
	<thead>
		<tr>
			<th>ID MATKUL</th>
			<th>NAMA </th>
			<th>SKS </th>
			<th>SEMESTER </th>
			
			<th width="50" class="center nsort">DETAIL</th>
			<th width="70" class="center nsort">.::.</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit ID_MATKUL pk" val="<?php echo $td['ID_MATKUL'];?>"><?php echo $td['ID_MATKUL'];?></td>
						<td class="postit NAMA_MATAKULIAH" val="<?php echo $td['NAMA_MATAKULIAH'];?>"><?php echo $td['NAMA_MATAKULIAH'];?></td>
						<td class="postit SKS_MATKUL" val="<?php echo $td['SKS_MATKUL'];?>"><?php echo $td['SKS_MATKUL'];?></td>
						<td class="postit SEMESTER" val="<?php echo $td['SEMESTER'];?>"><?php echo $td['SEMESTER'];?></td>
						
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
		<legend class="just_info ss">MATA KULIAH</legend>
			<label class="ss">ID MATKUL</label><input type="text" class="postit ID_MATKUL wide ro pk" value=""/><br/>
			<label class="ss">NAMA MATA KULIAH</label><input type="text" class="postit NAMA_MATAKULIAH wide" value=""/><br/>
			<label class="ss">SKS MATA KULIAH</label><input type="text" class="postit SKS_MATKUL wide" value=""/><br/>
			<label class="ss">SEMESTER</label><input type="text" class="postit SEMESTER wide" value=""/><br/>
	</form>
</div>