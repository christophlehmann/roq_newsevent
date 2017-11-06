<?php
namespace Networkteam\RoqNewsevent\ViewHelpers;

/**
 * Copyright (c) 2012, ROQUIN B.V. (C), http://www.roquin.nl
 *
 * @author:         J. de Groot <jochem@roquin.nl>
 * @file:           EventController.php
 * @description:    Translate view helper, extending the fluid translate viewhelper
 */

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3\CMS\Fluid\Core\ViewHelper\Exception\InvalidVariableException;

class TranslateViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper {

    /**
     * Return array element by key.
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @throws InvalidVariableException
     * @return string
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext) {
    	$arguments['extensionName'] = 'roq_newsevent';
    	return parent::renderStatic($arguments, $renderChildrenClosure, $renderingContext);
	}
}

?>