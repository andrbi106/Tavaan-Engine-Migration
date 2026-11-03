<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Database\Migration\Migrator;
use Tavaan\Engine\Database\Migration\MigratorServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Migrator.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class MigratorTest extends TestCase
{
    private Migrator $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Migrator($config);
    }

    /**
     * T-01: migrate → up اجرا، در repository ثبت
     */
    public function test_t01_migrate__up___repository(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: rollback → down، ترتیب معکوس
     */
    public function test_t02_rollback__down__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Lock: دو migrator همزمان → یکی صبر/خطا
     */
    public function test_t03_lock__migrator____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: dry-run بدون تغییر DB
     */
    public function test_t04_dryrun___db(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: batch numbering
     */
    public function test_t05_batch_numbering(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: migrate:fresh در prod بدون force → رد
     */
    public function test_t06_migratefresh__prod__forc(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Expand-Contract روی داده
     */
    public function test_t07_expand_contract__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}