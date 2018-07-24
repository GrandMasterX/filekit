<?php
namespace grandmasterx\filekit\events;
use yii\base\Event;

/**
 * Class UploadEvent
 * @package grandmasterx\filekit\events
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
