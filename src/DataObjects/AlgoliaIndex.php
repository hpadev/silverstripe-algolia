<?php

namespace Wilr\SilverStripe\Algolia\DataObject;

use SilverStripe\ORM\DataObject;

class AlgoliaIndex extends DataObject
{
    private static $table_name = 'AlgoliaIndex';

    private static $db = [
        'ObjectID' => 'Int',
        'ObjectClassName' => 'Varchar(255)',
        'ObjectLocale' => 'Varchar(10)',
        'AlgoliaIndexed' => 'Datetime',
        'AlgoliaUUID' => 'Varchar(200)',
        'AlgoliaError' => 'Varchar(512)',
    ];

    private static $indexes = [
        'Object' => [
            'type' => 'unique',
            'columns' => ['ObjectID', 'ObjectClassName', 'ObjectLocale'],
        ],
        'AlgoliaUUID' => [
            'type' => 'unique',
        ],
    ];
}
