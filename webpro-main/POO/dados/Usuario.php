<?php

namespace POO\dados;

class Usuario{
    private $email = "d@d.com";

    public function exibirEmail(){
        echo $this->email;
    }
}