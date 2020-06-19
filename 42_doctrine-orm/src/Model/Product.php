<?php
namespace Shop\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\manyToOne(targetEntity="User", inversedBy="user")
     */
    protected $user;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName( $name ) {
        $this->name = $name;
    }

    function setUser(User $user ) {
        $this->user = $user;
    }

    /**
     *
     * @return Shop\Model\User
     */

    function getUser() {
        return $this->user;
    }

}