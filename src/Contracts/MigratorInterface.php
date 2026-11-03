<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Contracts;

/**
 * قرارداد Migrator.
 *
 * @see \Tavaan\Engine\Database\Migration\Migrator
 * @api 1.0
 */
interface MigratorInterface
{
    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;

    /**
     * متد rollback.
     *
     * @return mixed
     */
    public function rollback(/* ... */): mixed;

    /**
     * متد refresh.
     *
     * @return mixed
     */
    public function refresh(/* ... */): mixed;

    /**
     * متد fresh.
     *
     * @return mixed
     */
    public function fresh(/* ... */): mixed;

    /**
     * متد status.
     *
     * @return mixed
     */
    public function status(/* ... */): mixed;

    /**
     * متد install.
     *
     * @return mixed
     */
    public function install(/* ... */): mixed;
}