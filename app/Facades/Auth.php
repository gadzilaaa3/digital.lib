<?php

namespace App\Facades;

use stdClass;

class Auth
{

    public static function check()
    {
        return isset($_SESSION['user']);
    } 

    public static function attempt($formData)
    {
        $userData = self::getResponseContents($formData);
        if(self::getResult($userData)){
            self::setUser($userData);
            return true;
        }
        return false;
    }

    private static function getResponseContents($data)
    {
        $url = BASE_KPK . '/Autorization';
        return Http::get($url, $data);
    }
    
    private static function getResult($contents)
    {   
        $result = false;
        if($contents->rezultat == "true"){
            $result = true;
        }
        return $result;
    }

    private static function setUser($userData)
    {
        $user = new stdClass();
        
        $user->auth = true;
        $user->userId = $userData->CodeUser;
        $user->fullName = $userData->NameUser;
        $user->groupId = $userData->CodeGroup;
        $user->group = $userData->NameGroup;

        $_SESSION['user'] = $user;
    }
}
