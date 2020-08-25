<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderServiceListRequest extends BaseRequest
{

	/**
	 * 获取服务请求列表
	 * 获取客服向店铺发起的服务请求列表
	 */
	public function __construct()
	{
		$this->method = 'order.serviceList';
		$this->path = '/order/serviceList';
	}

	/**
	 * 操作状态
	 * @param string $status 1、不传代表获取全部服务请求,2、操作状态：0待处理，1已处理
	 */
	public function setStatus($status)
	{
		$this->paramJson['status'] = (string)$status;
	}

	/**
	 * 开始时间时间戳
	 * @param string $startTime 1566382338
	 */
	public function setStartTime($startTime)
	{
		$this->paramJson['start_time'] = (string)$startTime;
	}

	/**
	 * 结束时间时间戳
	 * @param string $endTime 1566382338
	 */
	public function setEndTime($endTime)
	{
		$this->paramJson['end_time'] = (string)$endTime;
	}

	/**
	 * 是否获取分销商服务申请
	 * @param string $supply 0获取本店铺的服务申请，1获取分销商的服务申请
	 */
	public function setSupply($supply)
	{
		$this->paramJson['supply'] = (string)$supply;
	}

	/**
	 * 页数
	 * @param string $page 默认为0，第一页从0开始
	 */
	public function setPage($page)
	{
		$this->paramJson['page'] = (string)$page;
	}

	/**
	 * 每页订单数
	 * @param string $size 默认为10，最大100
	 */
	public function setSize($size)
	{
		$this->paramJson['size'] = (string)$size;
	}
}
