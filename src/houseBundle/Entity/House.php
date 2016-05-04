<?php

namespace houseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * House
 *
 * @ORM\Table(name="house")
 * @ORM\Entity(repositoryClass="houseBundle\Repository\HouseRepository")
 */
class House
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="refhouse", type="integer", nullable=true)
     */
    private $refhouse;

    /**
     * @var int
     *
     * @ORM\Column(name="gold", type="integer", nullable=true)
     */
    private $gold;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="Lord", type="integer", nullable=true)
     */
    private $lord;

    /**
     * get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return House
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refhouse
     *
     * @param integer $refhouse
     * @return House
     */
    public function setRefhouse($refhouse)
    {
        $this->refhouse = $refhouse;

        return $this;
    }

    /**
     * Get refhouse
     *
     * @return integer 
     */
    public function getRefhouse()
    {
        return $this->refhouse;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     * @return House
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return integer 
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return House
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set lord
     *
     * @param integer $lord
     * @return House
     */
    public function setLord($lord)
    {
        $this->lord = $lord;

        return $this;
    }

    /**
     * Get lord
     *
     * @return integer 
     */
    public function getLord()
    {
        return $this->lord;
    }
}
