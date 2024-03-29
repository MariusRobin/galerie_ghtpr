<?php
namespace Ghtpr\GalerieGhtpr\Controller;

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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * authorRepository
     *
     * @var \Ghtpr\GalerieGhtpr\Domain\Repository\AuthorRepository
     * @inject
     */
    protected $authorRepository = null;

    /**
     * albumRepository
     *
     * @var \Ghtpr\GalerieGhtpr\Domain\Repository\AlbumRepository
     * @inject
     */
    protected $albumRepository = null;


    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\Ghtpr\GalerieGhtpr\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }
}
