<?php

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Slug {

    public static $articles = [
        'a','an', 'the', 'of'
    ];

    public static function make($array)
    {
        $slug = "";
        $array_count = sizeof($array);
        for ($i = 0; $i < $array_count; $i++) { 
            $slug .= strtolower(str_replace(' ',  '-', $array[$i]));
            unset($array[$i]);
            if(!empty($array))
                $slug .= '-';
        }
        return $slug;
    }

    public static function revert($value, $model)
    {
        if(is_numeric($value)){
            return self::getName($model, $value);
        }

        $slug = "";
        $array = explode('-', $value);
        $array_count = sizeof($array);
        
        for ($i = 0; $i < $array_count; $i++) { 
            if(self::isArticle($array[$i])){
                ($i == 0) ?
                $slug .= ucfirst($array[$i]):
                $slug .= $array[$i];
            } else {
                $slug .= ucfirst($array[$i]);
            }
            
            unset($array[$i]);
            if(!empty($array))
                $slug .= ' ';
        }
        return $slug;
    }

    private static function isArticle($value)
    {
        if(in_array($value, self::$articles)){
            return true;
        }
        return false;
    }

    private static function getName($model, $value){
        switch($model) {
            case 'permissions':
                $model = Permission::find($value);
                break;
            case 'roles':
                $model = Role::find($value);
                break;
        }
        return $model->name;
    }
}