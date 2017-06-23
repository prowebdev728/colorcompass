<?php include 'views/admin/header.php'; ?>
<div id="edit_user" class="small-8 small-centered fill">
	<h2>Edit News Article</h2>
	<form action="<?=$appurl.'/news/edit';?>" method="post" class="cmsxform">
		<?=$errMsg;?>
		<label for="slug">Page URL:<br>
			<span>
				<input name="data[url]" type="text" id="url" value="<?=$data['url'];?>" class="input-8 inline-block">
			</span>
			<span>
				<button class="button small">Generate Page URL</button>
			</span>
		</label>
		<label for="title">Title:
			<input name="data[title]" type="text" id="title" value="<?=$data['title'];?>">
		</label>
		<label for="title">Status:<br>
			<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status'], 'class="input-3"');?>
		</label>
		<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
		<input type="submit" name="save" id="save" value="Save Now" class="button">
		<textarea name="data[content]" id="edit1" rows="10" cols="80"><?=$data['content'];?></textarea>
		<script>

			CKEDITOR.replace( 'edit1', {
// Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar
		// The standard preset from CDN which we used as a base provides more features than we need.
		// Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
		toolbar: [
			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt', 'Source' ] }
		],
		// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
		// One HTTP request less will result in a faster startup time.
		// For more information check http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-customConfig
		customConfig: '',
		// Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all
		//extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',
		extraPlugins: 'sourcearea,autoembed,embedsemantic,image2,uploadimage,uploadfile',
		/*********************** File management support ***********************/
		// In order to turn on support for file uploads, CKEditor has to be configured to use some server side
		// solution with file upload/management capabilities, like for example CKFinder.
		// For more information see http://docs.ckeditor.com/#!/guide/dev_ckfinder_integration
		// Uncomment and correct these lines after you setup your local CKFinder instance.
		filebrowserBrowseUrl: '/kcfinder/browse.php',
		// filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		/*********************** File management support ***********************/
		// Remove the default image plugin because image2, which offers captions for images, was enabled above.
		removePlugins: 'image',
		// Make the editing area bigger than default.
		height: 461,
		// An array of stylesheets to style the WYSIWYG area.
		// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
		contentsCss: [ '/css/foundation.min.css', '/css/styles.css' ],
		// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
		bodyClass: 'row news',
		// Reduce the list of block elements listed in the Format dropdown to the most commonly used.
		format_tags: 'p;h1;h2;h3;h4;h5;div',
		// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
		removeDialogTabs: 'image:advanced;link:advanced',
		// Define the list of styles which should be available in the Styles dropdown list.
		// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
		// (and on your website so that it rendered in the same way).
		// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
		// that file, which means one HTTP request less (and a faster startup).
		// For more information see http://docs.ckeditor.com/#!/guide/dev_styles
		stylesSet: [
			/* Inline Styles */
			{ name: 'Image Right',		element: 'div', attributes: { 'class': 'image text-center' } },
			{ name: '3 Up Group',		element: 'div', attributes: { 'class': 'row small-up-1 medium-up-3 text-center' } },
			{ name: '4 Up Group',		element: 'div', attributes: { 'class': 'row small-up-2 medium-up-4 padded-top' } },
			{ name: 'Group Items',		element: 'div', attributes: { 'class': 'column padded-vertical' } },

		]
		} );

		</script>
	</form>
</div>
<?php include 'views/admin/footer.php'; ?>
