<?php
namespace Strapieno\UserAvatar\Model\Entity;

interface UserAvatarAwareInterface
{
    /**
     * return string
     */
    public function getAvatar();

    /**
     * @param $avatar string
     * return $this
     */
    public function getAvatar($avatar);
}