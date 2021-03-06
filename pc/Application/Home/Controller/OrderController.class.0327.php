<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends BaseController {
     
    //下订单
    public function add()
    {
        $name = I('name'); //姓
        $gender = I('gender', 0, 'intval'); //性别 0女 1男
        //$birthday = I('birthday'); //生日阳历
        $birthtime = I('birthtime'); //出生时
        $birthmin = I('birthmin'); //出生分
        $phone = I('phone'); //参数一
        $ver = I('ver'); //参数二
        $data=I('');
        //dump($data);die;
        $birthday =$data['birthday'].'-'.$data['birthm'].'-'.$data['birthd'];
        if(empty($name)){
            $this->error('请填写姓名', U('index/index')); 
        }
        if(empty($birthday)){
            $this->error('请选择生日', U('index/index')); 
        }
        if($birthtime===''){
            $this->error('请选择出生时', U('index/index')); 
        }
        if($birthmin===''){
            $this->error('请选择出生分', U('index/index')); 
        }
       if(empty($phone)){
            $this->error('参数错误', U('index/index')); 
        }        
        $orderext = M('order')->where("phone = '%s'", array($phone))->field('order_no,price,oldprice')->find(); //查找是否存在该订单
        if(empty($orderext)){                       

            $orderNo = getorderno(); //订单号
            $price = config_lists('price'); //价格
            $oldprice = config_lists('old_price'); //原价格            
            $arr = array(
                'order_no' => $orderNo,
                'name' => $name,
                'gender' => $gender,
                'birthday' => $birthday,
                'birthtime' => $birthtime,
                'birthmin' => $birthmin,
                'phone' => $phone,
                'ver' => $ver,
                'state' => 0,
                'price' => $price,
                'oldprice' => $oldprice,
                'createtime' => time(),
            );
            $res = M('order')->add($arr); //新增订单
        }else{
            $orderNo = $orderext['order_no']; //订单号
            $price = $orderext['price']; //价格
            $oldprice = $orderext['oldprice']; //原价格  
        }


        $birthdayarr = explode('-', $birthday);
        $info = array(
            'name' => $name,
            'gender' => $gender == 1?'男':'女',
            'birthdayy' =>$birthdayarr[0],
            'birthdaym' =>$birthdayarr[1],
            'birthdayd' =>$birthdayarr[2],
            'birthdayh' =>$birthtime,
            'birthdayi' =>$birthmin,
            'orderNo' =>$orderNo,
            'price' =>$price,
            'oldprice' =>$oldprice,
        ); 

        $this->assign('info', $info);

    	$this->display();

    }

    //订单详情[从订单详情进入]
    public function readx()
    {
        $num = I('orderno'); //订单编号
        $info = getorderbyno($num); //订单详情
        if($info['state'] == 0){
            $info['statestr'] = '订单状态确认中...'; 
        }else if($info['state'] == 1){
            $info['statestr'] = '订单状态已支付...'; 
        }else{
            $info['statestr'] = '订单状态未知...'; 
        }

        $this->assign('info', $info);
        $this->display();
    }
    
    //订单详情[从订单列表进入]
    public function reado()
    {
        $num = I('orderno'); //订单编号
        $info = getorderbyno($num); //订单详情
        if($info['state'] == 0){
            $info['statestr'] = '您查询的订单还未被支付'; 
        }else if($info['state'] == 1){
            $info['statestr'] = '您查询的订单已被支付'; 
        }else{
            $info['statestr'] = '您查询的订单未知'; 
        }
        
        $this->assign('info', $info);
        $this->display();
    }

    //美名列表
    public function mlist()
    {

        $orderno = I('orderno'); //订单号

        if(!empty($orderno)){
            $info =M('order')->where("order_no = '%s'", array($orderno))
                             ->field("name,gender,birthday,birthtime,birthmin,phone,ver,state")
                             ->find();
        }
        if($info['state'] !=1){
            $this->redirect('order/add', array('name'=>$info['name'], 'gender'=>$info['gender'],'birthday'=>$info['birthday'], 'birthtime'=>$info['birthtime'], 'birthmin'=>$info['birthmin'], 'xing'=>$info['name'],'phone'=>$info['phone'], 'ver'=>$info['ver']));  
        }

        $fullnamearr = getlist($info['name'],$info['gender']); //获取名字列表
        
        $name = $info['name'];

        $this->assign('fullname',$fullnamearr);
        $this->assign('name',$name);
		$this->assign('orderno', $orderno);
    	$this->display();

    }

    //ajax获取名字列表
    public function getmlist()
    {
        $orderno = I('orderno'); //订单号
        $page = I('page', 1, 'intval');
        if(!empty($orderno)){
            $info =M('order')->where("order_no = '%s'", array($orderno))
                             ->field("name,gender,birthday,birthtime,birthmin,phone,ver,state")
                             ->find();
        }
        if($info['state'] ==1){
            $fullnamearr = getlist($info['name'],$info['gender'], $page); //获取名字列表
            if(!empty($fullnamearr)){
                $fullnamearr[0]['xing'] =  $info['name'];
            }
            echo json_encode($fullnamearr); 
            die(); 
        }  
        echo json_encode(array()); 
        die();

    }

    //美名详情
    public function minfo()
    {
        $xing = !empty($_GET['xing'])?$_GET['xing']:'';
        $ming = !empty($_GET['ming'])?$_GET['ming']:''; 
		$score = !empty($_GET['score'])?intval($_GET['score']):0;

		if(empty($xing) || empty($ming)){
            $this->error("姓名不合法", U('index/index'));		
		}
		$xing = iconv('GB2312', 'UTF-8', $xing);
		$ming = iconv('GB2312', 'UTF-8', $ming);

        if(!preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$xing.$ming)){ 
            $this->error("姓名不合法", U('index/index'));
        }

        $name = mbStrSplit($xing.$ming);
        $namecount = count($name);
        if($namecount <2 || $namecount >4){
            $this->error("姓名不合法", U('index/index'));
        }

        Vendor('NameSolution.NameSolution');

        $info=new \NameSolution($name);
        $info = (array)$info;
        if($score >=90 && $score <=100){
            $info['score'] =  $score;
            $info['scoreDesc'] = '你的名字取得非常棒。再辅以五行后天开运法，相信会对您的运势有积极的促进！';
        }
		
        $this->assign('info',$info);
        $this->assign('name',$name);
        $this->assign('xing',$xing);
        $this->assign('ming',$ming);
	
    	$this->display();
    }

    //历史订单
    public function pchistory()
	{

	    $this->display();
	}
    
    //返回订单状态
    public function orderstate()
    {
        $orderno = I('orderno');
        $info = getorderbyno($orderno);
        echo json_encode(['code'=>$info['state']]);

    }
    

	
	
}