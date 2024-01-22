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
class ResourceObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Docker\API\Model\ResourceObject';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Docker\API\Model\ResourceObject';
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
        $object = new \Docker\API\Model\ResourceObject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] !== null) {
            $object->setNanoCPUs($data['NanoCPUs']);
            unset($data['NanoCPUs']);
        }
        elseif (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] === null) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('MemoryBytes', $data) && $data['MemoryBytes'] !== null) {
            $object->setMemoryBytes($data['MemoryBytes']);
            unset($data['MemoryBytes']);
        }
        elseif (\array_key_exists('MemoryBytes', $data) && $data['MemoryBytes'] === null) {
            $object->setMemoryBytes(null);
        }
        if (\array_key_exists('GenericResources', $data) && $data['GenericResources'] !== null) {
            $values = [];
            foreach ($data['GenericResources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\API\Model\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values);
            unset($data['GenericResources']);
        }
        elseif (\array_key_exists('GenericResources', $data) && $data['GenericResources'] === null) {
            $object->setGenericResources(null);
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
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('nanoCPUs') && null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        }
        if ($object->isInitialized('memoryBytes') && null !== $object->getMemoryBytes()) {
            $data['MemoryBytes'] = $object->getMemoryBytes();
        }
        if ($object->isInitialized('genericResources') && null !== $object->getGenericResources()) {
            $values = [];
            foreach ($object->getGenericResources() as $value) {
                $values[] = ($value == null) ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['GenericResources'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Docker\API\Model\ResourceObject' => false];
    }
}