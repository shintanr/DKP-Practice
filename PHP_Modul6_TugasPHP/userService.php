<?php

class userService {
    protected $email;
    protected $password;
    protected $dataUser;
    protected $getRole;

    public function __construct($email, $password){
        $this-> dataUser = [
            (object) [
                'email' => "linakelompok22@gmail.com",
                'password' => 12345,
                'role' => "siswa"
            ],
            (object) [
                'email' => "salsakelompok22@gmail.com",
                'password' => 23456,
                'role' => "siswa"
            ],
            (object)[
                'email' => "shintakelompok22@gmail.com",
                'password' => 34567,
                'role' => "siswa"
            ],
            (object)[
                'email' => "hamdikelompok22@gmail.com",
                'password' => 45678,
                'role' => "siswa"
            ]
            ];


            $this->email = $email;
            $this->password = $password;
    }

    public function login(){
        $user = $this->checkCredentials();
        if($user){
            $this->getRole = $user>role;
            return $get_data = $user->email;
        }else {
            return false;
        }

    }  
    protected function checkCredentials(){
        foreach ($this->dataUser as $key => $value){
            if($value->email == $this->email && value->password == $this->password){
                return $value;
            }
        }
        return false;
    }
    public function getRole(){
        return $this->getRole;
    }

    }
