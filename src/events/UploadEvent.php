<?php
namespace grandmasterx\flekit\events;
use yii\base\Event;

/**
 * Class UploadEvent
 * @package grandmasterx\flekit\events
 * @author GrandMasterX <zgrandmasterz@gmail.com>
 */
class UploadEvent extends Event
{
    /**
     * @var mixed
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
    /**
     * @var \League\Flysystem\File|null
     */
    public $file;
}
