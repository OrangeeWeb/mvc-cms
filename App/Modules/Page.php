<?php

namespace App\Modules;

use DB, Module;


class Page extends DB implements Module {
    
    
    public function __construct(){
        
        
        
    }
    
    public function children(){
        return $this->select('pages', ['*'], ['parent' => $this->id], 'page')->fetchAll();
    }
    
    
}