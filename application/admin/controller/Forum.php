<?php
namespace app\admin\controller;
use think\Controller;

class forum extends Controller
{
    public function list(){
        return $this->fetch();
    }
    public function replays(){
        return $this->fetch();
    }
}