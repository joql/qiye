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


    public function __initialize(){
        session_start();

        if(!$this->getLoginStatus()){
            return $this->error('请登录',url('login/index'));
        }
    }


    public function welcome(){
        return $this->fetch('welcome');
    }



    public function category(){
        return $this->fetch('category');
    }

    /**
     * 用途描述:参数过滤
     * @param:
     * @return:
     * @date:20170904
     * @author: ksj
     */
    public function parmFilter($parm){
        return addslashes(trim($parm));
    }

    /**
     * 用途描述:ajax 返回
     * @param:
     * @return:
     * @date:20170904
     * @author: ksj
     */
    public function ajaxReturn($arr = array()){
        return json($arr);
    }

    public function getLoginStatus(){
        return (session('islogin') == true) ? true : false;
    }

}