<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Slashworks\Classes\Form\Validator\MyAddCustomRegexp' => 'system/modules/myAddCustomRegexp/classes/form/vaildator/MyAddCustomRegexp.php',
));
