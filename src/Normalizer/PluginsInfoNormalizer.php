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
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\PluginsInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PluginsInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\PluginsInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data) && $data['Volume'] !== null) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
                unset($data['Volume']);
            }
            elseif (\array_key_exists('Volume', $data) && $data['Volume'] === null) {
                $object->setVolume(null);
            }
            if (\array_key_exists('Network', $data) && $data['Network'] !== null) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
                unset($data['Network']);
            }
            elseif (\array_key_exists('Network', $data) && $data['Network'] === null) {
                $object->setNetwork(null);
            }
            if (\array_key_exists('Authorization', $data) && $data['Authorization'] !== null) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
                unset($data['Authorization']);
            }
            elseif (\array_key_exists('Authorization', $data) && $data['Authorization'] === null) {
                $object->setAuthorization(null);
            }
            if (\array_key_exists('Log', $data) && $data['Log'] !== null) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
                unset($data['Log']);
            }
            elseif (\array_key_exists('Log', $data) && $data['Log'] === null) {
                $object->setLog(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\PluginsInfo' => false];
        }
    }
} else {
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\PluginsInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PluginsInfo';
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
            $object = new \Docker\API\Model\PluginsInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data) && $data['Volume'] !== null) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
                unset($data['Volume']);
            }
            elseif (\array_key_exists('Volume', $data) && $data['Volume'] === null) {
                $object->setVolume(null);
            }
            if (\array_key_exists('Network', $data) && $data['Network'] !== null) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
                unset($data['Network']);
            }
            elseif (\array_key_exists('Network', $data) && $data['Network'] === null) {
                $object->setNetwork(null);
            }
            if (\array_key_exists('Authorization', $data) && $data['Authorization'] !== null) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
                unset($data['Authorization']);
            }
            elseif (\array_key_exists('Authorization', $data) && $data['Authorization'] === null) {
                $object->setAuthorization(null);
            }
            if (\array_key_exists('Log', $data) && $data['Log'] !== null) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
                unset($data['Log']);
            }
            elseif (\array_key_exists('Log', $data) && $data['Log'] === null) {
                $object->setLog(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\PluginsInfo' => false];
        }
    }
}