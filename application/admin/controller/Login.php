<?php

namespace app\admin\controller;


use app\common\Base;
use think\Db;
use think\Request;
use app\admin\model\Admin;

class Login extends Base
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    public function index()
    {
        $a = url('index/index');
        if($this->getLoginStatus()){
            $this->redirect('index/index');
        }else{
            return $this->fetch('login');
        }

    }

    public function check(){
        //init
        $admin = db('admin');
        $username = $this->parmFilter($_POST['username']);
        $pass = $this->parmFilter($_POST['pass']);

        if(empty($username) || empty($pass)){
            return $this->ajaxReturn(['code'=>0,'msg'=>'请输入账号或密码']);
        }

        $user_info = $admin->field('id,username,password')->find();
        if(is_null($user_info)){
            return $this->ajaxReturn(['code'=>0,'msg'=>'用户名不存在']);
        }
        if($user_info['password'] == $pass){
            session('islogin',true);
            $admin->where(['id'=>$user_info['id']])->setInc('count');
            $admin->where(['id'=>$user_info['id']])->update(['last_time'=>time()]);
            return $this->ajaxReturn(['code'=>1,'data'=>url('index/index'),'msg'=>'登陆成功']);
        }else{
            return $this->ajaxReturn(['code'=>0,'msg'=>'密码错误']);
        }

    }

    public function logout(){
        session('islogin',false);
        $this->success('退出登录','login/index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
