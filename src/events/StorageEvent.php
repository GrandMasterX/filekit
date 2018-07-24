<?php

namespace grandmasterx\filekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package grandmasterx\filekit\events
 * @author GrandMasterX <zgrandmasterz@gmail.com>
 */
class StorageEvent extends Event
{
    /**
     * @var \League\Flysystem\FilesystemInterface
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
}
