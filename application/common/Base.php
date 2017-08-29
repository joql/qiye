<?php
namespace app\common;
use think\Controller;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 10:46
 */
class Base extends Controller{


    public function index(){
        return $this->fetch('index');
    }

    public function welcome(){
        return $this->fetch('welcome');
    }



    public function category(){
        return $this->fetch('category');
    }

}