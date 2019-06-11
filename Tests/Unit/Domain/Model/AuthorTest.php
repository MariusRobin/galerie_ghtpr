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
class AuthorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ghtpr\GalerieGhtpr\Domain\Model\Author
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ghtpr\GalerieGhtpr\Domain\Model\Author();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastname()
        );
    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
        $this->subject->setLastname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstname()
        );
    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
        $this->subject->setFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getJobReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJob()
        );
    }

    /**
     * @test
     */
    public function setJobForStringSetsJob()
    {
        $this->subject->setJob('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'job',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhoneNumber()
        );
    }

    /**
     * @test
     */
    public function setPhoneNumberForStringSetsPhoneNumber()
    {
        $this->subject->setPhoneNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phoneNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWebsiteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWebsite()
        );
    }

    /**
     * @test
     */
    public function setWebsiteForStringSetsWebsite()
    {
        $this->subject->setWebsite('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'website',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBiographyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBiography()
        );
    }

    /**
     * @test
     */
    public function setBiographyForStringSetsBiography()
    {
        $this->subject->setBiography('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'biography',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlbumsReturnsInitialValueForAlbum()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAlbums()
        );
    }

    /**
     * @test
     */
    public function setAlbumsForObjectStorageContainingAlbumSetsAlbums()
    {
        $album = new \Ghtpr\GalerieGhtpr\Domain\Model\Album();
        $objectStorageHoldingExactlyOneAlbums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAlbums->attach($album);
        $this->subject->setAlbums($objectStorageHoldingExactlyOneAlbums);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAlbums,
            'albums',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAlbumToObjectStorageHoldingAlbums()
    {
        $album = new \Ghtpr\GalerieGhtpr\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->addAlbum($album);
    }

    /**
     * @test
     */
    public function removeAlbumFromObjectStorageHoldingAlbums()
    {
        $album = new \Ghtpr\GalerieGhtpr\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->removeAlbum($album);
    }

    /**
     * @test
     */
    public function getSocialNetworksReturnsInitialValueForSocialNetwork()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocialNetworks()
        );
    }

    /**
     * @test
     */
    public function setSocialNetworksForObjectStorageContainingSocialNetworkSetsSocialNetworks()
    {
        $socialNetwork = new \Ghtpr\GalerieGhtpr\Domain\Model\SocialNetwork();
        $objectStorageHoldingExactlyOneSocialNetworks = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocialNetworks->attach($socialNetwork);
        $this->subject->setSocialNetworks($objectStorageHoldingExactlyOneSocialNetworks);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocialNetworks,
            'socialNetworks',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialNetworkToObjectStorageHoldingSocialNetworks()
    {
        $socialNetwork = new \Ghtpr\GalerieGhtpr\Domain\Model\SocialNetwork();
        $socialNetworksObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworksObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($socialNetwork));
        $this->inject($this->subject, 'socialNetworks', $socialNetworksObjectStorageMock);

        $this->subject->addSocialNetwork($socialNetwork);
    }

    /**
     * @test
     */
    public function removeSocialNetworkFromObjectStorageHoldingSocialNetworks()
    {
        $socialNetwork = new \Ghtpr\GalerieGhtpr\Domain\Model\SocialNetwork();
        $socialNetworksObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialNetworksObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($socialNetwork));
        $this->inject($this->subject, 'socialNetworks', $socialNetworksObjectStorageMock);

        $this->subject->removeSocialNetwork($socialNetwork);
    }
}
