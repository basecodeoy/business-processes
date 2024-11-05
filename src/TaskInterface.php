<?php

declare(strict_types=1);

namespace BaseCodeOy\BusinessProcess;

use Closure;

interface TaskInterface
{
    public function handle(mixed $passable, Closure $next): mixed;
}
