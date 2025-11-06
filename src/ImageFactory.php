<?php

namespace Huozi\ImageFactory;

use Illuminate\Support\Manager;

class ImageManager extends Manager
{

    private $app;

    private $image;

    protected $handlers = [];

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function getDefaultDriver()
    {
        return $this->app->config('filesystems.default');
    }

    protected function createOssDriver()
    {
        return new OssDriver($this->image);
    }

    protected function createPublicDriver()
    {
        return new LocalDriver($this->image);
    }

    protected function createLocalDriver()
    {
        return new LocalDriver($this->image);
    }

    public function image($image)
    {
        $this->driver()->image($image);
        return $this;
    }

    public function __toString()
    {
        return $this->driver()->render();
    }
}