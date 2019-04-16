<?php

return [
	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permissions',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'permission' => 'Permissions',
		],
	],
	'content-management' => [
		'title' => 'Content Management',
		'topic' => 'Topic',
		'content' => 'Content',
		'content_list' => 'List Content',
		'content_add' => 'Add Content'
	], 
	'theme' => [
		'title' => 'Topic Management',
		'name' => 'Theme list'
	],
	'content' => [
		'title' => 'Content',
		'topic' => 'Topic',
		'price' => 'Price',
		'user_name' => 'Own user name'
	],
	'device-management' => [
		'title' => 'Device Management',
		'device_list' => 'List Device',
		'device_add' => 'Add List'
	],
	'order-management' => [
		'title' => 'Order Management',
		'order_list' => 'List Order',
	],
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'roles' => 'Roles',
			'remember-token' => 'Remember token',
		],
	],

	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
	'app_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'app_download' => 'Download',
	'global_title' => 'SmartVR',
];