<?php

// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
    public function _initialize(){
	   if (!isset($_SESSION['uid'])) {
	       $this->redirect(GROUP_NAME.'/Login/index');
	   };
        
        
    }
}