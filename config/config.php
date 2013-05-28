<?php

/**
 * AjaxJsonResponse
 * Contao extension to enable JSON response on AJAX requests
 *
 * @copyright  Armin Dressler
 * @author     Armin Dressler <dressler.armin at gmail.com>
 * @package    AjaxJsonResponse
 * @license    http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @filesource
 * @see https://github.com/adressler/contao-ajax_json_response
 */

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('AjaxJsonResponse', 'onGetPageLayout');
