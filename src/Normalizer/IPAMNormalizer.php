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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\IPAM';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\IPAM';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\IPAM();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $values = [];
                foreach ($data['Config'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setConfig($values);
                unset($data['Config']);
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values_2 = [];
                foreach ($data['Options'] as $value_2) {
                    $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $object->setOptions($values_2);
                unset($data['Options']);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $values = [];
                foreach ($object->getConfig() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Config'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $data['Options'] = $values_2;
            }
            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\IPAM' => false];
        }
    }
} else {
    class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\IPAM';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\IPAM';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\IPAM();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $values = [];
                foreach ($data['Config'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setConfig($values);
                unset($data['Config']);
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values_2 = [];
                foreach ($data['Options'] as $value_2) {
                    $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $object->setOptions($values_2);
                unset($data['Options']);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $values = [];
                foreach ($object->getConfig() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['Config'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $data['Options'] = $values_2;
            }
            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\IPAM' => false];
        }
    }
}