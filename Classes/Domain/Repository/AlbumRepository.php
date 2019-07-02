<?php
namespace Ghtpr\GalerieGhtpr\Domain\Repository;

use Ghtpr\GalerieGhtpr\UseCase\Query\AlbumSearch;
use TYPO3\CMS\Core\Utility\DebugUtility;
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
 * The repository for Albums
 */
class AlbumRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * search in albums
     *
     * @return QueryResultInterface|array
     * @api
     */
    public function getLatest(int $nbAlbums = 5)
    {
        $query = $this->createQuery();
        $query->setOrderings(
            [
                'publishedDate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            ]
        );

        $query->setLimit($nbAlbums);
        return $query->execute();
    }

    public function getAlbumByAuthor(\Ghtpr\GalerieGhtpr\Domain\Model\Author $author){
        $query = $this->createQuery();
        $query->matching($query->contains('author', $author));
        return $query->execute();
    }

    public function search(AlbumSearch $search){
        $query = $this->createQuery();
        $constraints = [];

        if ($search->getText()){
            $words = explode(' ', $search->getText());
            $props = ['name','description','images.name'];

            foreach ($words as $word){
                foreach ($props as $prop) {
                    $constraintProp[] = $query->like($prop, '%' . $word. '%');
                }
            }
            $constraints[] = $query->logicalOr($constraintProp);
        }

        if ($search->getCategory()){
            $category = $search->getCategory();
            $constraints[] = $query->contains('categories',$category);
        }

        if (count($constraints)){
            $query->matching($query->logicalAnd($constraints));
        }
        return $query->execute();
    }

    public function albumByCateg($categ)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('categories', $categ));
        return $query->execute();
    }
}
