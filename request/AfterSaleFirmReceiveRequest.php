<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleFirmReceiveRequest extends BaseRequest
{

	/**
	 * 商家确认是否收到退货
	 * 用户填写退货物流后，商家处理，确认是否收到退货
	 * 注：货到付款订单，调此接口确认收货，必须上传退款凭证图片。售后状态会变为24（退货成功-商户已退款）
	 */
	public function __construct()
	{
		$this->method = 'afterSale.firmReceive';
		$this->path = '/afterSale/firmReceive';
		//字段无意义，传1即可，后续下线
		$this->paramJson['register'] = '1';
		$this->paramJson['package'] = '1';
		$this->paramJson['facade'] = '1';
		$this->paramJson['function'] ='1';
	}

	/**
	 * 子订单ID
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}

	/**
	 * 处理方式
	 * @param string $type 1：确认收货并退款,2：拒绝
	 */
	public function setType($type)
	{
		$this->paramJson['type'] = (string)$type;
	}

	/**
	 * 拒绝原因 
	 * type = 2 时需要选择拒绝原因；具体各个可选值对应的拒绝原因见下表
	 * 1	未收到货（未填写退货单号）
	 * 2	退货与原订单不符（商品不符、退货地址不符）
	 * 3	退回商品影响二次销售/订单超出售后时效（订单完成超7天）
	 * 4	买家误操作/取消申请
	 * 5	已与买家协商补偿，包括差价、赠品、额外补偿
	 * 6	已与买家协商补发商品/已与买家协商换货
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		$this->paramJson['comment'] = (string)$comment;
	}

	/**
	 * 凭证图片
	 * @param string $evidence 值传图片的url地址
	 */
	public function setEvidence($evidence)
	{
		$this->paramJson['evidence'] = (string)$evidence;
	}
}
