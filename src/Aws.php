<?php

namespace Tinywan\Wiot;

class Aws 
{
    /**
     * Config.
     *
     * @var Config
     */
    protected array $config;

    /**
     * Bootstrap.
     *
     * @author ShaoBo Wan (Tinywan)
     *
     * @throws Exception
     */
    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }
}
