<?php


namespace Ghtpr\GalerieGhtpr\Domain\Repository;


use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class ImageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function getLatest(int $nbPhotos = 5)
    {
        $query = $this->createQuery();
        $query->setOrderings(
            [
                'publicationDate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            ]
        );
        $query->setLimit($nbPhotos);
        DebuggerUtility::var_dump($query);
        DebuggerUtility::var_dump($nbPhotos);
        return $query->execute();
    }
}