<?php
namespace Strapieno\UserAvatar\Model\Entity;

trait UserAvatarAwareTrait
{
    /**
     * @var string
     */
    protected $avatar

    /**
     * return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param $avatar string
     * return $this
     */
    public function getAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
}