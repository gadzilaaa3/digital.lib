<?php

namespace App\Controllers;

class CatalogController
{
    public static function index()
    {
        // name token path;
        // Получим магическим образом массив дисков преподавателя
        $disk1 = new \stdClass();
        $disk1->name = "disk1";
        $disk1->token = "y0_AgAAAAA4LQGfAADLWwAAAADUFdAAPMbySIrlSreBza-Bd_Ua2eILbYE";
        $disk1->path = "disk:/";

        $disk2 = new \stdClass();
        $disk2->name = "disk2";
        $disk2->token = "y0_AgAAAAA4LQGfAADLWwAAAADUFdAAPMbySIrlSreBza-Bd_Ua2eILbYE";
        $disk2->path = "disk:/testfolder";
        $disks = [
            $disk1,
            $disk2
        ];
        $catalog = new \stdClass();
        $catalog->disks = $disks;
        $_SESSION['catalog'] = $catalog;
        //

        

        require_once DIR . '/views/user/catalog.php';
    }
    public static function get()
    {
        
    }
}