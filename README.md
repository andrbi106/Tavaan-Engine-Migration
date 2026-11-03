# Tavaan Engine — Migration

> **مهاجرت دیتابیس** — موتور Migration در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.migration` |
| نام | `Migration` |
| عنوان فارسی | مهاجرت دیتابیس |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Database\Migration` |
| نوع | `engine` |

## توضیحات

Migrator در engines/database/src/Migration (namespace مطابق DOC-049)؛ دستورات CLI در src/Console.

## کلاس‌های اصلی

- `src/Console/MigrateCommand.php`
- `src/Console/MigrateFreshCommand.php`
- `src/Console/MigrateInstallCommand.php`
- `src/Console/MigrateRefreshCommand.php`
- `src/Console/MigrateRollbackCommand.php`
- `src/Console/MigrateStatusCommand.php`
- `src/migration.php`

## Service Providerها

- `Tavaan\Engine\Database\Migration\MigratorServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `database`
- `schema`
- `console`

## جداول دیتابیس

- `tvn_migrations`

## دستورات CLI

- `migrate`
- `migrate:rollback`
- `migrate:status`
- `migrate:fresh`
- `migrate:refresh`
- `migrate:install`

## پیکربندی

- فایل پیکربندی: `None`
- کلید: `None`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Migration.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Migration`** (این مخزن) | موتور Migration |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
