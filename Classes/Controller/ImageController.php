<?php
namespace Ghtpr\GalerieGhtpr\Controller;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "galerie-photo-cms" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Robin Marius <marius.robin@etu.u-bordeaux.fr>
 *           Petit Quentin <quentin.petit@u-bordeaux.fr>
 *           Bastien Tebbani <bastien.tebbani@etu.u-bordeaux.fr>
 *           Anthony Guichard <anthony.gichard.1@etu.u-bordeaux.fr>
 *           Charlie Hauselmann <charlie.hauselmann@etu.u-bordeaux.fr>
 *
 ***/

/**
 * ImageController
 */
class ImageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * imageRepository
     *
     * @var \Ghtpr\GalerieGhtpr\Domain\Repository\ImageRepository
     * @inject
     */
    protected $imageRepository = null;

    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {
        $nbItemsToShow = $this->settings['inbItemsToShow'] ? int($this->settings['inbItemsToShow']) : 5;
        $images = $this->imageRepository->getLatest($nbItemsToShow);
        $this->view->assign('latest_images', $images);
    }
}
