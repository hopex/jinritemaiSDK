<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleBuyerReturnRequest extends BaseRequest
{

	/**
	 * 商家处理退货申请
	 * 订单已发货，用户申请售后退货，商家处理
	 */
	public function __construct()
	{
		$this->method = 'afterSale.buyerReturn';
		$this->path = '/afterSale/buyerReturn';
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
	 * 是否使用模版短信发送短信
	 * @param string $smsId 1：是,0：否
	 */
	public function setSmsId($smsId)
	{
		$this->paramJson['sms_id'] = (string)$smsId;
	}

	/**
	 * 商家退货物流收货地址id
	 * 不传则使用默认售后收货地址
	 * @param string $addressId
	 */
	public function setAddressId($addressId)
	{
		$this->paramJson['address_id'] = (string)$addressId;
	}

	/**
	 * 处理方式
	 * @param string $type 1：同意用户退货申请,2：拒绝用户退货申请
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
	 * type = 2 时需要上传图片凭证，仅支持1张图片
	 * @param string $evidence 值传图片的url地址
	 */
	public function setEvidence($evidence)
	{
		$this->paramJson['evidence'] = (string)$evidence;
	}
}
