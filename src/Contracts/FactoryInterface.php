<?php

/**
 * @desc 工厂接口
 * @author ShaoBo Wan (Tinywan)
 */

declare(strict_types=1);

namespace Tinywan\Wiot\Contracts;

interface FactoryInterface
{
    /**
     * @param string $driver
     *
     * @return \Tinywan\Wiot\Contracts\ProviderInterface
     */
    public function create(string $driver): ProviderInterface;
}
