<?php declare(strict_types=1);

namespace Shopware\Core\Migration\V6_3;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-internal - Migrations will be internal in v6.5.0
 */
class Migration1599720163AddEventActiveColumn extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1599720163;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('ALTER TABLE `event_action` ADD `active` tinyint(1) NOT NULL DEFAULT 1 AFTER `config`;');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
