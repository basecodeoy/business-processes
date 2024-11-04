<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use BaseCodeOy\BusinessProcess\TaskInterface;
use Closure;
use Illuminate\Support\Str;

final class ToSnakeCase implements TaskInterface
{
    public function handle(mixed $passable, Closure $next): mixed
    {
        return $next(Str::of($passable)->snake());
    }
}
