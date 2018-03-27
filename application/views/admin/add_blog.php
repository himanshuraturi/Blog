<?php include_once('admin_header.php'); ?>

<div class="container">
	<?php echo form_open('admin/store_blog', ['class'=>'form-horizontal']); ?>
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
 	 <fieldset>
    	<legend>Add Blog</legend>

    	<div class="form-group row">
    		  <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
      		  <div class="col-sm-10">
      		  <?php echo form_input(['name'=>'title', 'class'=>'form-control', 'placeholder'=>'title', 'value'=>set_value('title')]); ?>
        		<!--<input type="text"  class="form-control" id="staticEmail" value="email@example.com"> -->
     		 </div>
    	</div>
    	<div class="form-group row">
    	 	 <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Blog Body</label>
     	  	<div class="col-sm-10">
     	  		<?php echo form_textarea(['name'=>'body', 'class'=>'form-control', 'placeholder'=>'body', 'value'=>set_value('body')]); ?>
     			<!--- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
      	 	 </div>
    	</div>
    	<div class="form-group">
    		<div class="col-lg-10 col-lg-offset-2">
    			<?php
    				echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
    					form_submit(['name'=>'submit','value'=>'SUBMIT','class'=>'btn btn-primary']);
    			?>
    		</div>
    	</div>
  	</fieldset>
	</form>
</div>

<?php include_once('admin_footer.php'); ?>