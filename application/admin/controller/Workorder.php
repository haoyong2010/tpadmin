<?php


namespace app\admin\controller;


use think\Controller;

class Workorder extends Controller
{
    public function list(){
        return $this->fetch();
    }
}