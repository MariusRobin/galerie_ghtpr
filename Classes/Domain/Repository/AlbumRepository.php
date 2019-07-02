<?php
namespace Ghtpr\GalerieGhtpr\Domain\Repository;

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
 * The repository for Albums
 */
class AlbumRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function getAlbumByAuthor(\Ghtpr\GalerieGhtpr\Domain\Model\Author $author){
        $query = $this->createQuery();
        $query->matching($query->contains('author', $author));
        return $query->execute();
    }
    public function albumByCateg($categ)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('categories', $categ));
        return $query->execute();
    }
}
