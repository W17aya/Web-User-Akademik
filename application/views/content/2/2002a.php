<table class="tpmain">
	<thead>
		<tr>
			<th>NIM MAHASISWA</th>
			<th>NAMA MAHASISWA</th>
			<th>NAMA MATAKULIAH</th>
			<th>NILAI</th>
			<!--th>.::.</th-->
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
			<tr>
				<td class="NIM_MHS"><?php echo $td['NIM_MHS'];?></td>
				<td class="NAMA_MHS"><?php echo $td['NAMA_MHS'];?></td>
				<td class="NAMA_MATAKULIAH"><?php echo $td['NAMA_MATAKULIAH'];?></td>
				<td class="NILAI"><?php echo $td['NILAI'];?></td>
				
				<!--td class="center"><a href="#f<?php echo $menu;?>" rel="update" class="easyui-linkbutton" plain="true" iconCls="icon-edit" title="Edit" onclick="tr2dform(this, event, 'Edit')"><a/></td-->
			</tr>
				<!--?php }?-->
			<?php }?>
		<?php }?>
	</tbody>
</table>

