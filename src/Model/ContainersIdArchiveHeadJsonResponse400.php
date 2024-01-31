<?php

namespace Docker\API\Model;

class ContainersIdArchiveHeadJsonResponse400 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     *
     * @var string|null
     */
    protected $message;
    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}