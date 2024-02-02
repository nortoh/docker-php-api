<?php

namespace Docker\API\Model;

class TaskSpec extends \ArrayObject
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
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*
     *
     * @var TaskSpecPluginSpec|null
     */
    protected $pluginSpec;
    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @var TaskSpecContainerSpec|null
     */
    protected $containerSpec;
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @var TaskSpecResources|null
     */
    protected $resources;
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @var TaskSpecRestartPolicy|null
     */
    protected $restartPolicy;
    /**
     * 
     *
     * @var TaskSpecPlacement|null
     */
    protected $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @var int|null
     */
    protected $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string|null
     */
    protected $runtime;
    /**
     * 
     *
     * @var TaskSpecNetworksItem[]|null
     */
    protected $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @var TaskSpecLogDriver|null
     */
    protected $logDriver;
    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*
     *
     * @return TaskSpecPluginSpec|null
     */
    public function getPluginSpec() : ?TaskSpecPluginSpec
    {
        return $this->pluginSpec;
    }
    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*
     *
     * @param TaskSpecPluginSpec|null $pluginSpec
     *
     * @return self
     */
    public function setPluginSpec(?TaskSpecPluginSpec $pluginSpec) : self
    {
        $this->initialized['pluginSpec'] = true;
        $this->pluginSpec = $pluginSpec;
        return $this;
    }
    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @return TaskSpecContainerSpec|null
     */
    public function getContainerSpec() : ?TaskSpecContainerSpec
    {
        return $this->containerSpec;
    }
    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @param TaskSpecContainerSpec|null $containerSpec
     *
     * @return self
     */
    public function setContainerSpec(?TaskSpecContainerSpec $containerSpec) : self
    {
        $this->initialized['containerSpec'] = true;
        $this->containerSpec = $containerSpec;
        return $this;
    }
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @return TaskSpecResources|null
     */
    public function getResources() : ?TaskSpecResources
    {
        return $this->resources;
    }
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @param TaskSpecResources|null $resources
     *
     * @return self
     */
    public function setResources(?TaskSpecResources $resources) : self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @return TaskSpecRestartPolicy|null
     */
    public function getRestartPolicy() : ?TaskSpecRestartPolicy
    {
        return $this->restartPolicy;
    }
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @param TaskSpecRestartPolicy|null $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(?TaskSpecRestartPolicy $restartPolicy) : self
    {
        $this->initialized['restartPolicy'] = true;
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return TaskSpecPlacement|null
     */
    public function getPlacement() : ?TaskSpecPlacement
    {
        return $this->placement;
    }
    /**
     * 
     *
     * @param TaskSpecPlacement|null $placement
     *
     * @return self
     */
    public function setPlacement(?TaskSpecPlacement $placement) : self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;
        return $this;
    }
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @return int|null
     */
    public function getForceUpdate() : ?int
    {
        return $this->forceUpdate;
    }
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @param int|null $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate(?int $forceUpdate) : self
    {
        $this->initialized['forceUpdate'] = true;
        $this->forceUpdate = $forceUpdate;
        return $this;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @return string|null
     */
    public function getRuntime() : ?string
    {
        return $this->runtime;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @param string|null $runtime
     *
     * @return self
     */
    public function setRuntime(?string $runtime) : self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * 
     *
     * @return TaskSpecNetworksItem[]|null
     */
    public function getNetworks() : ?array
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param TaskSpecNetworksItem[]|null $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks) : self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @return TaskSpecLogDriver|null
     */
    public function getLogDriver() : ?TaskSpecLogDriver
    {
        return $this->logDriver;
    }
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @param TaskSpecLogDriver|null $logDriver
     *
     * @return self
     */
    public function setLogDriver(?TaskSpecLogDriver $logDriver) : self
    {
        $this->initialized['logDriver'] = true;
        $this->logDriver = $logDriver;
        return $this;
    }
}