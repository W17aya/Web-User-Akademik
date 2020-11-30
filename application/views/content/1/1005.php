<table class="tpmain">
	<thead>
		<tr>
			<th width="32">NO</th>
			<th width="100">KODE</th>
			<th>NAMA PELAJARAN</th>
			<th width="50" class="center nsort">DETAIL</th>
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
						<td class="center"><?php echo $i;?></td>
						<td class="postit id_mapel pk" val="<?php echo $td['id_mapel'];?>"><?php echo $td['id_mapel'];?></td>
						<td class="postit nama_pelajaran" val="<?php echo $td['nama_pelajaran'];?>"><?php echo $td['nama_pelajaran'];?></td>
						<td class="center">
							<a href="#f<?php echo $menu;?>" rel="detail" class="info" title="Detail" onclick=""><a/>
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
			<th class="right" colspan="5"><a href="#f<?php echo $menu;?>" rel="create" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="tr2dform(this, event, 'Add New')">Add New<a/></th>
		</tr>
	</tfoot>
</table>

<div id="<?php echo 'f'.$menu?>" class="hide">
	<form class="ss">
		<fieldset class="ss">
		<legend class="just_add ss">Add New</legend>
		<legend class="just_upd ss">Edit</legend>
		<legend class="just_info ss">Lesson</legend>
			<label class="ss">Kode Pelajaran</label><input type="text" class="postit id_mapel pk ro" value=""/><br/>
			<label class="ss">Mata Pelajaran</label><input type="text" class="postit nama_pelajaran wide" value=""/><br/>
		</fieldset><br>
	</form>
</div>