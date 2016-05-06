<?php

namespace houseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="houseBundle\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="iditem", type="integer", nullable=true)
     */
    private $iditem;

    /**
     * @var int
     *
     * @ORM\Column(name="moreLife", type="integer", nullable=true)
     */
    private $moreLife;

    /**
     * @var int
     *
     * @ORM\Column(name="moreDefense", type="integer", nullable=true)
     */
    private $moreDefense;

    /**
     * @var int
     *
     * @ORM\Column(name="moreStrenght", type="integer", nullable=true)
     */
    private $moreStrenght;

    /**
     * @var string
     *
     * @ORM\Column(name="nameImg", type="string", length=255, nullable=true)
     */
    private $nameImg;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;


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
     * Set name
     *
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Item
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set iditem
     *
     * @param integer $iditem
     * @return Item
     */
    public function setIditem($iditem)
    {
        $this->iditem = $iditem;

        return $this;
    }

    /**
     * Get iditem
     *
     * @return integer 
     */
    public function getIditem()
    {
        return $this->iditem;
    }

    /**
     * Set moreLife
     *
     * @param integer $moreLife
     * @return Item
     */
    public function setMoreLife($moreLife)
    {
        $this->moreLife = $moreLife;

        return $this;
    }

    /**
     * Get moreLife
     *
     * @return integer 
     */
    public function getMoreLife()
    {
        return $this->moreLife;
    }

    /**
     * Set moreDefense
     *
     * @param integer $moreDefense
     * @return Item
     */
    public function setMoreDefense($moreDefense)
    {
        $this->moreDefense = $moreDefense;

        return $this;
    }

    /**
     * Get moreDefense
     *
     * @return integer 
     */
    public function getMoreDefense()
    {
        return $this->moreDefense;
    }

    /**
     * Set moreStrenght
     *
     * @param integer $moreStrenght
     * @return Item
     */
    public function setMoreStrenght($moreStrenght)
    {
        $this->moreStrenght = $moreStrenght;

        return $this;
    }

    /**
     * Get moreStrenght
     *
     * @return integer 
     */
    public function getMoreStrenght()
    {
        return $this->moreStrenght;
    }

    /**
     * Set nameImg
     *
     * @param string $nameImg
     * @return Item
     */
    public function setNameImg($nameImg)
    {
        $this->nameImg = $nameImg;

        return $this;
    }

    /**
     * Get nameImg
     *
     * @return string 
     */
    public function getNameImg()
    {
        return $this->nameImg;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return Item
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }
}
