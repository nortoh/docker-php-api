<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecConfigsItem extends \ArrayObject
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
     * File represents a specific target that is backed by a file.
     *
     * @var TaskSpecContainerSpecConfigsItemFile|null
     */
    protected $file;
    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     *
     * @var string|null
     */
    protected $configID;
    /**
    * ConfigName is the name of the config that this references, but this is just provided for
    lookup/display purposes. The config in the reference will be identified by its ID.
    
    *
    * @var string|null
    */
    protected $configName;
    /**
     * File represents a specific target that is backed by a file.
     *
     * @return TaskSpecContainerSpecConfigsItemFile|null
     */
    public function getFile() : ?TaskSpecContainerSpecConfigsItemFile
    {
        return $this->file;
    }
    /**
     * File represents a specific target that is backed by a file.
     *
     * @param TaskSpecContainerSpecConfigsItemFile|null $file
     *
     * @return self
     */
    public function setFile(?TaskSpecContainerSpecConfigsItemFile $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     *
     * @return string|null
     */
    public function getConfigID() : ?string
    {
        return $this->configID;
    }
    /**
     * ConfigID represents the ID of the specific config that we're referencing.
     *
     * @param string|null $configID
     *
     * @return self
     */
    public function setConfigID(?string $configID) : self
    {
        $this->initialized['configID'] = true;
        $this->configID = $configID;
        return $this;
    }
    /**
    * ConfigName is the name of the config that this references, but this is just provided for
    lookup/display purposes. The config in the reference will be identified by its ID.
    
    *
    * @return string|null
    */
    public function getConfigName() : ?string
    {
        return $this->configName;
    }
    /**
    * ConfigName is the name of the config that this references, but this is just provided for
    lookup/display purposes. The config in the reference will be identified by its ID.
    
    *
    * @param string|null $configName
    *
    * @return self
    */
    public function setConfigName(?string $configName) : self
    {
        $this->initialized['configName'] = true;
        $this->configName = $configName;
        return $this;
    }
}