<?php

declare(strict_types=1);

namespace MaplePHP\Core\Support;

use Psr\Container\ContainerInterface;

abstract class ServiceProvider
{

	/**
	 * 
	 * @param ContainerInterface $container
	 * @return void
	 */
	abstract public function register(ContainerInterface $container): void;

	public function boot(): void
	{

	}
}