<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package AjaxJsonResponse
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'AjaxJsonResponse' => 'system/modules/AjaxJsonResponse/AjaxJsonResponse.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'fe_page.json' => 'system/modules/AjaxJsonResponse/templates',
));
