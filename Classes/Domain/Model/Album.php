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
 * Album
 */
class Album extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Date de publication
     *
     * @var \DateTime
     */
    protected $publishedDate = null;

    /**
     * Images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Image>
     * @cascade remove
     * @lazy
     */
    protected $images = null;

    /**
     * catégories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Category>
     * @lazy
     */
    protected $categories = null;

    /**
     * Tag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the publishedDate
     *
     * @return \DateTime $publishedDate
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Sets the publishedDate
     *
     * @param \DateTime $publishedDate
     * @return void
     */
    public function setPublishedDate(\DateTime $publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Image
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Image $image
     * @return void
     */
    public function addImage(\Ghtpr\GalerieGhtpr\Domain\Model\Image $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a Image
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Image $imageToRemove The Image to be removed
     * @return void
     */
    public function removeImage(\Ghtpr\GalerieGhtpr\Domain\Model\Image $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Image> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Image> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Adds a Category
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Ghtpr\GalerieGhtpr\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Ghtpr\GalerieGhtpr\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Adds a Tag
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Ghtpr\GalerieGhtpr\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Ghtpr\GalerieGhtpr\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Ghtpr\GalerieGhtpr\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ghtpr\GalerieGhtpr\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }
}
