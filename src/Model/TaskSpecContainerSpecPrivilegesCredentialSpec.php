<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesCredentialSpec extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Load credential spec from this file. The file is read by the daemon, and must be present in the
    `CredentialSpecs` subdirectory in the docker data directory, which defaults to
    `C:\ProgramData\Docker\` on Windows.
    
    For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
    
    <p><br /></p>
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @var string|null
    */
    protected $file;
    /**
    * Load credential spec from this value in the Windows registry. The specified registry value must be
    located in:
    
    `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
    
    <p><br /></p>
    
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @var string|null
    */
    protected $registry;
    /**
    * Load credential spec from this file. The file is read by the daemon, and must be present in the
    `CredentialSpecs` subdirectory in the docker data directory, which defaults to
    `C:\ProgramData\Docker\` on Windows.
    
    For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
    
    <p><br /></p>
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @return string|null
    */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
    * Load credential spec from this file. The file is read by the daemon, and must be present in the
    `CredentialSpecs` subdirectory in the docker data directory, which defaults to
    `C:\ProgramData\Docker\` on Windows.
    
    For example, specifying `spec.json` loads `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
    
    <p><br /></p>
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @param string|null $file
    *
    * @return self
    */
    public function setFile(?string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
    * Load credential spec from this value in the Windows registry. The specified registry value must be
    located in:
    
    `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
    
    <p><br /></p>
    
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @return string|null
    */
    public function getRegistry(): ?string
    {
        return $this->registry;
    }
    /**
    * Load credential spec from this value in the Windows registry. The specified registry value must be
    located in:
    
    `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
    
    <p><br /></p>
    
    
    > **Note**: `CredentialSpec.File` and `CredentialSpec.Registry` are mutually exclusive.
    
    *
    * @param string|null $registry
    *
    * @return self
    */
    public function setRegistry(?string $registry): self
    {
        $this->initialized['registry'] = true;
        $this->registry = $registry;
        return $this;
    }
}