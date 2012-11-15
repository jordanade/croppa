<?php return array(
	
	// Directories to search for source files
	'src_dirs' => array(
		path('public'),
	),
	
	// Maximum number of sizes to allow for a particular
	// source file.  This is to limit scripts from filling
	// up your hard drive with images.  Set to 0 or comment
	// out to have no limit.
	'max_crops' => 6,
	
	// Set this to the name of a directory that will be created
	// in the image source directory that will contain all of the
	// crops that croppa creates
	'group_crops_in_dir' => false,
);