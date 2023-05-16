<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\DowngradeLevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__
    ]);


    $rectorConfig->sets([
        DowngradeLevelSetList::DOWN_TO_PHP_70
    ]);
    $rectorConfig->phpVersion(PhpVersion::PHP_70);
};
