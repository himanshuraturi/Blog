<?php include('public_header.php'); ?>

<div class="container">
	
	<?php echo form_open('login/admin_login', ['class'=>'form-horizontal']); ?>
 	 <fieldset>
    	<legend>Admin Login</legend>

    	<?php if($error = $this->session->flashdata('login_failed')): ?>
    	<div class="row">
			<div clas="col-lg-10">
				<div class="alert alert-dismissible alert-danger">
					<?= $error ?>
				</div>
			</div>    		
    	</div>
    <?php endif; ?>

    	<div class="form-group row">
    		  <label for="staticEmail" class="col-sm-2 col-form-label">User Name</label>
      		  <div class="col-sm-10">
      		  <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'Username', 'value'=>set_value('username')]); ?>
        		<!--<input type="text"  class="form-control" id="staticEmail" value="email@example.com"> -->
     		 </div>
    	</div>
    	<div class="form-group row">
    	 	 <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
     	  	<div class="col-sm-10">
     	  		<?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password']); ?>
     			<!--- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
      	 	 </div>
    	</div>
    	<div class="form-group">
    		<div class="col-lg-10 col-lg-offset-2">
    			<?php
    				echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
    					form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);
    			?>
    		</div>
    	</div>
  	</fieldset>
	</form>
</div>
<?php
	echo validation_errors();
?>

<?php include('public_footer.php'); ?>