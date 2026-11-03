<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate:refresh command.
 */
final class MigrateRefreshCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate:refresh';
    }

    public function description(): string
    {
        return 'Run migrate:refresh (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
