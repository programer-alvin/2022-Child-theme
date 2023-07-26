<?php
add_action( 'init', function() {
	register_post_type( 'book', array(
	'labels' => array(
		'name' => 'Books',
		'singular_name' => 'Book',
		'menu_name' => 'Books',
		'all_items' => 'All Books',
		'edit_item' => 'Edit Book',
		'view_item' => 'View Book',
		'view_items' => 'View Books',
		'add_new_item' => 'Add New Book',
		'new_item' => 'New Book',
		'parent_item_colon' => 'Parent Book:',
		'search_items' => 'Search Books',
		'not_found' => 'No books found',
		'not_found_in_trash' => 'No books found in Trash',
		'archives' => 'Book Archives',
		'attributes' => 'Book Attributes',
		'insert_into_item' => 'Insert into book',
		'uploaded_to_this_item' => 'Uploaded to this book',
		'filter_items_list' => 'Filter books list',
		'filter_by_date' => 'Filter books by date',
		'items_list_navigation' => 'Books list navigation',
		'items_list' => 'Books list',
		'item_published' => 'Book published.',
		'item_published_privately' => 'Book published privately.',
		'item_reverted_to_draft' => 'Book reverted to draft.',
		'item_scheduled' => 'Book scheduled.',
		'item_updated' => 'Book updated.',
		'item_link' => 'Book Link',
		'item_link_description' => 'A link to a book.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'book-type',
	),
	'has_archive' => true,
	'rewrite' => false,
	'delete_with_user' => false,
) );
} );

