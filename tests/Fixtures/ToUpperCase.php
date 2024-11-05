<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use BaseCodeOy\BusinessProcess\TaskInterface;
use Closure;
use Illuminate\Support\Stringable;

final class ToUpperCase implements TaskInterface
{
    /**
     * @param Stringable $passable
     */
    public function handle(mixed $passable, Closure $next): mixed
    {
        return $next($passable->upper());
    }
}
