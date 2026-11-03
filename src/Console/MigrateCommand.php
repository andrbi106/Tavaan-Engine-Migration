<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate command.
 */
final class MigrateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate';
    }

    public function description(): string
    {
        return 'Run migrate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
