<?php
namespace Home\Controller;

use Think\Controller;

class PayController extends BaseController
{

    //生成微信支付二维码
    public function wxpay()
    {
        $orderno = I('orderno'); //订单号
        $info    = getorderbyno($orderno); //订单详情
        if ($info['state'] == 0) {
            $order = array(
                'body'         => '起名网',
                'detail'       => '起名网',
                'total_fee'    => $info['price'] * 100, //分
                'out_trade_no' => strval($orderno),
                'product_id'   => $info['id'],
            );
            if (Mobile_Detect()->isWechat()) {
                header("Content-type: text/html; charset=utf-8");
                $parameters = wxjspay($order);
                $url        = "/order/mlist.html?orderno=$orderno";
                $this->assign('successurl', $url);
                $this->assign('errorurl', $url);
                $this->assign('jsApiParameters', $parameters);
                $this->display('wxjsapi');
            } else if (Mobile_Detect()->isMobile()) {
                wxh5pay($order);
            } else {
                weixinpay($order);
            }
        } else {
            echo '已付款';
        }

    }

    /**
     * 支付宝
     */
    public function alipay()
    {
        $orderno = I('orderno'); //订单号
        $info    = getorderbyno($orderno); //订单详情
        if ($info['state'] == 0) {
            $data = array(
                'out_trade_no' => strval($orderno),
                'price'        => $info['price'],
                'subject'      => '起名网',
            );

            if (Mobile_Detect()->isMobile()) {
                alipay($data, 'wap');
            } else {
                alipay($data);
            }
        } else {
            echo '已付款';
        }
    }

    //异步回调
    public function wxnotify()
    {
        // 导入微信支付sdk
        Vendor('Weixinpay.Weixinpay');
        $wxpay  = new \Weixinpay();
        $result = $wxpay->notify();
        //$result['out_trade_no'] = 'CS151494351797648';
        if ($result) {
            // 验证成功 修改数据库的订单状态等 $result['out_trade_no']为订单id
            $this->handleOrder($result['out_trade_no']);

        }
    }

    /**
     * return_url接收页面
     */
    public function alireturn()
    {
        // 引入支付宝
        vendor('Alipay.AlipayNotify', '', '.class.php');
        $config = $config = C('ALIPAY_CONFIG');
        $notify = new \AlipayNotify($config);
        // 验证支付数据
        $status = $notify->verifyReturn();
        if ($status) {
            // 下面写验证通过的逻辑 比如说更改订单状态等等 $_GET['out_trade_no'] 为订单号；
            $orderno = I('out_trade_no');
            $this->handleOrder($orderno);

            $this->success('支付成功', U('order/mlist', array('orderno' => $orderno)));
        } else {
            $this->success('支付失败', U('order/mlist', array('orderno' => $orderno)));
        }
    }

    /**
     * notify_url接收页面
     */
    public function alinotify()
    {
        // 引入支付宝
        vendor('Alipay.AlipayNotify', '', '.class.php');
        $config       = $config       = C('ALIPAY_CONFIG');
        $alipayNotify = new \AlipayNotify($config);
        // 验证支付数据
        $verify_result = $alipayNotify->verifyNotify();
        if ($verify_result) {
            echo "success";
            // 下面写验证通过的逻辑 比如说更改订单状态等等 $_POST['out_trade_no'] 为订单号；
            $orderno = I('post.out_trade_no');
            $this->handleOrder($orderno);

        } else {
            echo "fail";
        }
    }

    /**
     * 处理订单
     * @param  [type] $order_no [订单编号]
     * @return [type]           [description]
     */
    private function handleOrder($order_no)
    {
        $res = M('order')->where("order_no='%s'", array($order_no))->field("state,id")->find();
        if ($res['state'] == 0) {
            $data = array(
                'state'   => 1,
                'paytime' => time(),
            );
            M('order')->where(array('id' => $res['id']))->save($data);
        }
    }

}
