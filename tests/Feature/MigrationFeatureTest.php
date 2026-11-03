<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Migration\Tests\Feature;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Database\Migration\Migrator;
use Tavaan\Engine\Database\Migration\Migration;

/**
 * Feature tests for the migration engine.
 */
final class MigrationFeatureTest extends TestCase
{
    public function test_migrator_run_executes_pending(): void
    {
$m = new Migrator();
        $m->getRepository()->add(new class("2026_01_01") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $executed = $m->run();
        $this->assertCount(1, $executed);
        $this->assertSame("2026_01_01", $executed[0]);
    }

    public function test_migrator_rollback_reverses_last(): void
    {
$m = new Migrator();
        $m->getRepository()->add(new class("1") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->getRepository()->add(new class("2") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->run();
        $rolled = $m->rollback(1);
        $this->assertCount(1, $rolled);
        $this->assertSame("2", $rolled[0]);
    }

    public function test_migrator_status_shows_ran_and_pending(): void
    {
$m = new Migrator();
        $m->getRepository()->add(new class("1") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->getRepository()->add(new class("2") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->run();
        $status = $m->status();
        $this->assertCount(2, $status["ran"]);
        $this->assertCount(0, $status["pending"]);
    }

    public function test_migrator_reset_rolls_back_all(): void
    {
$m = new Migrator();
        $m->getRepository()->add(new class("1") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->getRepository()->add(new class("2") extends Migration {
            public function up(): void {}
            public function down(): void {}
        });
        $m->run();
        $rolled = $m->reset();
        $this->assertCount(2, $rolled);
    }
}
