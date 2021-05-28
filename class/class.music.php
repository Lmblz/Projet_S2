<?php

class Music
{
    private $id = 0;
    private $title = null;
    private $date = null;

    function __construct(array $donnees)
    {
        $this->id = $donnees["id_music_music"];
        $this->title = $donnees["title_music"];
        $this->date = $donnees["date_music"];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}
