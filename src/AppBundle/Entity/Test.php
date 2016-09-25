<?php

namespace AppBundle\Entity;

use AppBundle\Enum\FooBar;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class FooBar
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class Test
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var FooBar
     * @ORM\Column(type="foobar")
     */
    private $foobar;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return FooBar
     */
    public function getFoobar()
    {
        return $this->foobar;
    }

    /**
     * @param FooBar $foobar
     */
    public function setFoobar(FooBar $foobar)
    {
        $this->foobar = $foobar;
    }
}