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

    public function sysSet(){
        return $this->fetch('sys-set');
    }

    public function sysData(){
        return $this->fetch('sys-data');
    }

    public function sysShield(){
        return $this->fetch('sys-shield');
    }

    public function sysLink(){
        return $this->fetch('sys-link');
    }

    public function sysQQ(){
        return $this->fetch('sys-qq');
    }

    public function adminList(){
        return $this->fetch('admin-list');
    }


    public function adminRole(){
        return $this->fetch('admin-role');
    }


    public function adminCate(){
        return $this->fetch('admin-cate');
    }


    public function adminRule(){
        return $this->fetch('admin-rule');
    }

    public function adminAdd(){
        return $this->fetch('admin-add');
    }

    public function adminEdit(){
        return $this->fetch('admin-edit');
    }

    public function memberList(){
        return $this->fetch('member-list');
    }

    public function memberDel(){
        return $this->fetch('member-del');
    }
    public function memberLevel(){
        return $this->fetch('member-level');
    }
    public function memberKiss(){
        return $this->fetch('member-kiss');
    }

    public function memberView(){
        return $this->fetch('member-view');
    }

    public function echarts1(){
        return $this->fetch('echarts1');
    }

    public function echarts2(){
        return $this->fetch('echarts2');
    }

    public function echarts3(){
        return $this->fetch('echarts3');
    }


    public function echarts4(){
        return $this->fetch('echarts4');
    }

    public function echarts5(){
        return $this->fetch('echarts5');
    }


    public function echarts6(){
        return $this->fetch('echarts6');
    }

    public function echarts7(){
        return $this->fetch('echarts7');
    }

    public function echarts8(){
        return $this->fetch('echarts8');
    }
}