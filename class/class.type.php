<?php

class Type
{
    private $id = 0;
    private $name = null;

    function __construct(array $donnees)
    {
        $this->id = $donnees["id_type_type"];
        $this->name = $donnees["name_type"];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}

