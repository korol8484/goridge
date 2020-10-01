<?php

declare(strict_types=1);

namespace Spiral\Goridge;

use Throwable;

/**
 * Interface RelayClose
 * @package Spiral\Goridge
 */
interface RelayClose
{
    /**
     * @return void
     * @throws Throwable
     */
    public function close(): void;
}
