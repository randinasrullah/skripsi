<h3>Ubah Bahan</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Nama Bahan</label>
		<input type="text" name="nama_bahan" class="form-control" value="<?php if(!set_value("nama_bahan")){echo $bahan['nama_bahan'];} else {echo set_value("nama_bahan");} ?>">
		<p><small class="text-danger"><i><?php echo form_error("nama_bahan") ?></i></small></p>
	</div>
	<div class="form-group">
		<label>Stok Minimal</label>
		<input type="text" name="minimal_stok" class="form-control" value="<?php if(!set_value("minimal_stok")){echo $bahan['minimal_stok'];} else {echo set_value("minimal_stok");} ?>">
		<p><small class="text-danger"><i><?php echo form_error("minimal_stok") ?></i></small></p>

		<div class="form-group">
		<label>Masa Kadaluarsa</label>
		<input type="text" name="masa_kadaluarsa" class="form-control" value="<?php if(!set_value("masa_kadaluarsa")){echo $bahan['masa_kadaluarsa'];} else {echo set_value("masa_kadaluarsa");} ?>">
		<p><small class="text-danger"><i><?php echo form_error("minimal_stok") ?></i></small></p>
	</div>
	<div class="form-groupf">
		<label>Satuan Bahan</label>
		<select name="satuan_bahan" class="form-control">
			<option value="">Pilih Status</option>
			<option value="kg" <?php if($bahan['satuan_bahan']==="kg"){echo "selected";} ?>>kg</option>
			<option value="gr" <?php if($bahan['satuan_bahan']==="gr"){echo "selected";} ?>>gr</option>
			<option value="liter" <?php if($bahan['satuan_bahan']==="liter"){echo "selected";} ?>>liter</option>
		</select>
	</div>
	<br>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
		<a href="<?php echo base_url("kepala/bahan") ?>" class="btn btn-warning" onclick="return confirm('Anda Yakin kembali ke halaman Tabel Bahan ?')">Kembali</a>

	</div>
</form>