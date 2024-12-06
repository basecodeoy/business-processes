<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Fixtures;

use BaseCodeOy\BusinessProcess\TaskInterface;
use Illuminate\Support\Stringable;

final class ToUpperCase implements TaskInterface
{
    /**
     * @param Stringable $passable
     */
    #[\Override()]
    public function handle(mixed $passable, \Closure $next): mixed
    {
        return $next($passable->upper());
    }
}
