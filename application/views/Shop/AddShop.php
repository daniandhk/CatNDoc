<div class="container">
  <h2>Tambah Produk</h2> <hr>
 <?= form_open('produk/AddShop') ?>
 <div class="form-group"> 
  <?= form_label('Nama Produk') ?> 
  <?= form_input(['name'=>'nama_produk', 'class'=>'form-control', 'required'=>'requized']) ?>
 </div> 
 <div class="form-group"> 
  <?= form_label('Deskripsi') ?> 
  <?= form_textarea(['name'=>'deskripsi', 'class'=>'form-control', 'rows'=>'4', 'required'=>'required']) ?>
 </div> 
 <div class="form-group"> 
  <?= form_label('Harga') ?> 
  <?= form_input(['name'=>'harga', 'class'=>'form-control', 'type'=>'number', 'reguired'=>'required']) ?>
 </div> 
 <div class="form-group"> 
  <a href="<?= site_url('product') ?>" class="btn btn-success">Back</a> 
  <?= form_reset(['value'=>'Reset', 'class'=>'btn btn-info']) ?> 
  <?= form_submit('submit','Submit',['class'=>'btn btn-primary']) ?>
 </div> 
 <?= form_close() ?>
</div>