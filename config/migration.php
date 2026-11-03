<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Migration Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور migration — همهٔ کلیدهای مستندشده در `docs/03-engines/migration.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/migration.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('MIGRATION_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('MIGRATION_PREFIX', 'migration:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('MIGRATION_LOG_CHANNEL', 'migration'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];