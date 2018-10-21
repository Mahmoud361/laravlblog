<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
//    protected $id;
//    protected $fristName;
//    protected $lastName;
//    protected $email;
//    protected $address;

    protected $fillable = [
        'fristName', 'lastName', 'email', 'address',
    ];
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFristName()
    {
        return $this->fristName;
    }

    /**
     * @param mixed $fristName
     */
    public function setFristName($fristName)
    {
        if(strlen($fristName)<6)
            $this->fristName = $fristName;
        else
            exit("not valid fristName");
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        if(strlen($lastName)<6)
            $this->lastName = $lastName;
        else
            exit("not valid lastName");
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {

        if(filter_var($email,FILTER_VALIDATE_EMAIL))
            $this->email = $email;
        else
            exit("not valid email");
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        if(strlen($address)<255)
            $this->address = $address;
        else
            exit("not valid address");
    }


    //
}
