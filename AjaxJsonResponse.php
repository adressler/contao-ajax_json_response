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

class AjaxJsonResponse extends Frontend {

	public function onGetPageLayout(PageModel $objPage, LayoutModel $objLayout, PageRegular $objPageRegular)
	{
		if ($_SERVER["HTTP_X_REQUESTED_WITH"] == 'XMLHttpRequest') {
			$objLayout->template .= '.json';
		}
	}

}
