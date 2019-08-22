<?php
namespace app\admin\controller;
use think\Controller;

class Content extends Controller{
    public function list(){
        return $this->fetch();
    }

    public function tags(){
        return $this->fetch();
    }
    public function comment(){
        return $this->fetch();
    }

    public function listform(){
        return $this->fetch();
    }
    public function tagsform(){
        return $this->fetch();
    }
}