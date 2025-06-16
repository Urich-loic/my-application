<?php

if(!function_exists('page_title')){
    function page_title(?string $title):string{
        if($title){
            return $title . ' | '. config('app.name');
        }else{
            return config('app.name');
        }
    }
}
