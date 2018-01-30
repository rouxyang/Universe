<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/1/28
 * Time: 下午3:44
 */

namespace Universe\Exceptions\Handlers;


use Universe\Swoole\Http\Request;
use Universe\Swoole\Http\Response;

abstract class Handler
{
    /**
     * @var \Exception
     */
    protected $exception;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    public function set($exception, Request $request, Response $response)
    {
        $this->exception = $exception;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * 异常处理
     *
     * @return bool false 终止
     */
    abstract public function handle();
}