<?php

class LoginAction extends Action {
    
    public function index() {
        $this->display();
    }
    public function loginCheck() {
        if (!IS_POST) halt('页面不存在！');
        $username = I('username');
        $password = I('password','','md5');
        if (empty($username)) {
           $this->error('请输入用户名！');
           exit();
        }
        if (empty($password)) {
            $this->error('请输入密码！');
            exit();
        }
        $user = M('user')->where(array('username' => $username))->find();
        p($user);
        if (!$user || $user['username'] != $username || $user['password'] != $password) {
            $this->error('用户名或密码错误！');
        }
        if ($_SESSION['verify'] != md5($_POST['verify'])) {
            $this->error("验证码错误！");
        }
        $data = array(
            'uid' => $user['uid'],
            'time' => time(),
            'loginip' => get_client_ip(),
        );
        
        M('user')->save($data);
        
        session('uid',$user['uid']);
        session('username',$user['username']);
        session('logintime',date('Y-m-d H:i:s',$user['time']));
        session('loginip',$user['loginip']);
        
        redirect(__GROUP__);
    }
    
    Public function verify() {
        import('ORG.Util.Image');
        Image::buildImageVerify(3,1,'png',30);
    }
}



?>