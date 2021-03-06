<?php include('public_header.php'); ?>
<div class="container">
	<h1>BLOGS</h1>
	<hr>
	<table class="table">
		<tr>
			<td>Sr. No.</td>
			<td>Blog Title</td>
		</tr>
		<tr>
			<?php if( count($blogs)): 
			  $count = $this->uri->segment(3,0); 
				 foreach($blogs as $blog ): ?>
					
							<td><?= ++$count ?></td>
							<td><?= anchor("user/blog/{$blog->id}",$blog->title) ?></td>
							
					</tr>
			<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="3">No records found.</td>
		</tr>
	<?php endif; ?>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>

<?php include('public_footer.php'); ?>