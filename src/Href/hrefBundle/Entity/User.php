<?php

namespace Href\hrefBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{
    private $structure;

    protected $id;



    public function __construct()
    {
        parent::__construct();
        // your own logic
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
