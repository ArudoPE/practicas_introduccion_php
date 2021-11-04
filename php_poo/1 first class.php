<?php
class User
{
    public $type;
}

class Admin
{
    public function greet()
    {
        return "Hola Administrador<br>";
    }
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();
echo "<pre>";
echo var_dump($user);
