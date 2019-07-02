<?php
namespace Ghtpr\GalerieGhtpr\Controller;

use Ghtpr\GalerieGhtpr\UseCase\Query\AlbumSearch;
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
 * AlbumController
 */
class AlbumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * albumRepository
     *
     * @var \Ghtpr\GalerieGhtpr\Domain\Repository\AlbumRepository
     * @inject
     */
    protected $albumRepository = null;

    /**
     * categoryRepository
     *
     * @var \Ghtpr\GalerieGhtpr\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $albums = $this->albumRepository->findAll();
        $categories = $this->categoryRepository->findAll();
        $search = new AlbumSearch();
        $this->view->assignMultiple(['albums' => $albums, 'categories' => $categories, 'search' => $search]);
    }

    /**
     * action show
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Album $album
     * @return void
     */
    public function showAction(\Ghtpr\GalerieGhtpr\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
    }

    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {

    }

    /**
     * @param AlbumSearch $search
     */
    public function searchAction(AlbumSearch $search)
    {
        $categories = $this->categoryRepository->findAll();
        $albums = $this->albumRepository->search($search);
        $this->view->assignMultiple(['albums' => $albums, 'categories' => $categories, 'search' => $search]);
    }
}
