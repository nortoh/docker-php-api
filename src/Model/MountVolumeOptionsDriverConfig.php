<?php

namespace Docker\API\Model;

class MountVolumeOptionsDriverConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string|null
     */
    protected $name;
    /**
     * key/value map of driver specific options.
     *
     * @var array<string, string>|null
     */
    protected $options;
    /**
     * Name of the driver to use to create the volume.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the driver to use to create the volume.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * key/value map of driver specific options.
     *
     * @return array<string, string>|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * key/value map of driver specific options.
     *
     * @param array<string, string>|null $options
     *
     * @return self
     */
    public function setOptions(?\ArrayObject $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}
