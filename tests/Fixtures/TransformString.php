<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Fixtures;

use BaseCodeOy\BusinessProcess\AbstractBusinessProcess;

final class TransformString extends AbstractBusinessProcess
{
    protected function tasks(): array
    {
        return [
            ToSnakeCase::class,
            ToUpperCase::class,
            ToString::class,
        ];
    }
}
