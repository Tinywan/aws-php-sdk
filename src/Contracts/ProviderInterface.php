<?php
/**
 * @desc 工厂接口
 * @author ShaoBo Wan (Tinywan)
 */

declare(strict_types=1);

namespace Tinywan\Wiot\Contracts;

use Tinywan\Wiot\User;

interface ProviderInterface
{
    public function redirect(?string $redirectUrl = null): string;

    public function userFromCode(string $code): User;

    public function userFromToken(string $token): User;
}