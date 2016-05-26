<?php
namespace Strapieno\UserAvatar\ModelTest\Entity;

use Strapieno\UserAvatar\Model\Entity\AvatarAwareTrait;

/**
 * Class AvatarAwareTraitTest
 */
class AvatarAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AvatarAwareTrait
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\UserAvatar\Model\Entity\AvatarAwareTrait');
    }

    public function testGetterSetter()
    {
        $input = 'test';
        $this->mockTrait->setAvatar($input);
        $this->assertSame($input, $this->mockTrait->getAvatar() );
    }
}