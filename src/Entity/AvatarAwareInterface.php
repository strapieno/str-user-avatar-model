<?php
namespace Strapieno\UserAvatar\Model\Entity;

interface AvatarAwareInterface
{
    /**
     * return string
     */
    public function getAvatar();

    /**
     * @param $avatar string
     * return $this
     */
    public function setAvatar($avatar);
}