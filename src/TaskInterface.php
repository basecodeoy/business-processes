<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\BusinessProcess;

interface TaskInterface
{
    public function handle(mixed $passable, \Closure $next): mixed;
}
