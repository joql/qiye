<?php
namespace app\admin\controller;

use app\common\Base;

class Index extends Base{

    public function index(){
        return $this->fetch('index');
    }
}
