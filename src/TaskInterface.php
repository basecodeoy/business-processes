<?php

declare(strict_types=1);

namespace BombenProdukt\BusinessProcess;

use Closure;

interface TaskInterface
{
    public function handle(mixed $passable, Closure $next): mixed;
}
