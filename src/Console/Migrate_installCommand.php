<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * migrate:install command.
 */
final class Migrate_installCommand implements CommandInterface
{
    public function name(): string
    {
        return 'migrate:install';
    }

    public function description(): string
    {
        return 'Run migrate:install (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
