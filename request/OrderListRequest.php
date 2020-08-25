<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderListRequest extends BaseRequest
{

	/**
	 * 获取订单列表
	 * 支持按照子订单状态和订单的创建时间、更新时间来检索订单，获取订单列表
	 */
	public function __construct()
	{
		$this->method = 'order.list';
		$this->path = '/order/list';
	}

	/**
	 * 子订单状态
	 * @param string $orderStatus
	 *  1	在线支付订单待支付；货到付款订单待确认
	 *  2	备货中（只有此状态下，才可发货）
	 *  3	已发货
	 *  4	已取消：1.用户未支付时取消订单；2.用户超时未支付，系统自动取消订单；3.货到付款订单，用户拒收
	 *  5	已完成：1.在线支付订单，商家发货后，用户收货、拒收或者15天无物流更新；2.货到付款订单，用户确认收
	 */
	public function setOrderStatus($orderStatus)
	{
		$this->paramJson['order_status'] = (string)$orderStatus;
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
