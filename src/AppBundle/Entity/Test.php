<?php

namespace AppBundle\Entity;

use AppBundle\Enum\Status;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Status
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
     * @var Status
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
     * @return Status
     */
    public function getFoobar()
    {
        return $this->foobar;
    }

    /**
     * @param Status $foobar
     */
    public function setFoobar(Status $foobar)
    {
        $this->foobar = $foobar;
    }
}