<?php

namespace extensions\core;

use nadir2\core\RunnableInterface;

/**
 * This is the abstract auth class.
 * @author Leonid Selikhov
 */
abstract class AbstractAuth implements RunnableInterface
{

    /**
     * The method checks if the user auth is valid.
     * @return boolean
     */
    abstract public function isValid(): bool;

    /**
     * The method contains the code which invokes if the auth was failed.
     */
    abstract public function onFail();
}
