<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate:rollback command.
 */
final class MigrateRollbackCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate:rollback';
    }

    public function description(): string
    {
        return 'Run migrate:rollback (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
