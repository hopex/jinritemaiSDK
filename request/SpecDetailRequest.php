<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SpecDetailRequest extends BaseRequest
{

	/**
	 * 获取规格详情
	 */
	public function __construct()
	{
		$this->method='spec.specDetail';
		$this->path='/spec/specDetail';
	}

	/**
	 * 规格id 
	 * @param string $id (spec_id)
	 */
	public function setId($id)
	{
		$this->paramJson['id']=(string)$id;
	}

}
