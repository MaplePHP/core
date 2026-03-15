<?php

declare(strict_types=1);

namespace MaplePHP\Core\Providers;

use MaplePHP\Core\Support\ServiceProvider;
use Psr\Container\ContainerInterface;

class TestServiceProvider extends ServiceProvider
{
	/**
	 * Just a test service provider
	 *
	 * @param ContainerInterface $container
	 * @return void
	 */
	public function register(ContainerInterface $container): void
	{
		$container->set("TestServiceProvider", "Hello World!");
	}
}