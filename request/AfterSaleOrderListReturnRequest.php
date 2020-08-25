<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleOrderListReturnRequest extends BaseRequest
{

	/**
	 * 获取有退货的订单列表
	 * 订单已发货，用户申请售后退货后，通过该接口可拉取该类订单。
	 */
	public function __construct()
	{
		$this->method = 'afterSale.orderList';
		$this->path = '/afterSale/orderList';
	}

	/**
	 * 类型,默认为1.全部
	 * @param string $type 1.全部 2.待审核 3.待收货 4.客服仲裁 5.已完成
	 * 2对应子订单状态6, 23, 30
	 * 3对应子订单状态11
	 * 4对应子订单状态8, 13, 34
	 * 5对应子订单状态9, 22, 24, 37, 39
	 */
	public function setType($type)
	{
		$this->paramJson['type'] = (string)$type;
	}

	/**
	 * 开始时间
	 * @param string $startTime 2018/06/03 00:00:00
	 */
	public function setStartTime($startTime)
	{
		$this->paramJson['start_time'] = (string)$startTime;
	}

	/**
	 * 结束时间
	 * @param string $endTime 2018/06/03 00:01:00
	 */
	public function setEndTime($endTime)
	{
		$this->paramJson['end_time'] = (string)$endTime;
	}

	/**
	 * 订单排序类型
	 * @param string $orderBy 1、默认按订单创建时间搜索 2、值为“create_time”：按订单创建时间；值为“update_time”：按订单更新时间
	 */
	public function setOrderBy($orderBy)
	{
		$this->paramJson['order_by'] = (string)$orderBy;
	}

	/**
	 * 订单排序方式
	 * @param string $isDesc desc(最近的在前)，默认为asc（最近的在后）
	 */
	public function setIsDesc($isDesc)
	{
		$this->paramJson['is_desc'] = (string)$isDesc;
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
	 * @param string $page 默认为10，最大100
	 */
	public function setSize($size)
	{
		$this->paramJson['size'] = (string)$size;
	}
}
