<?php

namespace Href\hrefBundle\Entity;


class Structure
{
    private $users;

    private $id;
    private $position;
    private $symbol;
    private $superior;
    private $level;


    public  function __toString()
    {
       return (string)$this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set position
     *
     * @param string $position
     * @return Structure
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set symbol
     *
     * @param string $symbol
     * @return Structure
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string 
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set superior
     *
     * @param integer $superior
     * @return Structure
     */
    public function setSuperior($superior)
    {
        $this->superior = $superior;

        return $this;
    }

    /**
     * Get superior
     *
     * @return integer 
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Structure
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add users
     *
     * @param \Href\hrefBundle\Entity\User $users
     * @return Structure
     */
    public function addUser(\Href\hrefBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Href\hrefBundle\Entity\User $users
     */
    public function removeUser(\Href\hrefBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
