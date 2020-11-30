<table class="tpmain">
	<thead>
		<tr>
			<th class="hide">ID DOSEN</th>
			<th>NAMA DOSEN</th>
			<th>NIP</th>
			<th>TANGGAL LAHIR</th>
			<th>AGAMA</th>
			<th>JENIS KELAMIN</th>
			<th class="hide">NO TELP</th>
			<th>ALAMAT</th>
			
			<th width="50" class="center nsort">DETAIL</th>
			<th width="70" class="center nsort">.::.</th>
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="postit ID_DOSEN pk hide" val="<?php echo $td['ID_DOSEN'];?>"><?php echo $td['ID_DOSEN'];?></td>
						<td class="postit NAMA_DOSEN" val="<?php echo $td['NAMA_DOSEN'];?>"><?php echo $td['NAMA_DOSEN'];?></td>
						<td class="postit NIP" val="<?php echo $td['NIP'];?>"><?php echo $td['NIP'];?></td>
						<td class="postit TGL_LAHIR" val="<?php echo $td['TGL_LAHIR'];?>"><?php echo $td['TGL_LAHIR'];?></td>
						<td class="postit AGAMA" val="<?php echo $td['AGAMA'];?>"><?php echo $td['AGAMA'];?></td>
						<td class="postit JK" val="<?php echo $td['JK'];?>"><?php echo $td['JK'];?></td>
						<td class="postit NO_TELEPON hide" val="<?php echo $td['NO_TELEPON'];?>"><?php echo $td['NO_TELEPON'];?></td>
						<td class="postit ALAMAT" val="<?php echo $td['ALAMAT'];?>"><?php echo $td['ALAMAT'];?></td>
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
		<legend class="just_info ss">Dosen</legend>
			<label class="ss">ID DOSEN</label><input type="text" class="postit ID_DOSEN wide ro pk" value=""/><br/>
			<label class="ss">NAMA DOSEN</label><input type="text" class="postit NAMA_DOSEN wide" value=""/><br/>
			<label class="ss">NIP</label><input type="text" class="postit NIP wide" value=""/><br/>
			<label class="ss">TGL_LAHIR</label><input type="text" class="postit TGL_LAHIR date" value=""/><br/>
			<label class="ss">AGAMA</label><input type="text" class="postit AGAMA wide" value=""/><br/>
			<label class="ss">JK</label><select class="postit JK">
				<option></option>
				<option value="L">L</option>
				<option value="P">P</option>
			</select><br/>
			<label class="ss">NO TELEPON</label><input type="text" class="postit NO_TELEPON wide" value=""/><br/>
			<label class="ss">ALAMAT</label><input type="text" class="postit ALAMAT wide" value=""/><br/>
		</fieldset>
	</form>
</div>