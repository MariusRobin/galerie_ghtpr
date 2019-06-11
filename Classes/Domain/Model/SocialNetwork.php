<?php
namespace Ghtpr\GalerieGhtpr\Domain\Model;

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
 * Réseau sociaux
 */
class SocialNetwork extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Identifiant du compte
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identifier = '';

    /**
     * Réseau social
     *
     * @var int
     * @validate NotEmpty
     */
    protected $socialType = 0;

    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the socialType
     *
     * @return int $socialType
     */
    public function getSocialType()
    {
        return $this->socialType;
    }

    /**
     * Sets the socialType
     *
     * @param int $socialType
     * @return void
     */
    public function setSocialType($socialType)
    {
        $this->socialType = $socialType;
    }
}
