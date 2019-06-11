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
class ImageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ghtpr\GalerieGhtpr\Domain\Model\Image
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ghtpr\GalerieGhtpr\Domain\Model\Image();
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
    public function getWidthReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getWidth()
        );
    }

    /**
     * @test
     */
    public function setWidthForIntSetsWidth()
    {
        $this->subject->setWidth(12);

        self::assertAttributeEquals(
            12,
            'width',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeightReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHeight()
        );
    }

    /**
     * @test
     */
    public function setHeightForIntSetsHeight()
    {
        $this->subject->setHeight(12);

        self::assertAttributeEquals(
            12,
            'height',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFileReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFile()
        );
    }

    /**
     * @test
     */
    public function setFileForFileReferenceSetsFile()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFile($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'file',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getShootDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getShootDate()
        );
    }

    /**
     * @test
     */
    public function setShootDateForDateTimeSetsShootDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setShootDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'shootDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublicationDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPublicationDate()
        );
    }

    /**
     * @test
     */
    public function setPublicationDateForDateTimeSetsPublicationDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPublicationDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'publicationDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTag()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagSetsTags()
    {
        $tag = new \Ghtpr\GalerieGhtpr\Domain\Model\Tag();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \Ghtpr\GalerieGhtpr\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \Ghtpr\GalerieGhtpr\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }
}
