<table class="tpmain">
	<thead>
		<tr>
			<th>NIM MAHASISWA</th>
			<th>NAMA MAHASISWA</th>
			<th>TANGGAL LAHIR</th>
			<th>AGAMA MAHASISWA</th>
			<th>NO TELEPON</th>
			<th>ALAMAT MAHASISWA</th>
			<th class="hide">NAMA AYAH</th>
			<th class="hide">PEKERJAAN AYAH</th>
			<th class="hide">NAMA IBU</th>
			<th class="hide">PEKERJAAN IBU</th>
			<th class="hide">ALAMAT ORANG TUA</th>
			<th>JENIS KELAMIN</th>
			
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
						<td class="postit NAMA_MHS" val="<?php echo $td['NAMA_MHS'];?>"><?php echo $td['NAMA_MHS'];?></td>
						<td class="postit TGL_LHR" val="<?php echo $td['TGL_LHR'];?>"><?php echo $td['TGL_LHR'];?></td>
						<td class="postit AGAMA_MHS" val="<?php echo $td['AGAMA_MHS'];?>"><?php echo $td['AGAMA_MHS'];?></td>
						<td class="postit NO_TLP" val="<?php echo $td['NO_TLP'];?>"><?php echo $td['NO_TLP'];?></td>
						<td class="postit ALAMAT_MHS" val="<?php echo $td['ALAMAT_MHS'];?>"><?php echo $td['ALAMAT_MHS'];?></td>
						<td class="postit NAMA_AYAH hide" val="<?php echo $td['NAMA_AYAH'];?>"><?php echo $td['NAMA_AYAH'];?></td>
						<td class="postit PEKERJAAN_AYAH hide" val="<?php echo $td['PEKERJAAN_AYAH'];?>"><?php echo $td['PEKERJAAN_AYAH'];?></td>
						<td class="postit NAMA_IBU hide" val="<?php echo $td['NAMA_IBU'];?>"><?php echo $td['NAMA_IBU'];?></td>
						<td class="postit PEKERJAAN_IBU hide" val="<?php echo $td['PEKERJAAN_IBU'];?>"><?php echo $td['PEKERJAAN_IBU'];?></td>
						<td class="postit ALAMAT_ORTU hide" val="<?php echo $td['ALAMAT_ORTU'];?>"><?php echo $td['ALAMAT_ORTU'];?></td>
						<td class="postit JENIS_KELAMIN" val="<?php echo $td['JENIS_KELAMIN'];?>"><?php echo $td['JENIS_KELAMIN'];?></td>
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
		<legend class="just_info ss">MAHASISWA</legend>
			<label class="ss">NIM MHS</label><input type="text" class="postit NIM_MHS wide ro pk" value=""/><br/>
			<label class="ss">NAMA MHS</label><input type="text" class="postit NAMA_MHS wide" value=""/><br/>
			<label class="ss">TANGGAL LAHIR</label><input type="text" class="postit TGL_LHR date" value=""/><br/>
			<label class="ss">AGAMA MAHASISWA</label><input type="text" class="postit AGAMA_MHS wide" value=""/><br/>
			<label class="ss">NO TELEPON</label><input type="text" class="postit NO_TLP wide" value=""/><br/>
			<label class="ss">ALAMAT MAHASISWA</label><input type="text" class="postit ALAMAT_MHS wide" value=""/><br/>
			<label class="ss">NAMA AYAH</label><input type="text" class="postit NAMA_AYAH wide" value=""/><br/>
			<label class="ss">PEKERJAAN AYAH</label><input type="text" class="postit PEKERJAAN_AYAH wide" value=""/><br/>
			<label class="ss">NAMA IBU</label><input type="text" class="postit NAMA_IBU wide" value=""/><br/>
			<label class="ss">PEKERJAAN IBU</label><input type="text" class="postit PEKERJAAN_IBU wide" value=""/><br/>
			<label class="ss">ALAMAT ORANG TUA</label><input type="text" class="postit ALAMAT_ORTU wide" value=""/><br/>
			<label class="ss">JENIS KELAMIN</label><select class="postit JENIS_KELAMIN">
				<option></option>
				<option value="L">L</option>
				<option value="P">P</option>
			</select><br/></fieldset>
	</form>
</div>