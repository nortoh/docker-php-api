<?php

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Docker\API\Model\Port::class => \Docker\API\Normalizer\PortNormalizer::class,
            
            \Docker\API\Model\MountPoint::class => \Docker\API\Normalizer\MountPointNormalizer::class,
            
            \Docker\API\Model\DeviceMapping::class => \Docker\API\Normalizer\DeviceMappingNormalizer::class,
            
            \Docker\API\Model\ThrottleDevice::class => \Docker\API\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Docker\API\Model\Mount::class => \Docker\API\Normalizer\MountNormalizer::class,
            
            \Docker\API\Model\MountBindOptions::class => \Docker\API\Normalizer\MountBindOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptions::class => \Docker\API\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptionsDriverConfig::class => \Docker\API\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Docker\API\Model\MountTmpfsOptions::class => \Docker\API\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Docker\API\Model\RestartPolicy::class => \Docker\API\Normalizer\RestartPolicyNormalizer::class,
            
            \Docker\API\Model\Resources::class => \Docker\API\Normalizer\ResourcesNormalizer::class,
            
            \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => \Docker\API\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Docker\API\Model\ResourcesUlimitsItem::class => \Docker\API\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Docker\API\Model\ResourceObject::class => \Docker\API\Normalizer\ResourceObjectNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItem::class => \Docker\API\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Docker\API\Model\HealthConfig::class => \Docker\API\Normalizer\HealthConfigNormalizer::class,
            
            \Docker\API\Model\HostConfig::class => \Docker\API\Normalizer\HostConfigNormalizer::class,
            
            \Docker\API\Model\HostConfigLogConfig::class => \Docker\API\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfig::class => \Docker\API\Normalizer\ContainerConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfigExposedPortsItem::class => \Docker\API\Normalizer\ContainerConfigExposedPortsItemNormalizer::class,
            
            \Docker\API\Model\ContainerConfigVolumesItem::class => \Docker\API\Normalizer\ContainerConfigVolumesItemNormalizer::class,
            
            \Docker\API\Model\NetworkSettings::class => \Docker\API\Normalizer\NetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Address::class => \Docker\API\Normalizer\AddressNormalizer::class,
            
            \Docker\API\Model\PortBinding::class => \Docker\API\Normalizer\PortBindingNormalizer::class,
            
            \Docker\API\Model\GraphDriverData::class => \Docker\API\Normalizer\GraphDriverDataNormalizer::class,
            
            \Docker\API\Model\Image::class => \Docker\API\Normalizer\ImageNormalizer::class,
            
            \Docker\API\Model\ImageRootFS::class => \Docker\API\Normalizer\ImageRootFSNormalizer::class,
            
            \Docker\API\Model\ImageMetadata::class => \Docker\API\Normalizer\ImageMetadataNormalizer::class,
            
            \Docker\API\Model\ImageSummary::class => \Docker\API\Normalizer\ImageSummaryNormalizer::class,
            
            \Docker\API\Model\AuthConfig::class => \Docker\API\Normalizer\AuthConfigNormalizer::class,
            
            \Docker\API\Model\ProcessConfig::class => \Docker\API\Normalizer\ProcessConfigNormalizer::class,
            
            \Docker\API\Model\Volume::class => \Docker\API\Normalizer\VolumeNormalizer::class,
            
            \Docker\API\Model\VolumeStatusItem::class => \Docker\API\Normalizer\VolumeStatusItemNormalizer::class,
            
            \Docker\API\Model\VolumeUsageData::class => \Docker\API\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Docker\API\Model\Network::class => \Docker\API\Normalizer\NetworkNormalizer::class,
            
            \Docker\API\Model\IPAM::class => \Docker\API\Normalizer\IPAMNormalizer::class,
            
            \Docker\API\Model\NetworkContainer::class => \Docker\API\Normalizer\NetworkContainerNormalizer::class,
            
            \Docker\API\Model\BuildInfo::class => \Docker\API\Normalizer\BuildInfoNormalizer::class,
            
            \Docker\API\Model\ImageID::class => \Docker\API\Normalizer\ImageIDNormalizer::class,
            
            \Docker\API\Model\CreateImageInfo::class => \Docker\API\Normalizer\CreateImageInfoNormalizer::class,
            
            \Docker\API\Model\PushImageInfo::class => \Docker\API\Normalizer\PushImageInfoNormalizer::class,
            
            \Docker\API\Model\ErrorDetail::class => \Docker\API\Normalizer\ErrorDetailNormalizer::class,
            
            \Docker\API\Model\ProgressDetail::class => \Docker\API\Normalizer\ProgressDetailNormalizer::class,
            
            \Docker\API\Model\ErrorResponse::class => \Docker\API\Normalizer\ErrorResponseNormalizer::class,
            
            \Docker\API\Model\IdResponse::class => \Docker\API\Normalizer\IdResponseNormalizer::class,
            
            \Docker\API\Model\EndpointSettings::class => \Docker\API\Normalizer\EndpointSettingsNormalizer::class,
            
            \Docker\API\Model\EndpointIPAMConfig::class => \Docker\API\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Docker\API\Model\PluginMount::class => \Docker\API\Normalizer\PluginMountNormalizer::class,
            
            \Docker\API\Model\PluginDevice::class => \Docker\API\Normalizer\PluginDeviceNormalizer::class,
            
            \Docker\API\Model\PluginEnv::class => \Docker\API\Normalizer\PluginEnvNormalizer::class,
            
            \Docker\API\Model\PluginInterfaceType::class => \Docker\API\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Docker\API\Model\Plugin::class => \Docker\API\Normalizer\PluginNormalizer::class,
            
            \Docker\API\Model\PluginSettings::class => \Docker\API\Normalizer\PluginSettingsNormalizer::class,
            
            \Docker\API\Model\PluginConfig::class => \Docker\API\Normalizer\PluginConfigNormalizer::class,
            
            \Docker\API\Model\PluginConfigInterface::class => \Docker\API\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Docker\API\Model\PluginConfigUser::class => \Docker\API\Normalizer\PluginConfigUserNormalizer::class,
            
            \Docker\API\Model\PluginConfigNetwork::class => \Docker\API\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Docker\API\Model\PluginConfigLinux::class => \Docker\API\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Docker\API\Model\PluginConfigArgs::class => \Docker\API\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Docker\API\Model\PluginConfigRootfs::class => \Docker\API\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Docker\API\Model\ObjectVersion::class => \Docker\API\Normalizer\ObjectVersionNormalizer::class,
            
            \Docker\API\Model\NodeSpec::class => \Docker\API\Normalizer\NodeSpecNormalizer::class,
            
            \Docker\API\Model\Node::class => \Docker\API\Normalizer\NodeNormalizer::class,
            
            \Docker\API\Model\NodeDescription::class => \Docker\API\Normalizer\NodeDescriptionNormalizer::class,
            
            \Docker\API\Model\Platform::class => \Docker\API\Normalizer\PlatformNormalizer::class,
            
            \Docker\API\Model\EngineDescription::class => \Docker\API\Normalizer\EngineDescriptionNormalizer::class,
            
            \Docker\API\Model\EngineDescriptionPluginsItem::class => \Docker\API\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Docker\API\Model\TLSInfo::class => \Docker\API\Normalizer\TLSInfoNormalizer::class,
            
            \Docker\API\Model\NodeStatus::class => \Docker\API\Normalizer\NodeStatusNormalizer::class,
            
            \Docker\API\Model\ManagerStatus::class => \Docker\API\Normalizer\ManagerStatusNormalizer::class,
            
            \Docker\API\Model\SwarmSpec::class => \Docker\API\Normalizer\SwarmSpecNormalizer::class,
            
            \Docker\API\Model\SwarmSpecOrchestration::class => \Docker\API\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Docker\API\Model\SwarmSpecRaft::class => \Docker\API\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Docker\API\Model\SwarmSpecDispatcher::class => \Docker\API\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfig::class => \Docker\API\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => \Docker\API\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Docker\API\Model\SwarmSpecEncryptionConfig::class => \Docker\API\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaults::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Docker\API\Model\ClusterInfo::class => \Docker\API\Normalizer\ClusterInfoNormalizer::class,
            
            \Docker\API\Model\JoinTokens::class => \Docker\API\Normalizer\JoinTokensNormalizer::class,
            
            \Docker\API\Model\Swarm::class => \Docker\API\Normalizer\SwarmNormalizer::class,
            
            \Docker\API\Model\TaskSpec::class => \Docker\API\Normalizer\TaskSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpec::class => \Docker\API\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpecPluginPrivilegeItem::class => \Docker\API\Normalizer\TaskSpecPluginSpecPluginPrivilegeItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => \Docker\API\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecResources::class => \Docker\API\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Docker\API\Model\TaskSpecRestartPolicy::class => \Docker\API\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacement::class => \Docker\API\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Docker\API\Model\TaskSpecNetworksItem::class => \Docker\API\Normalizer\TaskSpecNetworksItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecLogDriver::class => \Docker\API\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Docker\API\Model\Task::class => \Docker\API\Normalizer\TaskNormalizer::class,
            
            \Docker\API\Model\TaskStatus::class => \Docker\API\Normalizer\TaskStatusNormalizer::class,
            
            \Docker\API\Model\TaskStatusContainerStatus::class => \Docker\API\Normalizer\TaskStatusContainerStatusNormalizer::class,
            
            \Docker\API\Model\ServiceSpec::class => \Docker\API\Normalizer\ServiceSpecNormalizer::class,
            
            \Docker\API\Model\ServiceSpecMode::class => \Docker\API\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicated::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeGlobal::class => \Docker\API\Normalizer\ServiceSpecModeGlobalNormalizer::class,
            
            \Docker\API\Model\ServiceSpecUpdateConfig::class => \Docker\API\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecRollbackConfig::class => \Docker\API\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecNetworksItem::class => \Docker\API\Normalizer\ServiceSpecNetworksItemNormalizer::class,
            
            \Docker\API\Model\EndpointPortConfig::class => \Docker\API\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Docker\API\Model\EndpointSpec::class => \Docker\API\Normalizer\EndpointSpecNormalizer::class,
            
            \Docker\API\Model\Service::class => \Docker\API\Normalizer\ServiceNormalizer::class,
            
            \Docker\API\Model\ServiceEndpoint::class => \Docker\API\Normalizer\ServiceEndpointNormalizer::class,
            
            \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => \Docker\API\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateStatus::class => \Docker\API\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Docker\API\Model\ImageDeleteResponseItem::class => \Docker\API\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateResponse::class => \Docker\API\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItem::class => \Docker\API\Normalizer\ContainerSummaryItemNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItemHostConfig::class => \Docker\API\Normalizer\ContainerSummaryItemHostConfigNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItemNetworkSettings::class => \Docker\API\Normalizer\ContainerSummaryItemNetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Driver::class => \Docker\API\Normalizer\DriverNormalizer::class,
            
            \Docker\API\Model\SecretSpec::class => \Docker\API\Normalizer\SecretSpecNormalizer::class,
            
            \Docker\API\Model\Secret::class => \Docker\API\Normalizer\SecretNormalizer::class,
            
            \Docker\API\Model\ConfigSpec::class => \Docker\API\Normalizer\ConfigSpecNormalizer::class,
            
            \Docker\API\Model\Config::class => \Docker\API\Normalizer\ConfigNormalizer::class,
            
            \Docker\API\Model\SystemInfo::class => \Docker\API\Normalizer\SystemInfoNormalizer::class,
            
            \Docker\API\Model\PluginsInfo::class => \Docker\API\Normalizer\PluginsInfoNormalizer::class,
            
            \Docker\API\Model\RegistryServiceConfig::class => \Docker\API\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Docker\API\Model\IndexInfo::class => \Docker\API\Normalizer\IndexInfoNormalizer::class,
            
            \Docker\API\Model\Runtime::class => \Docker\API\Normalizer\RuntimeNormalizer::class,
            
            \Docker\API\Model\Commit::class => \Docker\API\Normalizer\CommitNormalizer::class,
            
            \Docker\API\Model\SwarmInfo::class => \Docker\API\Normalizer\SwarmInfoNormalizer::class,
            
            \Docker\API\Model\PeerNode::class => \Docker\API\Normalizer\PeerNodeNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBody::class => \Docker\API\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBodyNetworkingConfig::class => \Docker\API\Normalizer\ContainersCreatePostBodyNetworkingConfigNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostResponse201::class => \Docker\API\Normalizer\ContainersCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200State::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200StateNormalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200Node::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200NodeNormalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetJsonResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetTextplainResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdChangesGetResponse200Item::class => \Docker\API\Normalizer\ContainersIdChangesGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostBody::class => \Docker\API\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostResponse200::class => \Docker\API\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdWaitPostResponse200::class => \Docker\API\Normalizer\ContainersIdWaitPostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdWaitPostResponse200Error::class => \Docker\API\Normalizer\ContainersIdWaitPostResponse200ErrorNormalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveGetResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveGetResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveHeadJsonResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveHeadJsonResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveHeadTextplainResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveHeadTextplainResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersPrunePostResponse200::class => \Docker\API\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\BuildPrunePostResponse200::class => \Docker\API\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => \Docker\API\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesSearchGetResponse200Item::class => \Docker\API\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesPrunePostResponse200::class => \Docker\API\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\AuthPostResponse200::class => \Docker\API\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Docker\API\Model\VersionGetResponse200::class => \Docker\API\Normalizer\VersionGetResponse200Normalizer::class,
            
            \Docker\API\Model\VersionGetResponse200Platform::class => \Docker\API\Normalizer\VersionGetResponse200PlatformNormalizer::class,
            
            \Docker\API\Model\VersionGetResponse200ComponentsItem::class => \Docker\API\Normalizer\VersionGetResponse200ComponentsItemNormalizer::class,
            
            \Docker\API\Model\VersionGetResponse200ComponentsItemDetails::class => \Docker\API\Normalizer\VersionGetResponse200ComponentsItemDetailsNormalizer::class,
            
            \Docker\API\Model\EventsGetResponse200::class => \Docker\API\Normalizer\EventsGetResponse200Normalizer::class,
            
            \Docker\API\Model\EventsGetResponse200Actor::class => \Docker\API\Normalizer\EventsGetResponse200ActorNormalizer::class,
            
            \Docker\API\Model\SystemDfGetJsonResponse200::class => \Docker\API\Normalizer\SystemDfGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\SystemDfGetTextplainResponse200::class => \Docker\API\Normalizer\SystemDfGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdExecPostBody::class => \Docker\API\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdStartPostBody::class => \Docker\API\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdJsonGetResponse200::class => \Docker\API\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesGetResponse200::class => \Docker\API\Normalizer\VolumesGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesCreatePostBody::class => \Docker\API\Normalizer\VolumesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\VolumesPrunePostResponse200::class => \Docker\API\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\NetworksCreatePostBody::class => \Docker\API\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksCreatePostResponse201::class => \Docker\API\Normalizer\NetworksCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\NetworksIdConnectPostBody::class => \Docker\API\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdDisconnectPostBody::class => \Docker\API\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksPrunePostResponse200::class => \Docker\API\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\PluginsPrivilegesGetJsonResponse200Item::class => \Docker\API\Normalizer\PluginsPrivilegesGetJsonResponse200ItemNormalizer::class,
            
            \Docker\API\Model\PluginsPrivilegesGetTextplainResponse200Item::class => \Docker\API\Normalizer\PluginsPrivilegesGetTextplainResponse200ItemNormalizer::class,
            
            \Docker\API\Model\PluginsPullPostBodyItem::class => \Docker\API\Normalizer\PluginsPullPostBodyItemNormalizer::class,
            
            \Docker\API\Model\PluginsNameUpgradePostBodyItem::class => \Docker\API\Normalizer\PluginsNameUpgradePostBodyItemNormalizer::class,
            
            \Docker\API\Model\SwarmInitPostBody::class => \Docker\API\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmJoinPostBody::class => \Docker\API\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetJsonResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetTextplainResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockPostBody::class => \Docker\API\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostBody::class => \Docker\API\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostResponse201::class => \Docker\API\Normalizer\ServicesCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\ServicesIdUpdatePostBody::class => \Docker\API\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\SecretsCreatePostBody::class => \Docker\API\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ConfigsCreatePostBody::class => \Docker\API\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200DescriptorNormalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200PlatformsItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Docker\API\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [
                
                \Docker\API\Model\Port::class => false,
                \Docker\API\Model\MountPoint::class => false,
                \Docker\API\Model\DeviceMapping::class => false,
                \Docker\API\Model\ThrottleDevice::class => false,
                \Docker\API\Model\Mount::class => false,
                \Docker\API\Model\MountBindOptions::class => false,
                \Docker\API\Model\MountVolumeOptions::class => false,
                \Docker\API\Model\MountVolumeOptionsDriverConfig::class => false,
                \Docker\API\Model\MountTmpfsOptions::class => false,
                \Docker\API\Model\RestartPolicy::class => false,
                \Docker\API\Model\Resources::class => false,
                \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Docker\API\Model\ResourcesUlimitsItem::class => false,
                \Docker\API\Model\ResourceObject::class => false,
                \Docker\API\Model\GenericResourcesItem::class => false,
                \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Docker\API\Model\HealthConfig::class => false,
                \Docker\API\Model\HostConfig::class => false,
                \Docker\API\Model\HostConfigLogConfig::class => false,
                \Docker\API\Model\ContainerConfig::class => false,
                \Docker\API\Model\ContainerConfigExposedPortsItem::class => false,
                \Docker\API\Model\ContainerConfigVolumesItem::class => false,
                \Docker\API\Model\NetworkSettings::class => false,
                \Docker\API\Model\Address::class => false,
                \Docker\API\Model\PortBinding::class => false,
                \Docker\API\Model\GraphDriverData::class => false,
                \Docker\API\Model\Image::class => false,
                \Docker\API\Model\ImageRootFS::class => false,
                \Docker\API\Model\ImageMetadata::class => false,
                \Docker\API\Model\ImageSummary::class => false,
                \Docker\API\Model\AuthConfig::class => false,
                \Docker\API\Model\ProcessConfig::class => false,
                \Docker\API\Model\Volume::class => false,
                \Docker\API\Model\VolumeStatusItem::class => false,
                \Docker\API\Model\VolumeUsageData::class => false,
                \Docker\API\Model\Network::class => false,
                \Docker\API\Model\IPAM::class => false,
                \Docker\API\Model\NetworkContainer::class => false,
                \Docker\API\Model\BuildInfo::class => false,
                \Docker\API\Model\ImageID::class => false,
                \Docker\API\Model\CreateImageInfo::class => false,
                \Docker\API\Model\PushImageInfo::class => false,
                \Docker\API\Model\ErrorDetail::class => false,
                \Docker\API\Model\ProgressDetail::class => false,
                \Docker\API\Model\ErrorResponse::class => false,
                \Docker\API\Model\IdResponse::class => false,
                \Docker\API\Model\EndpointSettings::class => false,
                \Docker\API\Model\EndpointIPAMConfig::class => false,
                \Docker\API\Model\PluginMount::class => false,
                \Docker\API\Model\PluginDevice::class => false,
                \Docker\API\Model\PluginEnv::class => false,
                \Docker\API\Model\PluginInterfaceType::class => false,
                \Docker\API\Model\Plugin::class => false,
                \Docker\API\Model\PluginSettings::class => false,
                \Docker\API\Model\PluginConfig::class => false,
                \Docker\API\Model\PluginConfigInterface::class => false,
                \Docker\API\Model\PluginConfigUser::class => false,
                \Docker\API\Model\PluginConfigNetwork::class => false,
                \Docker\API\Model\PluginConfigLinux::class => false,
                \Docker\API\Model\PluginConfigArgs::class => false,
                \Docker\API\Model\PluginConfigRootfs::class => false,
                \Docker\API\Model\ObjectVersion::class => false,
                \Docker\API\Model\NodeSpec::class => false,
                \Docker\API\Model\Node::class => false,
                \Docker\API\Model\NodeDescription::class => false,
                \Docker\API\Model\Platform::class => false,
                \Docker\API\Model\EngineDescription::class => false,
                \Docker\API\Model\EngineDescriptionPluginsItem::class => false,
                \Docker\API\Model\TLSInfo::class => false,
                \Docker\API\Model\NodeStatus::class => false,
                \Docker\API\Model\ManagerStatus::class => false,
                \Docker\API\Model\SwarmSpec::class => false,
                \Docker\API\Model\SwarmSpecOrchestration::class => false,
                \Docker\API\Model\SwarmSpecRaft::class => false,
                \Docker\API\Model\SwarmSpecDispatcher::class => false,
                \Docker\API\Model\SwarmSpecCAConfig::class => false,
                \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Docker\API\Model\SwarmSpecEncryptionConfig::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaults::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Docker\API\Model\ClusterInfo::class => false,
                \Docker\API\Model\JoinTokens::class => false,
                \Docker\API\Model\Swarm::class => false,
                \Docker\API\Model\TaskSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpecPluginPrivilegeItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Docker\API\Model\TaskSpecResources::class => false,
                \Docker\API\Model\TaskSpecRestartPolicy::class => false,
                \Docker\API\Model\TaskSpecPlacement::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Docker\API\Model\TaskSpecNetworksItem::class => false,
                \Docker\API\Model\TaskSpecLogDriver::class => false,
                \Docker\API\Model\Task::class => false,
                \Docker\API\Model\TaskStatus::class => false,
                \Docker\API\Model\TaskStatusContainerStatus::class => false,
                \Docker\API\Model\ServiceSpec::class => false,
                \Docker\API\Model\ServiceSpecMode::class => false,
                \Docker\API\Model\ServiceSpecModeReplicated::class => false,
                \Docker\API\Model\ServiceSpecModeGlobal::class => false,
                \Docker\API\Model\ServiceSpecUpdateConfig::class => false,
                \Docker\API\Model\ServiceSpecRollbackConfig::class => false,
                \Docker\API\Model\ServiceSpecNetworksItem::class => false,
                \Docker\API\Model\EndpointPortConfig::class => false,
                \Docker\API\Model\EndpointSpec::class => false,
                \Docker\API\Model\Service::class => false,
                \Docker\API\Model\ServiceEndpoint::class => false,
                \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Docker\API\Model\ServiceUpdateStatus::class => false,
                \Docker\API\Model\ImageDeleteResponseItem::class => false,
                \Docker\API\Model\ServiceUpdateResponse::class => false,
                \Docker\API\Model\ContainerSummaryItem::class => false,
                \Docker\API\Model\ContainerSummaryItemHostConfig::class => false,
                \Docker\API\Model\ContainerSummaryItemNetworkSettings::class => false,
                \Docker\API\Model\Driver::class => false,
                \Docker\API\Model\SecretSpec::class => false,
                \Docker\API\Model\Secret::class => false,
                \Docker\API\Model\ConfigSpec::class => false,
                \Docker\API\Model\Config::class => false,
                \Docker\API\Model\SystemInfo::class => false,
                \Docker\API\Model\PluginsInfo::class => false,
                \Docker\API\Model\RegistryServiceConfig::class => false,
                \Docker\API\Model\IndexInfo::class => false,
                \Docker\API\Model\Runtime::class => false,
                \Docker\API\Model\Commit::class => false,
                \Docker\API\Model\SwarmInfo::class => false,
                \Docker\API\Model\PeerNode::class => false,
                \Docker\API\Model\ContainersCreatePostBody::class => false,
                \Docker\API\Model\ContainersCreatePostBodyNetworkingConfig::class => false,
                \Docker\API\Model\ContainersCreatePostResponse201::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200State::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200Node::class => false,
                \Docker\API\Model\ContainersIdTopGetJsonResponse200::class => false,
                \Docker\API\Model\ContainersIdTopGetTextplainResponse200::class => false,
                \Docker\API\Model\ContainersIdChangesGetResponse200Item::class => false,
                \Docker\API\Model\ContainersIdUpdatePostBody::class => false,
                \Docker\API\Model\ContainersIdUpdatePostResponse200::class => false,
                \Docker\API\Model\ContainersIdWaitPostResponse200::class => false,
                \Docker\API\Model\ContainersIdWaitPostResponse200Error::class => false,
                \Docker\API\Model\ContainersIdArchiveGetResponse400::class => false,
                \Docker\API\Model\ContainersIdArchiveHeadJsonResponse400::class => false,
                \Docker\API\Model\ContainersIdArchiveHeadTextplainResponse400::class => false,
                \Docker\API\Model\ContainersPrunePostResponse200::class => false,
                \Docker\API\Model\BuildPrunePostResponse200::class => false,
                \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Docker\API\Model\ImagesSearchGetResponse200Item::class => false,
                \Docker\API\Model\ImagesPrunePostResponse200::class => false,
                \Docker\API\Model\AuthPostResponse200::class => false,
                \Docker\API\Model\VersionGetResponse200::class => false,
                \Docker\API\Model\VersionGetResponse200Platform::class => false,
                \Docker\API\Model\VersionGetResponse200ComponentsItem::class => false,
                \Docker\API\Model\VersionGetResponse200ComponentsItemDetails::class => false,
                \Docker\API\Model\EventsGetResponse200::class => false,
                \Docker\API\Model\EventsGetResponse200Actor::class => false,
                \Docker\API\Model\SystemDfGetJsonResponse200::class => false,
                \Docker\API\Model\SystemDfGetTextplainResponse200::class => false,
                \Docker\API\Model\ContainersIdExecPostBody::class => false,
                \Docker\API\Model\ExecIdStartPostBody::class => false,
                \Docker\API\Model\ExecIdJsonGetResponse200::class => false,
                \Docker\API\Model\VolumesGetResponse200::class => false,
                \Docker\API\Model\VolumesCreatePostBody::class => false,
                \Docker\API\Model\VolumesPrunePostResponse200::class => false,
                \Docker\API\Model\NetworksCreatePostBody::class => false,
                \Docker\API\Model\NetworksCreatePostResponse201::class => false,
                \Docker\API\Model\NetworksIdConnectPostBody::class => false,
                \Docker\API\Model\NetworksIdDisconnectPostBody::class => false,
                \Docker\API\Model\NetworksPrunePostResponse200::class => false,
                \Docker\API\Model\PluginsPrivilegesGetJsonResponse200Item::class => false,
                \Docker\API\Model\PluginsPrivilegesGetTextplainResponse200Item::class => false,
                \Docker\API\Model\PluginsPullPostBodyItem::class => false,
                \Docker\API\Model\PluginsNameUpgradePostBodyItem::class => false,
                \Docker\API\Model\SwarmInitPostBody::class => false,
                \Docker\API\Model\SwarmJoinPostBody::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetJsonResponse200::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetTextplainResponse200::class => false,
                \Docker\API\Model\SwarmUnlockPostBody::class => false,
                \Docker\API\Model\ServicesCreatePostBody::class => false,
                \Docker\API\Model\ServicesCreatePostResponse201::class => false,
                \Docker\API\Model\ServicesIdUpdatePostBody::class => false,
                \Docker\API\Model\SecretsCreatePostBody::class => false,
                \Docker\API\Model\ConfigsCreatePostBody::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Docker\API\Model\Port::class => \Docker\API\Normalizer\PortNormalizer::class,
            
            \Docker\API\Model\MountPoint::class => \Docker\API\Normalizer\MountPointNormalizer::class,
            
            \Docker\API\Model\DeviceMapping::class => \Docker\API\Normalizer\DeviceMappingNormalizer::class,
            
            \Docker\API\Model\ThrottleDevice::class => \Docker\API\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Docker\API\Model\Mount::class => \Docker\API\Normalizer\MountNormalizer::class,
            
            \Docker\API\Model\MountBindOptions::class => \Docker\API\Normalizer\MountBindOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptions::class => \Docker\API\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptionsDriverConfig::class => \Docker\API\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Docker\API\Model\MountTmpfsOptions::class => \Docker\API\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Docker\API\Model\RestartPolicy::class => \Docker\API\Normalizer\RestartPolicyNormalizer::class,
            
            \Docker\API\Model\Resources::class => \Docker\API\Normalizer\ResourcesNormalizer::class,
            
            \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => \Docker\API\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Docker\API\Model\ResourcesUlimitsItem::class => \Docker\API\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Docker\API\Model\ResourceObject::class => \Docker\API\Normalizer\ResourceObjectNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItem::class => \Docker\API\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Docker\API\Model\HealthConfig::class => \Docker\API\Normalizer\HealthConfigNormalizer::class,
            
            \Docker\API\Model\HostConfig::class => \Docker\API\Normalizer\HostConfigNormalizer::class,
            
            \Docker\API\Model\HostConfigLogConfig::class => \Docker\API\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfig::class => \Docker\API\Normalizer\ContainerConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfigExposedPortsItem::class => \Docker\API\Normalizer\ContainerConfigExposedPortsItemNormalizer::class,
            
            \Docker\API\Model\ContainerConfigVolumesItem::class => \Docker\API\Normalizer\ContainerConfigVolumesItemNormalizer::class,
            
            \Docker\API\Model\NetworkSettings::class => \Docker\API\Normalizer\NetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Address::class => \Docker\API\Normalizer\AddressNormalizer::class,
            
            \Docker\API\Model\PortBinding::class => \Docker\API\Normalizer\PortBindingNormalizer::class,
            
            \Docker\API\Model\GraphDriverData::class => \Docker\API\Normalizer\GraphDriverDataNormalizer::class,
            
            \Docker\API\Model\Image::class => \Docker\API\Normalizer\ImageNormalizer::class,
            
            \Docker\API\Model\ImageRootFS::class => \Docker\API\Normalizer\ImageRootFSNormalizer::class,
            
            \Docker\API\Model\ImageMetadata::class => \Docker\API\Normalizer\ImageMetadataNormalizer::class,
            
            \Docker\API\Model\ImageSummary::class => \Docker\API\Normalizer\ImageSummaryNormalizer::class,
            
            \Docker\API\Model\AuthConfig::class => \Docker\API\Normalizer\AuthConfigNormalizer::class,
            
            \Docker\API\Model\ProcessConfig::class => \Docker\API\Normalizer\ProcessConfigNormalizer::class,
            
            \Docker\API\Model\Volume::class => \Docker\API\Normalizer\VolumeNormalizer::class,
            
            \Docker\API\Model\VolumeStatusItem::class => \Docker\API\Normalizer\VolumeStatusItemNormalizer::class,
            
            \Docker\API\Model\VolumeUsageData::class => \Docker\API\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Docker\API\Model\Network::class => \Docker\API\Normalizer\NetworkNormalizer::class,
            
            \Docker\API\Model\IPAM::class => \Docker\API\Normalizer\IPAMNormalizer::class,
            
            \Docker\API\Model\NetworkContainer::class => \Docker\API\Normalizer\NetworkContainerNormalizer::class,
            
            \Docker\API\Model\BuildInfo::class => \Docker\API\Normalizer\BuildInfoNormalizer::class,
            
            \Docker\API\Model\ImageID::class => \Docker\API\Normalizer\ImageIDNormalizer::class,
            
            \Docker\API\Model\CreateImageInfo::class => \Docker\API\Normalizer\CreateImageInfoNormalizer::class,
            
            \Docker\API\Model\PushImageInfo::class => \Docker\API\Normalizer\PushImageInfoNormalizer::class,
            
            \Docker\API\Model\ErrorDetail::class => \Docker\API\Normalizer\ErrorDetailNormalizer::class,
            
            \Docker\API\Model\ProgressDetail::class => \Docker\API\Normalizer\ProgressDetailNormalizer::class,
            
            \Docker\API\Model\ErrorResponse::class => \Docker\API\Normalizer\ErrorResponseNormalizer::class,
            
            \Docker\API\Model\IdResponse::class => \Docker\API\Normalizer\IdResponseNormalizer::class,
            
            \Docker\API\Model\EndpointSettings::class => \Docker\API\Normalizer\EndpointSettingsNormalizer::class,
            
            \Docker\API\Model\EndpointIPAMConfig::class => \Docker\API\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Docker\API\Model\PluginMount::class => \Docker\API\Normalizer\PluginMountNormalizer::class,
            
            \Docker\API\Model\PluginDevice::class => \Docker\API\Normalizer\PluginDeviceNormalizer::class,
            
            \Docker\API\Model\PluginEnv::class => \Docker\API\Normalizer\PluginEnvNormalizer::class,
            
            \Docker\API\Model\PluginInterfaceType::class => \Docker\API\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Docker\API\Model\Plugin::class => \Docker\API\Normalizer\PluginNormalizer::class,
            
            \Docker\API\Model\PluginSettings::class => \Docker\API\Normalizer\PluginSettingsNormalizer::class,
            
            \Docker\API\Model\PluginConfig::class => \Docker\API\Normalizer\PluginConfigNormalizer::class,
            
            \Docker\API\Model\PluginConfigInterface::class => \Docker\API\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Docker\API\Model\PluginConfigUser::class => \Docker\API\Normalizer\PluginConfigUserNormalizer::class,
            
            \Docker\API\Model\PluginConfigNetwork::class => \Docker\API\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Docker\API\Model\PluginConfigLinux::class => \Docker\API\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Docker\API\Model\PluginConfigArgs::class => \Docker\API\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Docker\API\Model\PluginConfigRootfs::class => \Docker\API\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Docker\API\Model\ObjectVersion::class => \Docker\API\Normalizer\ObjectVersionNormalizer::class,
            
            \Docker\API\Model\NodeSpec::class => \Docker\API\Normalizer\NodeSpecNormalizer::class,
            
            \Docker\API\Model\Node::class => \Docker\API\Normalizer\NodeNormalizer::class,
            
            \Docker\API\Model\NodeDescription::class => \Docker\API\Normalizer\NodeDescriptionNormalizer::class,
            
            \Docker\API\Model\Platform::class => \Docker\API\Normalizer\PlatformNormalizer::class,
            
            \Docker\API\Model\EngineDescription::class => \Docker\API\Normalizer\EngineDescriptionNormalizer::class,
            
            \Docker\API\Model\EngineDescriptionPluginsItem::class => \Docker\API\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Docker\API\Model\TLSInfo::class => \Docker\API\Normalizer\TLSInfoNormalizer::class,
            
            \Docker\API\Model\NodeStatus::class => \Docker\API\Normalizer\NodeStatusNormalizer::class,
            
            \Docker\API\Model\ManagerStatus::class => \Docker\API\Normalizer\ManagerStatusNormalizer::class,
            
            \Docker\API\Model\SwarmSpec::class => \Docker\API\Normalizer\SwarmSpecNormalizer::class,
            
            \Docker\API\Model\SwarmSpecOrchestration::class => \Docker\API\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Docker\API\Model\SwarmSpecRaft::class => \Docker\API\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Docker\API\Model\SwarmSpecDispatcher::class => \Docker\API\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfig::class => \Docker\API\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => \Docker\API\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Docker\API\Model\SwarmSpecEncryptionConfig::class => \Docker\API\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaults::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Docker\API\Model\ClusterInfo::class => \Docker\API\Normalizer\ClusterInfoNormalizer::class,
            
            \Docker\API\Model\JoinTokens::class => \Docker\API\Normalizer\JoinTokensNormalizer::class,
            
            \Docker\API\Model\Swarm::class => \Docker\API\Normalizer\SwarmNormalizer::class,
            
            \Docker\API\Model\TaskSpec::class => \Docker\API\Normalizer\TaskSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpec::class => \Docker\API\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpecPluginPrivilegeItem::class => \Docker\API\Normalizer\TaskSpecPluginSpecPluginPrivilegeItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => \Docker\API\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecResources::class => \Docker\API\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Docker\API\Model\TaskSpecRestartPolicy::class => \Docker\API\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacement::class => \Docker\API\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Docker\API\Model\TaskSpecNetworksItem::class => \Docker\API\Normalizer\TaskSpecNetworksItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecLogDriver::class => \Docker\API\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Docker\API\Model\Task::class => \Docker\API\Normalizer\TaskNormalizer::class,
            
            \Docker\API\Model\TaskStatus::class => \Docker\API\Normalizer\TaskStatusNormalizer::class,
            
            \Docker\API\Model\TaskStatusContainerStatus::class => \Docker\API\Normalizer\TaskStatusContainerStatusNormalizer::class,
            
            \Docker\API\Model\ServiceSpec::class => \Docker\API\Normalizer\ServiceSpecNormalizer::class,
            
            \Docker\API\Model\ServiceSpecMode::class => \Docker\API\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicated::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeGlobal::class => \Docker\API\Normalizer\ServiceSpecModeGlobalNormalizer::class,
            
            \Docker\API\Model\ServiceSpecUpdateConfig::class => \Docker\API\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecRollbackConfig::class => \Docker\API\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecNetworksItem::class => \Docker\API\Normalizer\ServiceSpecNetworksItemNormalizer::class,
            
            \Docker\API\Model\EndpointPortConfig::class => \Docker\API\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Docker\API\Model\EndpointSpec::class => \Docker\API\Normalizer\EndpointSpecNormalizer::class,
            
            \Docker\API\Model\Service::class => \Docker\API\Normalizer\ServiceNormalizer::class,
            
            \Docker\API\Model\ServiceEndpoint::class => \Docker\API\Normalizer\ServiceEndpointNormalizer::class,
            
            \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => \Docker\API\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateStatus::class => \Docker\API\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Docker\API\Model\ImageDeleteResponseItem::class => \Docker\API\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateResponse::class => \Docker\API\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItem::class => \Docker\API\Normalizer\ContainerSummaryItemNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItemHostConfig::class => \Docker\API\Normalizer\ContainerSummaryItemHostConfigNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryItemNetworkSettings::class => \Docker\API\Normalizer\ContainerSummaryItemNetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Driver::class => \Docker\API\Normalizer\DriverNormalizer::class,
            
            \Docker\API\Model\SecretSpec::class => \Docker\API\Normalizer\SecretSpecNormalizer::class,
            
            \Docker\API\Model\Secret::class => \Docker\API\Normalizer\SecretNormalizer::class,
            
            \Docker\API\Model\ConfigSpec::class => \Docker\API\Normalizer\ConfigSpecNormalizer::class,
            
            \Docker\API\Model\Config::class => \Docker\API\Normalizer\ConfigNormalizer::class,
            
            \Docker\API\Model\SystemInfo::class => \Docker\API\Normalizer\SystemInfoNormalizer::class,
            
            \Docker\API\Model\PluginsInfo::class => \Docker\API\Normalizer\PluginsInfoNormalizer::class,
            
            \Docker\API\Model\RegistryServiceConfig::class => \Docker\API\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Docker\API\Model\IndexInfo::class => \Docker\API\Normalizer\IndexInfoNormalizer::class,
            
            \Docker\API\Model\Runtime::class => \Docker\API\Normalizer\RuntimeNormalizer::class,
            
            \Docker\API\Model\Commit::class => \Docker\API\Normalizer\CommitNormalizer::class,
            
            \Docker\API\Model\SwarmInfo::class => \Docker\API\Normalizer\SwarmInfoNormalizer::class,
            
            \Docker\API\Model\PeerNode::class => \Docker\API\Normalizer\PeerNodeNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBody::class => \Docker\API\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBodyNetworkingConfig::class => \Docker\API\Normalizer\ContainersCreatePostBodyNetworkingConfigNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostResponse201::class => \Docker\API\Normalizer\ContainersCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200State::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200StateNormalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200Node::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200NodeNormalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetJsonResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetTextplainResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdChangesGetResponse200Item::class => \Docker\API\Normalizer\ContainersIdChangesGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostBody::class => \Docker\API\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostResponse200::class => \Docker\API\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdWaitPostResponse200::class => \Docker\API\Normalizer\ContainersIdWaitPostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdWaitPostResponse200Error::class => \Docker\API\Normalizer\ContainersIdWaitPostResponse200ErrorNormalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveGetResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveGetResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveHeadJsonResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveHeadJsonResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersIdArchiveHeadTextplainResponse400::class => \Docker\API\Normalizer\ContainersIdArchiveHeadTextplainResponse400Normalizer::class,
            
            \Docker\API\Model\ContainersPrunePostResponse200::class => \Docker\API\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\BuildPrunePostResponse200::class => \Docker\API\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => \Docker\API\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesSearchGetResponse200Item::class => \Docker\API\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesPrunePostResponse200::class => \Docker\API\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\AuthPostResponse200::class => \Docker\API\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Docker\API\Model\VersionGetResponse200::class => \Docker\API\Normalizer\VersionGetResponse200Normalizer::class,
            
            \Docker\API\Model\VersionGetResponse200Platform::class => \Docker\API\Normalizer\VersionGetResponse200PlatformNormalizer::class,
            
            \Docker\API\Model\VersionGetResponse200ComponentsItem::class => \Docker\API\Normalizer\VersionGetResponse200ComponentsItemNormalizer::class,
            
            \Docker\API\Model\VersionGetResponse200ComponentsItemDetails::class => \Docker\API\Normalizer\VersionGetResponse200ComponentsItemDetailsNormalizer::class,
            
            \Docker\API\Model\EventsGetResponse200::class => \Docker\API\Normalizer\EventsGetResponse200Normalizer::class,
            
            \Docker\API\Model\EventsGetResponse200Actor::class => \Docker\API\Normalizer\EventsGetResponse200ActorNormalizer::class,
            
            \Docker\API\Model\SystemDfGetJsonResponse200::class => \Docker\API\Normalizer\SystemDfGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\SystemDfGetTextplainResponse200::class => \Docker\API\Normalizer\SystemDfGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdExecPostBody::class => \Docker\API\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdStartPostBody::class => \Docker\API\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdJsonGetResponse200::class => \Docker\API\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesGetResponse200::class => \Docker\API\Normalizer\VolumesGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesCreatePostBody::class => \Docker\API\Normalizer\VolumesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\VolumesPrunePostResponse200::class => \Docker\API\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\NetworksCreatePostBody::class => \Docker\API\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksCreatePostResponse201::class => \Docker\API\Normalizer\NetworksCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\NetworksIdConnectPostBody::class => \Docker\API\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdDisconnectPostBody::class => \Docker\API\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksPrunePostResponse200::class => \Docker\API\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\PluginsPrivilegesGetJsonResponse200Item::class => \Docker\API\Normalizer\PluginsPrivilegesGetJsonResponse200ItemNormalizer::class,
            
            \Docker\API\Model\PluginsPrivilegesGetTextplainResponse200Item::class => \Docker\API\Normalizer\PluginsPrivilegesGetTextplainResponse200ItemNormalizer::class,
            
            \Docker\API\Model\PluginsPullPostBodyItem::class => \Docker\API\Normalizer\PluginsPullPostBodyItemNormalizer::class,
            
            \Docker\API\Model\PluginsNameUpgradePostBodyItem::class => \Docker\API\Normalizer\PluginsNameUpgradePostBodyItemNormalizer::class,
            
            \Docker\API\Model\SwarmInitPostBody::class => \Docker\API\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmJoinPostBody::class => \Docker\API\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetJsonResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetJsonResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetTextplainResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetTextplainResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockPostBody::class => \Docker\API\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostBody::class => \Docker\API\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostResponse201::class => \Docker\API\Normalizer\ServicesCreatePostResponse201Normalizer::class,
            
            \Docker\API\Model\ServicesIdUpdatePostBody::class => \Docker\API\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\SecretsCreatePostBody::class => \Docker\API\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ConfigsCreatePostBody::class => \Docker\API\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200DescriptorNormalizer::class,
            
            \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem::class => \Docker\API\Normalizer\DistributionNameJsonGetResponse200PlatformsItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Docker\API\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [
                
                \Docker\API\Model\Port::class => false,
                \Docker\API\Model\MountPoint::class => false,
                \Docker\API\Model\DeviceMapping::class => false,
                \Docker\API\Model\ThrottleDevice::class => false,
                \Docker\API\Model\Mount::class => false,
                \Docker\API\Model\MountBindOptions::class => false,
                \Docker\API\Model\MountVolumeOptions::class => false,
                \Docker\API\Model\MountVolumeOptionsDriverConfig::class => false,
                \Docker\API\Model\MountTmpfsOptions::class => false,
                \Docker\API\Model\RestartPolicy::class => false,
                \Docker\API\Model\Resources::class => false,
                \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Docker\API\Model\ResourcesUlimitsItem::class => false,
                \Docker\API\Model\ResourceObject::class => false,
                \Docker\API\Model\GenericResourcesItem::class => false,
                \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Docker\API\Model\HealthConfig::class => false,
                \Docker\API\Model\HostConfig::class => false,
                \Docker\API\Model\HostConfigLogConfig::class => false,
                \Docker\API\Model\ContainerConfig::class => false,
                \Docker\API\Model\ContainerConfigExposedPortsItem::class => false,
                \Docker\API\Model\ContainerConfigVolumesItem::class => false,
                \Docker\API\Model\NetworkSettings::class => false,
                \Docker\API\Model\Address::class => false,
                \Docker\API\Model\PortBinding::class => false,
                \Docker\API\Model\GraphDriverData::class => false,
                \Docker\API\Model\Image::class => false,
                \Docker\API\Model\ImageRootFS::class => false,
                \Docker\API\Model\ImageMetadata::class => false,
                \Docker\API\Model\ImageSummary::class => false,
                \Docker\API\Model\AuthConfig::class => false,
                \Docker\API\Model\ProcessConfig::class => false,
                \Docker\API\Model\Volume::class => false,
                \Docker\API\Model\VolumeStatusItem::class => false,
                \Docker\API\Model\VolumeUsageData::class => false,
                \Docker\API\Model\Network::class => false,
                \Docker\API\Model\IPAM::class => false,
                \Docker\API\Model\NetworkContainer::class => false,
                \Docker\API\Model\BuildInfo::class => false,
                \Docker\API\Model\ImageID::class => false,
                \Docker\API\Model\CreateImageInfo::class => false,
                \Docker\API\Model\PushImageInfo::class => false,
                \Docker\API\Model\ErrorDetail::class => false,
                \Docker\API\Model\ProgressDetail::class => false,
                \Docker\API\Model\ErrorResponse::class => false,
                \Docker\API\Model\IdResponse::class => false,
                \Docker\API\Model\EndpointSettings::class => false,
                \Docker\API\Model\EndpointIPAMConfig::class => false,
                \Docker\API\Model\PluginMount::class => false,
                \Docker\API\Model\PluginDevice::class => false,
                \Docker\API\Model\PluginEnv::class => false,
                \Docker\API\Model\PluginInterfaceType::class => false,
                \Docker\API\Model\Plugin::class => false,
                \Docker\API\Model\PluginSettings::class => false,
                \Docker\API\Model\PluginConfig::class => false,
                \Docker\API\Model\PluginConfigInterface::class => false,
                \Docker\API\Model\PluginConfigUser::class => false,
                \Docker\API\Model\PluginConfigNetwork::class => false,
                \Docker\API\Model\PluginConfigLinux::class => false,
                \Docker\API\Model\PluginConfigArgs::class => false,
                \Docker\API\Model\PluginConfigRootfs::class => false,
                \Docker\API\Model\ObjectVersion::class => false,
                \Docker\API\Model\NodeSpec::class => false,
                \Docker\API\Model\Node::class => false,
                \Docker\API\Model\NodeDescription::class => false,
                \Docker\API\Model\Platform::class => false,
                \Docker\API\Model\EngineDescription::class => false,
                \Docker\API\Model\EngineDescriptionPluginsItem::class => false,
                \Docker\API\Model\TLSInfo::class => false,
                \Docker\API\Model\NodeStatus::class => false,
                \Docker\API\Model\ManagerStatus::class => false,
                \Docker\API\Model\SwarmSpec::class => false,
                \Docker\API\Model\SwarmSpecOrchestration::class => false,
                \Docker\API\Model\SwarmSpecRaft::class => false,
                \Docker\API\Model\SwarmSpecDispatcher::class => false,
                \Docker\API\Model\SwarmSpecCAConfig::class => false,
                \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Docker\API\Model\SwarmSpecEncryptionConfig::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaults::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Docker\API\Model\ClusterInfo::class => false,
                \Docker\API\Model\JoinTokens::class => false,
                \Docker\API\Model\Swarm::class => false,
                \Docker\API\Model\TaskSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpecPluginPrivilegeItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Docker\API\Model\TaskSpecResources::class => false,
                \Docker\API\Model\TaskSpecRestartPolicy::class => false,
                \Docker\API\Model\TaskSpecPlacement::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Docker\API\Model\TaskSpecNetworksItem::class => false,
                \Docker\API\Model\TaskSpecLogDriver::class => false,
                \Docker\API\Model\Task::class => false,
                \Docker\API\Model\TaskStatus::class => false,
                \Docker\API\Model\TaskStatusContainerStatus::class => false,
                \Docker\API\Model\ServiceSpec::class => false,
                \Docker\API\Model\ServiceSpecMode::class => false,
                \Docker\API\Model\ServiceSpecModeReplicated::class => false,
                \Docker\API\Model\ServiceSpecModeGlobal::class => false,
                \Docker\API\Model\ServiceSpecUpdateConfig::class => false,
                \Docker\API\Model\ServiceSpecRollbackConfig::class => false,
                \Docker\API\Model\ServiceSpecNetworksItem::class => false,
                \Docker\API\Model\EndpointPortConfig::class => false,
                \Docker\API\Model\EndpointSpec::class => false,
                \Docker\API\Model\Service::class => false,
                \Docker\API\Model\ServiceEndpoint::class => false,
                \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Docker\API\Model\ServiceUpdateStatus::class => false,
                \Docker\API\Model\ImageDeleteResponseItem::class => false,
                \Docker\API\Model\ServiceUpdateResponse::class => false,
                \Docker\API\Model\ContainerSummaryItem::class => false,
                \Docker\API\Model\ContainerSummaryItemHostConfig::class => false,
                \Docker\API\Model\ContainerSummaryItemNetworkSettings::class => false,
                \Docker\API\Model\Driver::class => false,
                \Docker\API\Model\SecretSpec::class => false,
                \Docker\API\Model\Secret::class => false,
                \Docker\API\Model\ConfigSpec::class => false,
                \Docker\API\Model\Config::class => false,
                \Docker\API\Model\SystemInfo::class => false,
                \Docker\API\Model\PluginsInfo::class => false,
                \Docker\API\Model\RegistryServiceConfig::class => false,
                \Docker\API\Model\IndexInfo::class => false,
                \Docker\API\Model\Runtime::class => false,
                \Docker\API\Model\Commit::class => false,
                \Docker\API\Model\SwarmInfo::class => false,
                \Docker\API\Model\PeerNode::class => false,
                \Docker\API\Model\ContainersCreatePostBody::class => false,
                \Docker\API\Model\ContainersCreatePostBodyNetworkingConfig::class => false,
                \Docker\API\Model\ContainersCreatePostResponse201::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200State::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200Node::class => false,
                \Docker\API\Model\ContainersIdTopGetJsonResponse200::class => false,
                \Docker\API\Model\ContainersIdTopGetTextplainResponse200::class => false,
                \Docker\API\Model\ContainersIdChangesGetResponse200Item::class => false,
                \Docker\API\Model\ContainersIdUpdatePostBody::class => false,
                \Docker\API\Model\ContainersIdUpdatePostResponse200::class => false,
                \Docker\API\Model\ContainersIdWaitPostResponse200::class => false,
                \Docker\API\Model\ContainersIdWaitPostResponse200Error::class => false,
                \Docker\API\Model\ContainersIdArchiveGetResponse400::class => false,
                \Docker\API\Model\ContainersIdArchiveHeadJsonResponse400::class => false,
                \Docker\API\Model\ContainersIdArchiveHeadTextplainResponse400::class => false,
                \Docker\API\Model\ContainersPrunePostResponse200::class => false,
                \Docker\API\Model\BuildPrunePostResponse200::class => false,
                \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Docker\API\Model\ImagesSearchGetResponse200Item::class => false,
                \Docker\API\Model\ImagesPrunePostResponse200::class => false,
                \Docker\API\Model\AuthPostResponse200::class => false,
                \Docker\API\Model\VersionGetResponse200::class => false,
                \Docker\API\Model\VersionGetResponse200Platform::class => false,
                \Docker\API\Model\VersionGetResponse200ComponentsItem::class => false,
                \Docker\API\Model\VersionGetResponse200ComponentsItemDetails::class => false,
                \Docker\API\Model\EventsGetResponse200::class => false,
                \Docker\API\Model\EventsGetResponse200Actor::class => false,
                \Docker\API\Model\SystemDfGetJsonResponse200::class => false,
                \Docker\API\Model\SystemDfGetTextplainResponse200::class => false,
                \Docker\API\Model\ContainersIdExecPostBody::class => false,
                \Docker\API\Model\ExecIdStartPostBody::class => false,
                \Docker\API\Model\ExecIdJsonGetResponse200::class => false,
                \Docker\API\Model\VolumesGetResponse200::class => false,
                \Docker\API\Model\VolumesCreatePostBody::class => false,
                \Docker\API\Model\VolumesPrunePostResponse200::class => false,
                \Docker\API\Model\NetworksCreatePostBody::class => false,
                \Docker\API\Model\NetworksCreatePostResponse201::class => false,
                \Docker\API\Model\NetworksIdConnectPostBody::class => false,
                \Docker\API\Model\NetworksIdDisconnectPostBody::class => false,
                \Docker\API\Model\NetworksPrunePostResponse200::class => false,
                \Docker\API\Model\PluginsPrivilegesGetJsonResponse200Item::class => false,
                \Docker\API\Model\PluginsPrivilegesGetTextplainResponse200Item::class => false,
                \Docker\API\Model\PluginsPullPostBodyItem::class => false,
                \Docker\API\Model\PluginsNameUpgradePostBodyItem::class => false,
                \Docker\API\Model\SwarmInitPostBody::class => false,
                \Docker\API\Model\SwarmJoinPostBody::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetJsonResponse200::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetTextplainResponse200::class => false,
                \Docker\API\Model\SwarmUnlockPostBody::class => false,
                \Docker\API\Model\ServicesCreatePostBody::class => false,
                \Docker\API\Model\ServicesCreatePostResponse201::class => false,
                \Docker\API\Model\ServicesIdUpdatePostBody::class => false,
                \Docker\API\Model\SecretsCreatePostBody::class => false,
                \Docker\API\Model\ConfigsCreatePostBody::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor::class => false,
                \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}