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
class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Docker\API\Model\TaskSpecContainerSpecPrivileges';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Docker\API\Model\TaskSpecContainerSpecPrivileges';
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
        $object = new \Docker\API\Model\TaskSpecContainerSpecPrivileges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] !== null) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], 'Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec', 'json', $context));
            unset($data['CredentialSpec']);
        }
        elseif (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] === null) {
            $object->setCredentialSpec(null);
        }
        if (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] !== null) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], 'Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext', 'json', $context));
            unset($data['SELinuxContext']);
        }
        elseif (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] === null) {
            $object->setSELinuxContext(null);
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
        if ($object->isInitialized('credentialSpec') && null !== $object->getCredentialSpec()) {
            $data['CredentialSpec'] = ($object->getCredentialSpec() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getCredentialSpec(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('sELinuxContext') && null !== $object->getSELinuxContext()) {
            $data['SELinuxContext'] = ($object->getSELinuxContext() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getSELinuxContext(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Docker\API\Model\TaskSpecContainerSpecPrivileges' => false];
    }
}