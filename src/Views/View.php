<?php

namespace Atom\Views;

use Atom\Views\ViewFactory;
use Atom\Views\Exception\ViewException;

class View extends ViewFactory
{
    protected static $viewFactory;

    /**
     * View construct
     * @param ViewFactory|null $viewFactory
     */
    public function __construct(string $directory, array $data, ViewFactory $viewFactory = null)
    {
        static::$viewFactory = $viewFactory ?? static::$viewFactory;
        // static::$viewFactory = static::$viewFactory ?? parent;
        parent::__construct($directory, $data);
    }

    /**
     * Render view
     * @param  string $directory
     * @param  mixed $data
     * @return void
     */
    public static function render(string $directory, $data)
    {
        if (!is_array($data)) {
            throw new ViewException(ViewException::ERR_MSG_INVALID_ARG);
        }
        static::$directory = $directory;
        static::$data = $data;
        static::createView();
    }
}
