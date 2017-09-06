<?php
namespace app\common;
use think\Controller;
use think\Request;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 10:46
 */
class Base extends Controller{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);

        error_reporting(0);
        session_start();
        $this->checkIsLogin();
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

    public function checkIsLogin(){
        $url_para = $_SERVER['REQUEST_URI'];
        if(!$this->getLoginStatus() && !strpos($url_para,'login/')){
            $this->error('请先登录','login/index');
        }
    }

}