<?php

declare(strict_types=1);

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
