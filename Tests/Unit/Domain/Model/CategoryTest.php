<?php
namespace Ghtpr\GalerieGhtpr\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Robin Marius <marius.robin@etu.u-bordeaux.fr>
 * @author Petit Quentin <quentin.petit@u-bordeaux.fr>
 * @author Bastien Tebbani <bastien.tebbani@etu.u-bordeaux.fr>
 * @author Anthony Guichard <anthony.gichard.1@etu.u-bordeaux.fr>
 * @author Charlie Hauselmann <charlie.hauselmann@etu.u-bordeaux.fr>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ghtpr\GalerieGhtpr\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ghtpr\GalerieGhtpr\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
