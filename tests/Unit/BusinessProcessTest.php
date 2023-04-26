<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\Fixtures\TransformString;

it('should run the business process', function (): void {
    $process = new TransformString();

    $actual = $process->run('screaming snake case');

    expect($actual)->toBe('SCREAMING_SNAKE_CASE');
});
