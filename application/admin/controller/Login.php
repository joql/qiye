<?php

namespace app\admin\controller;


use app\common\Base;
use think\Request;
use app\admin\model\Admin;

class Login extends Base
{


    public function index()
    {
        //
        return $this->fetch('login');
    }

    public function check(){
        $status =0;

        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $map = ['username'=>$username];
        $admin = Admin::get($map);

        if(is_null($admin)){
            $msg = '用户名不对';
        }else{
            $status =1;
            $msg = 'success';
            $admin->setInc('count');
            $admin->save(['last_time'=>time()]);
        }
        return json_encode(array(   'code'=>1,'msg'=>$msg));

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
