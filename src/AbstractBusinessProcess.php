<?php

declare(strict_types=1);

namespace BombenProdukt\BusinessProcess;

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
