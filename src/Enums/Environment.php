<?php

declare(strict_types=1);

namespace MaplePHP\Core\Enums;

enum Environment: int
{
	case DEV = 0;
	case TEST = 1;
	case STAGE = 2;
	case PROD = 3;

	function name(): string
	{
		return match ($this) {
			self::DEV => 'development',
			self::TEST => 'testing',
			self::STAGE => 'staging',
			self::PROD => 'production'
		};
	}
}
