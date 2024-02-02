<?php

namespace Docker\API\Model;

class ServiceSpecNetworksItem extends \ArrayObject
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
     * 
     *
     * @var string|null
     */
    protected $target;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $aliases;
    /**
     * 
     *
     * @return string|null
     */
    public function getTarget() : ?string
    {
        return $this->target;
    }
    /**
     * 
     *
     * @param string|null $target
     *
     * @return self
     */
    public function setTarget(?string $target) : self
    {
        $this->initialized['target'] = true;
        $this->target = $target;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
}