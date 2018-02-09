<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

//        $category = D('Category')->getTree();
//        $lists    = D('Document')->lists(null);
//
//        $this->assign('category',$category);//栏目
//        $this->assign('lists',$lists);//列表
//        $this->assign('page',D('Document')->page);//分页


        $this->assign('focus',"首页");
        $this->display();
    }

    public function rescue(){

        $this->assign('focus',"一呼百应");//列表
        $this->display();
    }

    public function instructions(){
        $this->assign('focus',"使用钦家");
        $this->display();
    }

    public function introduction(){
        $this->assign('focus',"关于钦家");
        $this->assign('column',"品牌故事");
        $this->display();
    }

    public function technology(){
        $this->assign('focus',"关于钦家");
        $this->assign('column',"领先技术");
        $this->display();
    }

    public function patent(){
        $this->assign('focus',"关于钦家");
        $this->assign('column',"独家专利");
        $this->display();
    }

    public function join_us(){
        $this->assign('focus',"关于钦家");
        $this->assign('column',"加入我们");
        $this->display();
    }

    public function center(){
        $this->assign('focus',"关于钦家");
        $this->assign('column',"服务与帮助");
        $this->display();
    }

    public function product_elder(){
        $this->display();
    }

    public function product_child(){
        $this->display();
    }

    public function product_pet(){
        $this->display();
    }

}