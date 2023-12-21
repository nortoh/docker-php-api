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
class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\API\\Model\\TaskSpec';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpec';
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
        $object = new \Docker\API\Model\TaskSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PluginSpec', $data) && $data['PluginSpec'] !== null) {
            $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], 'Docker\\API\\Model\\TaskSpecPluginSpec', 'json', $context));
            unset($data['PluginSpec']);
        }
        elseif (\array_key_exists('PluginSpec', $data) && $data['PluginSpec'] === null) {
            $object->setPluginSpec(null);
        }
        if (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] !== null) {
            $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], 'Docker\\API\\Model\\TaskSpecContainerSpec', 'json', $context));
            unset($data['ContainerSpec']);
        }
        elseif (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] === null) {
            $object->setContainerSpec(null);
        }
        if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], 'Docker\\API\\Model\\TaskSpecResources', 'json', $context));
            unset($data['Resources']);
        }
        elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
            $object->setResources(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\API\\Model\\TaskSpecRestartPolicy', 'json', $context));
            unset($data['RestartPolicy']);
        }
        elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
            $object->setRestartPolicy(null);
        }
        if (\array_key_exists('Placement', $data) && $data['Placement'] !== null) {
            $object->setPlacement($this->denormalizer->denormalize($data['Placement'], 'Docker\\API\\Model\\TaskSpecPlacement', 'json', $context));
            unset($data['Placement']);
        }
        elseif (\array_key_exists('Placement', $data) && $data['Placement'] === null) {
            $object->setPlacement(null);
        }
        if (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] !== null) {
            $object->setForceUpdate($data['ForceUpdate']);
            unset($data['ForceUpdate']);
        }
        elseif (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] === null) {
            $object->setForceUpdate(null);
        }
        if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
            $object->setRuntime($data['Runtime']);
            unset($data['Runtime']);
        }
        elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
            $values = array();
            foreach ($data['Networks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\TaskSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values);
            unset($data['Networks']);
        }
        elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
            $object->setNetworks(null);
        }
        if (\array_key_exists('LogDriver', $data) && $data['LogDriver'] !== null) {
            $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], 'Docker\\API\\Model\\TaskSpecLogDriver', 'json', $context));
            unset($data['LogDriver']);
        }
        elseif (\array_key_exists('LogDriver', $data) && $data['LogDriver'] === null) {
            $object->setLogDriver(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('pluginSpec') && null !== $object->getPluginSpec()) {
            $data['PluginSpec'] = $object->getPluginSpec() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPluginSpec(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('containerSpec') && null !== $object->getContainerSpec()) {
            $data['ContainerSpec'] = $object->getContainerSpec() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getContainerSpec(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('resources') && null !== $object->getResources()) {
            $data['Resources'] = $object->getResources() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getResources(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $object->getRestartPolicy() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getRestartPolicy(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('placement') && null !== $object->getPlacement()) {
            $data['Placement'] = $object->getPlacement() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPlacement(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('forceUpdate') && null !== $object->getForceUpdate()) {
            $data['ForceUpdate'] = $object->getForceUpdate();
        }
        if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
            $values = array();
            foreach ($object->getNetworks() as $value) {
                $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['Networks'] = $values;
        }
        if ($object->isInitialized('logDriver') && null !== $object->getLogDriver()) {
            $data['LogDriver'] = $object->getLogDriver() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getLogDriver(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\API\\Model\\TaskSpec' => false);
    }
}