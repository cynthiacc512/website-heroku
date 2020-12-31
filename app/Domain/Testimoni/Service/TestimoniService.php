<?php

namespace App\Domain\Testimoni\Service;


class TestimoniService{
    public function next(){
        // get next user
        return User::where('id', '>', $this->id)->orderBy('id','asc')->first();
    
    }
    public  function previous(){
        // get previous  user
        return User::where('id', '<', $this->id)->orderBy('id','desc')->first();
    
    }
}

?>