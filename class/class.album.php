<?php

class Album
{
    private $id = 0;
    private $name = null;
    private $date = null;

    function __construct(array $donnees)
    {
        $this->id = $donnees["id_album_album"];
        $this->name = $donnees["name_album_album"];
        $this->date = $donnees["date_album"];
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
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}