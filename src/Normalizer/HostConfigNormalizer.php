<?php

namespace Docker\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\API\\Model\\HostConfig';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\HostConfig';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\HostConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CpuShares', $data) && $data['CpuShares'] !== null) {
            $object->setCpuShares($data['CpuShares']);
            unset($data['CpuShares']);
        }
        elseif (\array_key_exists('CpuShares', $data) && $data['CpuShares'] === null) {
            $object->setCpuShares(null);
        }
        if (\array_key_exists('Memory', $data) && $data['Memory'] !== null) {
            $object->setMemory($data['Memory']);
            unset($data['Memory']);
        }
        elseif (\array_key_exists('Memory', $data) && $data['Memory'] === null) {
            $object->setMemory(null);
        }
        if (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] !== null) {
            $object->setCgroupParent($data['CgroupParent']);
            unset($data['CgroupParent']);
        }
        elseif (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] === null) {
            $object->setCgroupParent(null);
        }
        if (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] !== null) {
            $object->setBlkioWeight($data['BlkioWeight']);
            unset($data['BlkioWeight']);
        }
        elseif (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] === null) {
            $object->setBlkioWeight(null);
        }
        if (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] !== null) {
            $values = array();
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
            unset($data['BlkioWeightDevice']);
        }
        elseif (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] === null) {
            $object->setBlkioWeightDevice(null);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] !== null) {
            $values_1 = array();
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
            unset($data['BlkioDeviceReadBps']);
        }
        elseif (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] === null) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] !== null) {
            $values_2 = array();
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
            unset($data['BlkioDeviceWriteBps']);
        }
        elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] === null) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] !== null) {
            $values_3 = array();
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
            unset($data['BlkioDeviceReadIOps']);
        }
        elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] === null) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] !== null) {
            $values_4 = array();
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
            unset($data['BlkioDeviceWriteIOps']);
        }
        elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] === null) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] !== null) {
            $object->setCpuPeriod($data['CpuPeriod']);
            unset($data['CpuPeriod']);
        }
        elseif (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] === null) {
            $object->setCpuPeriod(null);
        }
        if (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] !== null) {
            $object->setCpuQuota($data['CpuQuota']);
            unset($data['CpuQuota']);
        }
        elseif (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] === null) {
            $object->setCpuQuota(null);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] !== null) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
            unset($data['CpuRealtimePeriod']);
        }
        elseif (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] === null) {
            $object->setCpuRealtimePeriod(null);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] !== null) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
            unset($data['CpuRealtimeRuntime']);
        }
        elseif (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] === null) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] !== null) {
            $object->setCpusetCpus($data['CpusetCpus']);
            unset($data['CpusetCpus']);
        }
        elseif (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] === null) {
            $object->setCpusetCpus(null);
        }
        if (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] !== null) {
            $object->setCpusetMems($data['CpusetMems']);
            unset($data['CpusetMems']);
        }
        elseif (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] === null) {
            $object->setCpusetMems(null);
        }
        if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
            $values_5 = array();
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
            unset($data['Devices']);
        }
        elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
            $object->setDevices(null);
        }
        if (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] !== null) {
            $values_6 = array();
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
            unset($data['DeviceCgroupRules']);
        }
        elseif (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] === null) {
            $object->setDeviceCgroupRules(null);
        }
        if (\array_key_exists('DiskQuota', $data) && $data['DiskQuota'] !== null) {
            $object->setDiskQuota($data['DiskQuota']);
            unset($data['DiskQuota']);
        }
        elseif (\array_key_exists('DiskQuota', $data) && $data['DiskQuota'] === null) {
            $object->setDiskQuota(null);
        }
        if (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] !== null) {
            $object->setKernelMemory($data['KernelMemory']);
            unset($data['KernelMemory']);
        }
        elseif (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] === null) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] !== null) {
            $object->setMemoryReservation($data['MemoryReservation']);
            unset($data['MemoryReservation']);
        }
        elseif (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] === null) {
            $object->setMemoryReservation(null);
        }
        if (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] !== null) {
            $object->setMemorySwap($data['MemorySwap']);
            unset($data['MemorySwap']);
        }
        elseif (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] === null) {
            $object->setMemorySwap(null);
        }
        if (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] !== null) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
            unset($data['MemorySwappiness']);
        }
        elseif (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] === null) {
            $object->setMemorySwappiness(null);
        }
        if (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] !== null) {
            $object->setNanoCPUs($data['NanoCPUs']);
            unset($data['NanoCPUs']);
        }
        elseif (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] === null) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
            $object->setOomKillDisable($data['OomKillDisable']);
            unset($data['OomKillDisable']);
        }
        elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
            unset($data['PidsLimit']);
        }
        elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data) && $data['Ulimits'] !== null) {
            $values_7 = array();
            foreach ($data['Ulimits'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_7);
            unset($data['Ulimits']);
        }
        elseif (\array_key_exists('Ulimits', $data) && $data['Ulimits'] === null) {
            $object->setUlimits(null);
        }
        if (\array_key_exists('CpuCount', $data) && $data['CpuCount'] !== null) {
            $object->setCpuCount($data['CpuCount']);
            unset($data['CpuCount']);
        }
        elseif (\array_key_exists('CpuCount', $data) && $data['CpuCount'] === null) {
            $object->setCpuCount(null);
        }
        if (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] !== null) {
            $object->setCpuPercent($data['CpuPercent']);
            unset($data['CpuPercent']);
        }
        elseif (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] === null) {
            $object->setCpuPercent(null);
        }
        if (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] !== null) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
            unset($data['IOMaximumIOps']);
        }
        elseif (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] === null) {
            $object->setIOMaximumIOps(null);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] !== null) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
            unset($data['IOMaximumBandwidth']);
        }
        elseif (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] === null) {
            $object->setIOMaximumBandwidth(null);
        }
        if (\array_key_exists('Binds', $data) && $data['Binds'] !== null) {
            $values_8 = array();
            foreach ($data['Binds'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setBinds($values_8);
            unset($data['Binds']);
        }
        elseif (\array_key_exists('Binds', $data) && $data['Binds'] === null) {
            $object->setBinds(null);
        }
        if (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] !== null) {
            $object->setContainerIDFile($data['ContainerIDFile']);
            unset($data['ContainerIDFile']);
        }
        elseif (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] === null) {
            $object->setContainerIDFile(null);
        }
        if (\array_key_exists('LogConfig', $data) && $data['LogConfig'] !== null) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], 'Docker\\API\\Model\\HostConfigLogConfig', 'json', $context));
            unset($data['LogConfig']);
        }
        elseif (\array_key_exists('LogConfig', $data) && $data['LogConfig'] === null) {
            $object->setLogConfig(null);
        }
        if (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] !== null) {
            $object->setNetworkMode($data['NetworkMode']);
            unset($data['NetworkMode']);
        }
        elseif (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] === null) {
            $object->setNetworkMode(null);
        }
        if (\array_key_exists('PortBindings', $data) && $data['PortBindings'] !== null) {
            $values_9 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_9) {
                $values_10 = array();
                foreach ($value_9 as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, 'Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values_9[$key] = $values_10;
            }
            $object->setPortBindings($values_9);
            unset($data['PortBindings']);
        }
        elseif (\array_key_exists('PortBindings', $data) && $data['PortBindings'] === null) {
            $object->setPortBindings(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\API\\Model\\RestartPolicy', 'json', $context));
            unset($data['RestartPolicy']);
        }
        elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
            $object->setRestartPolicy(null);
        }
        if (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] !== null) {
            $object->setAutoRemove($data['AutoRemove']);
            unset($data['AutoRemove']);
        }
        elseif (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] === null) {
            $object->setAutoRemove(null);
        }
        if (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] !== null) {
            $object->setVolumeDriver($data['VolumeDriver']);
            unset($data['VolumeDriver']);
        }
        elseif (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] === null) {
            $object->setVolumeDriver(null);
        }
        if (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] !== null) {
            $values_11 = array();
            foreach ($data['VolumesFrom'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setVolumesFrom($values_11);
            unset($data['VolumesFrom']);
        }
        elseif (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] === null) {
            $object->setVolumesFrom(null);
        }
        if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
            $values_12 = array();
            foreach ($data['Mounts'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_12);
            unset($data['Mounts']);
        }
        elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
            $object->setMounts(null);
        }
        if (\array_key_exists('CapAdd', $data) && $data['CapAdd'] !== null) {
            $values_13 = array();
            foreach ($data['CapAdd'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setCapAdd($values_13);
            unset($data['CapAdd']);
        }
        elseif (\array_key_exists('CapAdd', $data) && $data['CapAdd'] === null) {
            $object->setCapAdd(null);
        }
        if (\array_key_exists('CapDrop', $data) && $data['CapDrop'] !== null) {
            $values_14 = array();
            foreach ($data['CapDrop'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapDrop($values_14);
            unset($data['CapDrop']);
        }
        elseif (\array_key_exists('CapDrop', $data) && $data['CapDrop'] === null) {
            $object->setCapDrop(null);
        }
        if (\array_key_exists('Dns', $data) && $data['Dns'] !== null) {
            $values_15 = array();
            foreach ($data['Dns'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setDns($values_15);
            unset($data['Dns']);
        }
        elseif (\array_key_exists('Dns', $data) && $data['Dns'] === null) {
            $object->setDns(null);
        }
        if (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] !== null) {
            $values_16 = array();
            foreach ($data['DnsOptions'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDnsOptions($values_16);
            unset($data['DnsOptions']);
        }
        elseif (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] === null) {
            $object->setDnsOptions(null);
        }
        if (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] !== null) {
            $values_17 = array();
            foreach ($data['DnsSearch'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsSearch($values_17);
            unset($data['DnsSearch']);
        }
        elseif (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] === null) {
            $object->setDnsSearch(null);
        }
        if (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] !== null) {
            $values_18 = array();
            foreach ($data['ExtraHosts'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setExtraHosts($values_18);
            unset($data['ExtraHosts']);
        }
        elseif (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] === null) {
            $object->setExtraHosts(null);
        }
        if (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] !== null) {
            $values_19 = array();
            foreach ($data['GroupAdd'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setGroupAdd($values_19);
            unset($data['GroupAdd']);
        }
        elseif (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] === null) {
            $object->setGroupAdd(null);
        }
        if (\array_key_exists('IpcMode', $data) && $data['IpcMode'] !== null) {
            $object->setIpcMode($data['IpcMode']);
            unset($data['IpcMode']);
        }
        elseif (\array_key_exists('IpcMode', $data) && $data['IpcMode'] === null) {
            $object->setIpcMode(null);
        }
        if (\array_key_exists('Cgroup', $data) && $data['Cgroup'] !== null) {
            $object->setCgroup($data['Cgroup']);
            unset($data['Cgroup']);
        }
        elseif (\array_key_exists('Cgroup', $data) && $data['Cgroup'] === null) {
            $object->setCgroup(null);
        }
        if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
            $values_20 = array();
            foreach ($data['Links'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setLinks($values_20);
            unset($data['Links']);
        }
        elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
            $object->setLinks(null);
        }
        if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
            unset($data['OomScoreAdj']);
        }
        elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
            $object->setOomScoreAdj(null);
        }
        if (\array_key_exists('PidMode', $data) && $data['PidMode'] !== null) {
            $object->setPidMode($data['PidMode']);
            unset($data['PidMode']);
        }
        elseif (\array_key_exists('PidMode', $data) && $data['PidMode'] === null) {
            $object->setPidMode(null);
        }
        if (\array_key_exists('Privileged', $data) && $data['Privileged'] !== null) {
            $object->setPrivileged($data['Privileged']);
            unset($data['Privileged']);
        }
        elseif (\array_key_exists('Privileged', $data) && $data['Privileged'] === null) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] !== null) {
            $object->setPublishAllPorts($data['PublishAllPorts']);
            unset($data['PublishAllPorts']);
        }
        elseif (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] === null) {
            $object->setPublishAllPorts(null);
        }
        if (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] !== null) {
            $object->setReadonlyRootfs($data['ReadonlyRootfs']);
            unset($data['ReadonlyRootfs']);
        }
        elseif (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] === null) {
            $object->setReadonlyRootfs(null);
        }
        if (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] !== null) {
            $values_21 = array();
            foreach ($data['SecurityOpt'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setSecurityOpt($values_21);
            unset($data['SecurityOpt']);
        }
        elseif (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] === null) {
            $object->setSecurityOpt(null);
        }
        if (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] !== null) {
            $values_22 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_22) {
                $values_22[$key_1] = $value_22;
            }
            $object->setStorageOpt($values_22);
            unset($data['StorageOpt']);
        }
        elseif (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] === null) {
            $object->setStorageOpt(null);
        }
        if (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] !== null) {
            $values_23 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_2 => $value_23) {
                $values_23[$key_2] = $value_23;
            }
            $object->setTmpfs($values_23);
            unset($data['Tmpfs']);
        }
        elseif (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] === null) {
            $object->setTmpfs(null);
        }
        if (\array_key_exists('UTSMode', $data) && $data['UTSMode'] !== null) {
            $object->setUTSMode($data['UTSMode']);
            unset($data['UTSMode']);
        }
        elseif (\array_key_exists('UTSMode', $data) && $data['UTSMode'] === null) {
            $object->setUTSMode(null);
        }
        if (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] !== null) {
            $object->setUsernsMode($data['UsernsMode']);
            unset($data['UsernsMode']);
        }
        elseif (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] === null) {
            $object->setUsernsMode(null);
        }
        if (\array_key_exists('ShmSize', $data) && $data['ShmSize'] !== null) {
            $object->setShmSize($data['ShmSize']);
            unset($data['ShmSize']);
        }
        elseif (\array_key_exists('ShmSize', $data) && $data['ShmSize'] === null) {
            $object->setShmSize(null);
        }
        if (\array_key_exists('Sysctls', $data) && $data['Sysctls'] !== null) {
            $values_24 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_24) {
                $values_24[$key_3] = $value_24;
            }
            $object->setSysctls($values_24);
            unset($data['Sysctls']);
        }
        elseif (\array_key_exists('Sysctls', $data) && $data['Sysctls'] === null) {
            $object->setSysctls(null);
        }
        if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
            $object->setRuntime($data['Runtime']);
            unset($data['Runtime']);
        }
        elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
            $values_25 = array();
            foreach ($data['ConsoleSize'] as $value_25) {
                $values_25[] = $value_25;
            }
            $object->setConsoleSize($values_25);
            unset($data['ConsoleSize']);
        }
        elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
            $object->setConsoleSize(null);
        }
        if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
            $object->setIsolation($data['Isolation']);
            unset($data['Isolation']);
        }
        elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
            $object->setIsolation(null);
        }
        foreach ($data as $key_4 => $value_26) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_26;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \ArrayObject();
        if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        }
        if ($object->isInitialized('memory') && null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        }
        if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        }
        if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        }
        if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
            $values = array();
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        }
        if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        }
        if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        }
        if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        }
        if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        }
        if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        }
        if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        }
        if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        }
        if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        }
        if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        }
        if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        }
        if ($object->isInitialized('devices') && null !== $object->getDevices()) {
            $values_5 = array();
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        }
        if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
            $values_6 = array();
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        }
        if ($object->isInitialized('diskQuota') && null !== $object->getDiskQuota()) {
            $data['DiskQuota'] = $object->getDiskQuota();
        }
        if ($object->isInitialized('kernelMemory') && null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        }
        if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        }
        if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        }
        if ($object->isInitialized('nanoCPUs') && null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        }
        if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
            $values_7 = array();
            foreach ($object->getUlimits() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['Ulimits'] = $values_7;
        }
        if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        }
        if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        }
        if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        }
        if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        }
        if ($object->isInitialized('binds') && null !== $object->getBinds()) {
            $values_8 = array();
            foreach ($object->getBinds() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['Binds'] = $values_8;
        }
        if ($object->isInitialized('containerIDFile') && null !== $object->getContainerIDFile()) {
            $data['ContainerIDFile'] = $object->getContainerIDFile();
        }
        if ($object->isInitialized('logConfig') && null !== $object->getLogConfig()) {
            $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if ($object->isInitialized('networkMode') && null !== $object->getNetworkMode()) {
            $data['NetworkMode'] = $object->getNetworkMode();
        }
        if ($object->isInitialized('portBindings') && null !== $object->getPortBindings()) {
            $values_9 = array();
            foreach ($object->getPortBindings() as $key => $value_9) {
                $values_10 = array();
                foreach ($value_9 as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $values_9[$key] = $values_10;
            }
            $data['PortBindings'] = $values_9;
        }
        if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if ($object->isInitialized('autoRemove') && null !== $object->getAutoRemove()) {
            $data['AutoRemove'] = $object->getAutoRemove();
        }
        if ($object->isInitialized('volumeDriver') && null !== $object->getVolumeDriver()) {
            $data['VolumeDriver'] = $object->getVolumeDriver();
        }
        if ($object->isInitialized('volumesFrom') && null !== $object->getVolumesFrom()) {
            $values_11 = array();
            foreach ($object->getVolumesFrom() as $value_11) {
                $values_11[] = $value_11;
            }
            $data['VolumesFrom'] = $values_11;
        }
        if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
            $values_12 = array();
            foreach ($object->getMounts() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data['Mounts'] = $values_12;
        }
        if ($object->isInitialized('capAdd') && null !== $object->getCapAdd()) {
            $values_13 = array();
            foreach ($object->getCapAdd() as $value_13) {
                $values_13[] = $value_13;
            }
            $data['CapAdd'] = $values_13;
        }
        if ($object->isInitialized('capDrop') && null !== $object->getCapDrop()) {
            $values_14 = array();
            foreach ($object->getCapDrop() as $value_14) {
                $values_14[] = $value_14;
            }
            $data['CapDrop'] = $values_14;
        }
        if ($object->isInitialized('dns') && null !== $object->getDns()) {
            $values_15 = array();
            foreach ($object->getDns() as $value_15) {
                $values_15[] = $value_15;
            }
            $data['Dns'] = $values_15;
        }
        if ($object->isInitialized('dnsOptions') && null !== $object->getDnsOptions()) {
            $values_16 = array();
            foreach ($object->getDnsOptions() as $value_16) {
                $values_16[] = $value_16;
            }
            $data['DnsOptions'] = $values_16;
        }
        if ($object->isInitialized('dnsSearch') && null !== $object->getDnsSearch()) {
            $values_17 = array();
            foreach ($object->getDnsSearch() as $value_17) {
                $values_17[] = $value_17;
            }
            $data['DnsSearch'] = $values_17;
        }
        if ($object->isInitialized('extraHosts') && null !== $object->getExtraHosts()) {
            $values_18 = array();
            foreach ($object->getExtraHosts() as $value_18) {
                $values_18[] = $value_18;
            }
            $data['ExtraHosts'] = $values_18;
        }
        if ($object->isInitialized('groupAdd') && null !== $object->getGroupAdd()) {
            $values_19 = array();
            foreach ($object->getGroupAdd() as $value_19) {
                $values_19[] = $value_19;
            }
            $data['GroupAdd'] = $values_19;
        }
        if ($object->isInitialized('ipcMode') && null !== $object->getIpcMode()) {
            $data['IpcMode'] = $object->getIpcMode();
        }
        if ($object->isInitialized('cgroup') && null !== $object->getCgroup()) {
            $data['Cgroup'] = $object->getCgroup();
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $values_20 = array();
            foreach ($object->getLinks() as $value_20) {
                $values_20[] = $value_20;
            }
            $data['Links'] = $values_20;
        }
        if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
            $data['OomScoreAdj'] = $object->getOomScoreAdj();
        }
        if ($object->isInitialized('pidMode') && null !== $object->getPidMode()) {
            $data['PidMode'] = $object->getPidMode();
        }
        if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if ($object->isInitialized('publishAllPorts') && null !== $object->getPublishAllPorts()) {
            $data['PublishAllPorts'] = $object->getPublishAllPorts();
        }
        if ($object->isInitialized('readonlyRootfs') && null !== $object->getReadonlyRootfs()) {
            $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
        }
        if ($object->isInitialized('securityOpt') && null !== $object->getSecurityOpt()) {
            $values_21 = array();
            foreach ($object->getSecurityOpt() as $value_21) {
                $values_21[] = $value_21;
            }
            $data['SecurityOpt'] = $values_21;
        }
        if ($object->isInitialized('storageOpt') && null !== $object->getStorageOpt()) {
            $values_22 = array();
            foreach ($object->getStorageOpt() as $key_1 => $value_22) {
                $values_22[$key_1] = $value_22;
            }
            $data['StorageOpt'] = $values_22;
        }
        if ($object->isInitialized('tmpfs') && null !== $object->getTmpfs()) {
            $values_23 = array();
            foreach ($object->getTmpfs() as $key_2 => $value_23) {
                $values_23[$key_2] = $value_23;
            }
            $data['Tmpfs'] = $values_23;
        }
        if ($object->isInitialized('uTSMode') && null !== $object->getUTSMode()) {
            $data['UTSMode'] = $object->getUTSMode();
        }
        if ($object->isInitialized('usernsMode') && null !== $object->getUsernsMode()) {
            $data['UsernsMode'] = $object->getUsernsMode();
        }
        if ($object->isInitialized('shmSize') && null !== $object->getShmSize()) {
            $data['ShmSize'] = $object->getShmSize();
        }
        if ($object->isInitialized('sysctls') && null !== $object->getSysctls()) {
            $values_24 = array();
            foreach ($object->getSysctls() as $key_3 => $value_24) {
                $values_24[$key_3] = $value_24;
            }
            $data['Sysctls'] = $values_24;
        }
        if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
            $values_25 = array();
            foreach ($object->getConsoleSize() as $value_25) {
                $values_25[] = $value_25;
            }
            $data['ConsoleSize'] = $values_25;
        }
        if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        foreach ($object as $key_4 => $value_26) {
            if (preg_match('/.*/', (string) $key_4)) {
                $data[$key_4] = $value_26;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\API\\Model\\HostConfig' => false);
    }
}
