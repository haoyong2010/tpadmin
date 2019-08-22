<?php
namespace app\admin\controller;
use think\Controller;

class Home extends Controller{
//     默认显示页
    public function console(){
        return $this->fetch();
    }
    
    
    public function homepage1(){
        return $this->fetch();
    }
}