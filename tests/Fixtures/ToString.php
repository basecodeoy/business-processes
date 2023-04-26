<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use BombenProdukt\BusinessProcess\TaskInterface;
use Closure;

final class ToString implements TaskInterface
{
    public function handle(mixed $passable, Closure $next): mixed
    {
        return $next($passable->toString());
    }
}
