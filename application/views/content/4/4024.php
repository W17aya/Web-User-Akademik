<form id="dkelas">
	<fieldset class="ss">
		<legend class="ss">Kelas <?php echo $kelas['nama_kelas']." / ".$semester;?></legend>
		<input class="postit id_kelas hide" value="<?php echo $kelas['id_kelas'];?>"/>
		<input class="postit semester hide" value="<?php echo $semester;?>"/>
		<label class="short">Bulan</label><select class="postit bulan" style="width:200px">
			<?php
				$m = getdate();
				foreach($bulan as $r=>$k){
					if ($k['id'] == $m['mon']){
						echo "<option value='$k[id]' selected>$k[nm]</option>";
					} else {
						echo "<option value='$k[id]'>$k[nm]</option>";
					}
				}
			?>
			</select>
		<label class="short">&nbsp;</label>
		<label class="short">Tahun</label><select class="postit tahun" style="width:200px">
			<?php
				$y = getdate();
				foreach($tahun as $r=>$k){
					if ($k['id'] == $y['year']){
						echo "<option value='$k[id]' selected>$k[nm]</option>";
					} else {
						echo "<option value='$k[id]'>$k[nm]</option>";
					}
				}
			?>
			</select>
		<a href="#" rel='get_absen/4/4034' class="easyui-linkbutton" iconCls="icon-ok" title="Ok" onclick="get_page(this, event, '#dabsen')">Ok<a/>
		<br><br><br>
		<div id="dabsen">
		</div>
	
	</fieldset>
</form>
