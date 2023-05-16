<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\DowngradeLevelSetList;

return static function (RectorConfig $rectorConfig) {
    $rectorConfig->paths([
        __DIR__
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_70);
    $rectorConfig->sets([
        DowngradeLevelSetList::DOWN_TO_PHP_70
    ]);

    $rectorConfig->skip([
        \Rector\DowngradePhp72\Rector\ClassMethod\DowngradeParameterTypeWideningRector::class
    ]);
};
