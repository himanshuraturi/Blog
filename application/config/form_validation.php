<?php

$config = [
			
			'add_blog_rules' =>	[
											[
													'field'=> 'title',
													'label'=> 'Title',
													'rules'=> 'required'
											],
											[
													'field'=> 'body',
													'label'=> 'Blog Body',
													'rules'=> 'required'
											]
								],

			'admin_login' =>[
											[
												'field'=>'username',
												'label'=>'User Name',
												'rules'=>'required|alpha'
											],
											[
												'field'=>'password',
												'label'=>'Password',
												'rules'=>'required'
											]
							]
];

?>