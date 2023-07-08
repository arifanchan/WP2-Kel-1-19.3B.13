<div class="form-group">
    		<label>Nama</label>
    		<input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
    		<input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
    		<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
    		<?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Alamat</label>
    		<input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
    		<?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
    	</div>