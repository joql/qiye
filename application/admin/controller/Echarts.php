<?php

namespace app\admin\controller;

use app\common\Base;
use think\Request;

class Echarts extends Base
{

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
