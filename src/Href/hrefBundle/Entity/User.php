<?php

namespace Href\hrefBundle\Entity;


class User
{
    private $structure;

    private $id;
    private $name;
    private $email;



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
     * @return User
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
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set structure
     *
     * @param \Href\hrefBundle\Entity\Structure $structure
     * @return User
     */
    public function setStructure(\Href\hrefBundle\Entity\Structure $structure = null)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return \Href\hrefBundle\Entity\Structure 
     */
    public function getStructure()
    {
        return $this->structure;
    }
}
