<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Request;
use think\Db;
use app\common\model\Config as ConfigModel;


class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    

    public function index()
    {
        $views= Db::name('views')->where('id',1)->value('views');
        Db::name('views')->where('id',1)->setInc('views');
        $this->assign('channel','index');
        $this->assign('views',$views);
        return $this->view->fetch();
    }

    public function statistics(){
        $this->assign('channel','statistics');
        return $this->view->fetch();
    }

    public function download(){
        $this->assign('channel','download');        
        return $this->view->fetch();
    }

    public function about(){
        $this->assign('channel','about');
        return $this->view->fetch();
    }

    public function browse(){
        $this->assign('channel','browse');
        return $this->view->fetch();  
    }

    public function search(){
        
        $key=input('key');
        $pid=input('pid');
        $year=input('year');
        $order='';
       
       if($pid !=null){ 
            if($pid==1){
                $order='pmid desc';
            }else{
                $order='pmid asc';
            }
       }
       
       
        if($year !=null){
            if($year==1){
                $order='year desc';
            }else{
                $order='year asc';
            }
        }


        $list=Db::name('info')->where("concat(biomarker,geneid,symbol,drug,drugbank) LIKE '%$key%' ")->order($order)->paginate(20);
        $this->assign('list',$list);
        $this->assign('pid',$pid);
        $this->assign('key',$key);
        $this->assign('year',$year);
        $this->assign('channel','search');
    

        return $this->view->fetch();  
    }





}
