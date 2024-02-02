<?php

namespace Docker\API\Model;

class ServiceSpecMode extends \ArrayObject
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
     * @var ServiceSpecModeReplicated|null
     */
    protected $replicated;
    /**
     * 
     *
     * @var ServiceSpecModeGlobal|null
     */
    protected $global;
    /**
     * 
     *
     * @return ServiceSpecModeReplicated|null
     */
    public function getReplicated() : ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }
    /**
     * 
     *
     * @param ServiceSpecModeReplicated|null $replicated
     *
     * @return self
     */
    public function setReplicated(?ServiceSpecModeReplicated $replicated) : self
    {
        $this->initialized['replicated'] = true;
        $this->replicated = $replicated;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceSpecModeGlobal|null
     */
    public function getGlobal() : ?ServiceSpecModeGlobal
    {
        return $this->global;
    }
    /**
     * 
     *
     * @param ServiceSpecModeGlobal|null $global
     *
     * @return self
     */
    public function setGlobal(?ServiceSpecModeGlobal $global) : self
    {
        $this->initialized['global'] = true;
        $this->global = $global;
        return $this;
    }
}