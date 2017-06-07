<?php

namespace pgddevil\Tools\HarvestImporter\Model;

/**
 * @Entity @Table(name="User")
 */
class User
{
    /**
     * @var int
     * @Id @Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @Column(type="string",length=100)
     */
    private $email;

    /**
     * @var int
     * @Column(type="string",length=255)
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}