<?php
namespace VscInit;

class helper
{
    //用户昵称
    public  $user = '';
    //用户操作
    private $operation = '';
    //操作码
    private $password;

    function  __construct($user,$operation,$password)
    {
        $this->user = $user;
        $this->operation = $operation;
        $this->password = $password;
        $this->check();
    }

    //验证用户码
    public function check()
    {
        if(!$this->password === 666666)
        {
            return '操作码错误';
        }else {
            $this->hello($this->operation);
        }
    }
    //输出
    public function hello($operation)
    {
        echo $operation;
    }
}