<?php

namespace jinritemai\exception;

use Exception;

class JinritemaiRequestException extends Exception
{
    public function __construct($message='',$code=99999)
    {
        parent::__construct('API请求异常:'.$message,$code);
	}
}
