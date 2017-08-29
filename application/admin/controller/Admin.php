<?php

namespace app\admin\controller;

use app\common\Base;
use think\Request;

class Admin extends Base
{

    public function Lists(){
        return $this->fetch('admin-list');
    }


    public function Role(){
        return $this->fetch('admin-role');
    }


    public function Cate(){
        return $this->fetch('admin-cate');
    }


    public function Rule(){
        return $this->fetch('admin-rule');
    }

    public function Add(){
        return $this->fetch('admin-add');
    }

    public function Edit(){
        return $this->fetch('admin-edit');
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
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
