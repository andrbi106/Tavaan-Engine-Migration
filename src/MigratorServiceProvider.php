<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Database\Migration\Contracts\MigratorInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * MigratorServiceProvider — ثبت سرویس‌های موتور Migrator.
 */
final class MigratorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(MigratorInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Migrator($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\MigrateCommand::class;
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\Migrate_rollbackCommand::class;
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\Migrate_statusCommand::class;
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\Migrate_freshCommand::class;
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\Migrate_refreshCommand::class;
        $this->commands[] = \Tavaan\Engine\Database\Migration\Console\Migrate_installCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            MigratorInterface::class,
        ];
    }
}