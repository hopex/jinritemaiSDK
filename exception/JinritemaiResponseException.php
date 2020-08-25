<?php

namespace jinritemai\exception;

use Exception;

class JinritemaiResponseException extends Exception
{
    public function __construct($message='',$code=99999)
    {
        parent::__construct('API响应异常:'.$message.'('.$code.')',$code);
	}
}
