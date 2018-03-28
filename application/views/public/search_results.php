<?php include('public_header.php'); ?>
<div class="container">
	<h1>Search reults</h1>
	<hr>
	<table class="table">
		<tr>
			<td>Sr. No.</td>
			<td>Blog Title</td>
			<td>Published On</td>
		</tr>
			<?php if( count($blogs)): 
			  $count = $this->uri->segment(4,0); 
				 foreach($blogs as $blog ): ?>
					<tr>
							<td><?= ++$count ?></td>
							<td><?= $blog->title ?></td>
							<td><?= "Date" ?></td>
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