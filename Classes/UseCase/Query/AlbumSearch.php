<?php
namespace Ghtpr\GalerieGhtpr\UseCase\Query;

class AlbumSearch 
{
    /**
     * text
     *
     * @var string
     * @validate NotEmpty
     */
    protected $text = '';

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


}