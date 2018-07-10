<?php

namespace grandmasterx\flekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package grandmasterx\flekit\events
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
