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
class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Docker\API\Model\Plugin';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Docker\API\Model\Plugin';
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $class, string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Plugin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
            unset($data['Id']);
        }
        elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Enabled', $data) && $data['Enabled'] !== null) {
            $object->setEnabled($data['Enabled']);
            unset($data['Enabled']);
        }
        elseif (\array_key_exists('Enabled', $data) && $data['Enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('Settings', $data) && $data['Settings'] !== null) {
            $object->setSettings($this->denormalizer->denormalize($data['Settings'], 'Docker\API\Model\PluginSettings', 'json', $context));
            unset($data['Settings']);
        }
        elseif (\array_key_exists('Settings', $data) && $data['Settings'] === null) {
            $object->setSettings(null);
        }
        if (\array_key_exists('PluginReference', $data) && $data['PluginReference'] !== null) {
            $object->setPluginReference($data['PluginReference']);
            unset($data['PluginReference']);
        }
        elseif (\array_key_exists('PluginReference', $data) && $data['PluginReference'] === null) {
            $object->setPluginReference(null);
        }
        if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\API\Model\PluginConfig', 'json', $context));
            unset($data['Config']);
        }
        elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
            $object->setConfig(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        $data['Name'] = $object->getName();
        $data['Enabled'] = $object->getEnabled();
        $data['Settings'] = ($object->getSettings() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getSettings(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
            $data['PluginReference'] = $object->getPluginReference();
        }
        $data['Config'] = ($object->getConfig() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getConfig(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Docker\API\Model\Plugin' => false];
    }
}