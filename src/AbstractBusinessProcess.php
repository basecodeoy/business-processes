<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\BusinessProcess;

use Illuminate\Support\Facades\Pipeline;

abstract class AbstractBusinessProcess
{
    public function run(mixed $passable): mixed
    {
        return Pipeline::send($passable)
            ->through($this->tasks())
            ->thenReturn();
    }

    /**
     * @return array<class-string<TaskInterface>>
     */
    abstract protected function tasks(): array;
}
