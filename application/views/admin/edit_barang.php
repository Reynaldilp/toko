<div class="container-fluid"> 
    <h3><i class="fas fa-edit"></i> EDIT DATA </h3>

<?php foreach ($barang as $brg) :  ?>

<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">

	<div class="for-group">
		<label>Kategori</label>
		<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
		<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
	</div>

	<div class="for-group">
		<label>Ukuran</label>
		<input type="text" name="ukuran" class="form-control" value="<?php echo $brg->ukuran ?>">
	</div>

	<div class="for-group">
		<label>Keterangan</label>
		<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
	</div>

	<div class="for-group">
		<label>Harga</label>
		<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
	</div>
	
	<button type="submit" class="btn btn-primary btn-sm mt-4">SIMPAN</button>

</form>


<?php endforeach; ?>
	
</div>