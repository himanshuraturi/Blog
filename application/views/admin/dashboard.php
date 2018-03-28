<?php include_once('admin_header.php'); ?>

<div class="container">
	<br>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
		<?= anchor('admin/store_blog','Add blog',['class'=>'btn btn-lg btn-primary']) ?>
			<!--<a href="" class="btn btn-lg btn-primary">Add blog</a> -->
		</div>
	</div>
	<?php if( $feedback = $this->session->flashdata('feedback')):
		$feedback_class = $this->session->flashdata('feedback_class'); 
	?>
	<div class="row">
		<div class="col-lg-6">
			<div class="alert alert-dismissible <?= $feedback_class ?>">
				<?= $feedback ?>
			</div>
		</div>
	</div>
<?php endif; ?>
	<div class="table">
		<table>
			<tr>
				<td>Sr. No.</td>
				<td>Title</td>
				<td>Action</td>
			</tr>
			<?php if( count($blogs) ): 
				$count = $this->uri->segment(3, 0);
					foreach($blogs as $blog): ?>
					<tr>
						<td><?= ++$count ?></td>
						<td>
							<?= $blog->title ?>
						</td>
						<td>
							<div class="row">
								<div class="col-lg-5">
									<?= anchor("admin/edit_blog/{$blog->id}",'Edit',['class'=>'btn btn-primary']); ?>
								</div>
								<div class="col-lg-5">
									<?=
								form_open('admin/delete_blog'),
								form_hidden('blog_id', $blog->id),
								form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
								form_close();
							?>
								</div>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">No records found</td>
				</tr>
				<?php endif; ?>
		</table>
		<?= $this->pagination->create_links(); ?>
	</div>
</div>

<?php include_once('admin_footer.php'); ?>