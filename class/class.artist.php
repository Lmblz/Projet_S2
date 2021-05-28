<?php

class Artist
{
    private $id = 0;
    private $name = null;
    private $date = null;

    function __construct(array $donnees)
    {
        $this->id = $donnees["id_artist_artist"];
        $this->name = $donnees["name_artist"];
        $this->date = $donnees["date_artist"];
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