<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Tests\Dbal;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

/**
 * @requires extension pdo_sqlite
 * @group integration
 * @group sqlite
 */
class SQLite_AclProviderTest extends AclProviderTest
{
    /** @return Connection */
    protected function createConnection()
    {
        return DriverManager::getConnection([
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ]);
    }
}
