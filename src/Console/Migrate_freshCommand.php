<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate:fresh command.
 */
final class Migrate_freshCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate:fresh';
    }

    public function description(): string
    {
        return 'Run migrate:fresh (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
