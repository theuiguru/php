<?php
function directoryReader($directory, array $excludeFiles = ['.', '..', '.DS_Store']) {
	$files = [];

	if(!is_dir($directory)) {
		return null;
	}

	if(!($filesDirectory = opendir($directory))) {
		return null;
	}

	while(($file = readdir($filesDirectory)) !== false) {
		if(in_array($file, $excludeFiles)) {
			continue;
		}
		$files[] = $directory . '/' . $file;
	}

	closedir($filesDirectory);

	return $files;

	// loop through files
	// do some checks
	// add to $images
	// return $images
}