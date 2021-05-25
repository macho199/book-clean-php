<?php

namespace CleanPhp\Invoicer\Persistence\Zend\DataTable;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\HydratorInterface;

class TableGatewayFactory
{
    public function createGateway(
        Adapter $dbadapter,
        HydratorInterface $hydrator,
        $object,
        $table
    ) {
        $resultSet = new HydratingResultSet($hydrator, $object);
        return new TableGateway($table, $dbadapter, null, $resultSet);
    }
}
