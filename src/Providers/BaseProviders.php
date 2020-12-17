<?php

/**
 * @desc 服务提供者基类
 * @author ShaoBo Wan (Tinywan)
 */

declare(strict_types=1);

namespace Tinywan\Wiot\Providers;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Stream;
use Tinywan\Wiot\Config;
use Tinywan\Wiot\Contracts\ProviderInterface;

abstract class BaseProviders implements ProviderInterface
{

}