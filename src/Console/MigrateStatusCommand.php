<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate:status command.
 */
final class MigrateStatusCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate:status';
    }

    public function description(): string
    {
        return 'Run migrate:status (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
