/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        config.filebrowserBrowseUrl = '/project_travel_test/public/ckeditor/elfinder/elfinder.html';
        config.filebrowserImageBrowseUrl = '/project_travel_test/public/ckeditor/elfinder/elfinder.html';
        //config.filebrowserFlashBrowseUrl = '/pathToElfinder/elfinder.html?mode=flash';
        config.filebrowserWindowHeight = 520;
        config.filebrowserWindowWidth = 800;

        // remove resize able:
        config.removePlugins = 'elementspath';
        config.resize_enabled = false;
        //config.removeButtons = 'Underline';
        //neu dung full --> khong can set toolbar
        //config.toolbar = 'SmallToolbar';

//	config.toolbar_SmallToolbar =
//	[
//                { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','-','RemoveFormat' ] },
//		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
//		{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
//		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
//		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
//	];

};
