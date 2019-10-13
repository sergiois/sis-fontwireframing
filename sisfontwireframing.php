<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.SISFontWireframing
 *
 * @copyright	Copyright © 2019 SergioIglesiasNET - All rights reserved.
 * @license		GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

class PlgSystemSisfontwireframing extends JPlugin
{
	public function onBeforeCompileHead()
	{
		if (JFactory::getApplication()->isClient('administrator'))
		{
			return true;
		}

		$doc = JFactory::getDocument();
		$css = '';

		switch($this->params->get('fontselected'))
		{
			case 'blokk':
				$css = "
				@font-face {
					font-family: 'BLOKK';
					src: url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.eot');
					src: url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.eot?#iefix') format('embedded-opentype'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.woff2') format('woff2'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.woff') format('woff'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.otf') format('opentype'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.ttf') format('truetype'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.svg#BLOKKRegular') format('svg');
					font-weight: normal;
					font-style: normal;
				}
				
				
				@media screen and (-webkit-min-device-pixel-ratio:0) {
					@font-face {
						font-family: 'BLOKK';
						src: url('".JURI::root()."plugins/system/sisfontwireframing/fonts/blokk/BLOKKNeue-Regular.svg') format('svg');
					}
				}
				
				body {
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
				}
				body, h1, h2, h3, h4, h5, h6, p, a, ul, ol, li, button, blockquote{font-family: 'BLOKK';}
				";
			break;

			case 'redacted':
				$css = "
				@font-face {
					font-family: 'Redacted';
					src: url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.eot');
					src: url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.eot?#iefix') format('embedded-opentype'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.woff2') format('woff2'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.woff') format('woff'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.ttf') format('truetype'),
						url('".JURI::root()."plugins/system/sisfontwireframing/fonts/redacted/redacted-script-regular.svg#redacted_scriptregular') format('svg');
					font-weight: normal;
					font-style: normal;
				}
				body {
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
				}
				body, h1, h2, h3, h4, h5, h6, p, a, ul, ol, li, button, blockquote{font-family: 'Redacted';}
				";
			break;
		}

		$doc->addStyleDeclaration($css);
	}
}