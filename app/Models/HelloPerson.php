<?php


namespace App\Models;


class HelloPerson
{
    private $id;
    public $names = array(
        1=>'James',
        2=>'Eric',
        3=>'Paul',
        4=>'Henry'
    );

    public $surnames = array(
        1=>'Hawkins',
        2=>'Shaddix',
        3=>'Dunn',
        4=>'Kropp'
    );

    public function __construct($idParam)
    {
        $this->id = $idParam;
    }

    public function getName() : string{
        if($this->id >=1 and $this->id <=4)
            return $this->names[$this->id];
        else
            return "Wrong id!";
    }
}
