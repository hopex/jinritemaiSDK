<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SpecDelRequest extends BaseRequest
{

	/**
	 * 删除规格
	 */
	public function __construct()
	{
		$this->method='spec.del';
		$this->path='/spec/del';
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
