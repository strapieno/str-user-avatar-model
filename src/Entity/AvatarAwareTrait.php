<?php
namespace Strapieno\UserAvatar\Model\Entity;

trait AvatarAwareTrait
{
    /**
     * @var string
     */
    protected $avatar;

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
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
}