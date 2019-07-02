<?php
namespace Ghtpr\GalerieGhtpr\UseCase\Query;

use Ghtpr\GalerieGhtpr\Domain\Model\Category;

class AlbumSearch
{
    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * @var Category
     */
    protected $category;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;
    }



}