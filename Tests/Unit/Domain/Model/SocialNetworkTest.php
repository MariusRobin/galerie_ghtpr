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
class SocialNetworkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ghtpr\GalerieGhtpr\Domain\Model\SocialNetwork
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ghtpr\GalerieGhtpr\Domain\Model\SocialNetwork();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdentifierReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentifier()
        );
    }

    /**
     * @test
     */
    public function setIdentifierForStringSetsIdentifier()
    {
        $this->subject->setIdentifier('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identifier',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSocialTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSocialType()
        );
    }

    /**
     * @test
     */
    public function setSocialTypeForIntSetsSocialType()
    {
        $this->subject->setSocialType(12);

        self::assertAttributeEquals(
            12,
            'socialType',
            $this->subject
        );
    }
}
