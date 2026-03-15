<?php

declare(strict_types=1);

namespace MaplePHP\Core\Middlewares;

use MaplePHP\Container\Autowire;
use MaplePHP\Core\Exceptions\HttpException;
use MaplePHP\Core\Interfaces\ErrorPageInterface;
use MaplePHP\Core\Render\Errors\SimpleErrorPage;
use MaplePHP\Http\ResponseFactory;
use MaplePHP\Http\StreamFactory;
use MaplePHP\Validate\Inp;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class TestMiddleware implements MiddlewareInterface
{

	private ContainerInterface $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		$this->container->set("TestMiddleware", "Hello World!");
		return $handler->handle($request);
	}
}
