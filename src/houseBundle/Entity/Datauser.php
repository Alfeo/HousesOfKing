<?php

namespace houseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datauser
 *
 * @ORM\Table(name="datauser")
 * @ORM\Entity(repositoryClass="houseBundle\Repository\DatauserRepository")
 */
class Datauser
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
     * @var int
     *
     * @ORM\Column(name="house", type="integer", nullable=true)
     */
    private $house;

    /**
     * @var int
     *
     * @ORM\Column(name="stuff", type="integer", nullable=true)
     */
    private $stuff;

    /**
     * @var int
     *
     * @ORM\Column(name="strenght", type="integer", nullable=true)
     */
    private $strenght;

    /**
     * @var int
     *
     * @ORM\Column(name="defense", type="integer", nullable=true)
     */
    private $defense;

    /**
     * @var int
     *
     * @ORM\Column(name="life", type="integer", nullable=true)
     */
    private $life;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var int
     *
     * @ORM\Column(name="gold", type="integer", nullable=true)
     */
    private $gold;


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
     * Set house
     *
     * @param integer $house
     * @return Datauser
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return integer 
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set stuff
     *
     * @param integer $stuff
     * @return Datauser
     */
    public function setStuff($stuff)
    {
        $this->stuff = $stuff;

        return $this;
    }

    /**
     * Get stuff
     *
     * @return integer 
     */
    public function getStuff()
    {
        return $this->stuff;
    }

    /**
     * Set defense
     *
     * @param integer $defense
     * @return Datauser
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return integer 
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set strenght
     *
     * @param integer $strenght
     * @return Datauser
     */
    public function setStrenght($strenght)
    {
        $this->strenght = $strenght;

        return $this;
    }

    /**
     * Get strenght
     *
     * @return integer 
     */
    public function getStrenght()
    {
        return $this->strenght;
    }

    /**
     * Set life
     *
     * @param integer $life
     * @return Datauser
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return integer 
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     * @return Datauser
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     * @return Datauser
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
}
