<?php

use Yajra\Pdo\Oci8;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function test_successful_connection()
    {
        $dsn      = 'oci:dbname=127.0.0.1:49161/xe';
        $username = 'system';
        $password = 'oracle';

        $connection = new Oci8($dsn, $username, $password);

        $this->assertInstanceOf(Oci8::class, $connection);
    }
}
