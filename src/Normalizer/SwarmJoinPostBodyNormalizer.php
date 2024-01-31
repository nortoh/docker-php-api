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
    class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\SwarmJoinPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmJoinPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\SwarmJoinPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] !== null) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            elseif (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] === null) {
                $object->setListenAddr(null);
            }
            if (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] !== null) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            elseif (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] === null) {
                $object->setAdvertiseAddr(null);
            }
            if (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] !== null) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            elseif (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] === null) {
                $object->setDataPathAddr(null);
            }
            if (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] !== null) {
                $object->setRemoteAddrs($data['RemoteAddrs']);
                unset($data['RemoteAddrs']);
            }
            elseif (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] === null) {
                $object->setRemoteAddrs(null);
            }
            if (\array_key_exists('JoinToken', $data) && $data['JoinToken'] !== null) {
                $object->setJoinToken($data['JoinToken']);
                unset($data['JoinToken']);
            }
            elseif (\array_key_exists('JoinToken', $data) && $data['JoinToken'] === null) {
                $object->setJoinToken(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('remoteAddrs') && null !== $object->getRemoteAddrs()) {
                $data['RemoteAddrs'] = $object->getRemoteAddrs();
            }
            if ($object->isInitialized('joinToken') && null !== $object->getJoinToken()) {
                $data['JoinToken'] = $object->getJoinToken();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\SwarmJoinPostBody' => false];
        }
    }
} else {
    class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\SwarmJoinPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmJoinPostBody';
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
            $object = new \Docker\API\Model\SwarmJoinPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] !== null) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            elseif (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] === null) {
                $object->setListenAddr(null);
            }
            if (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] !== null) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            elseif (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] === null) {
                $object->setAdvertiseAddr(null);
            }
            if (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] !== null) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            elseif (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] === null) {
                $object->setDataPathAddr(null);
            }
            if (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] !== null) {
                $object->setRemoteAddrs($data['RemoteAddrs']);
                unset($data['RemoteAddrs']);
            }
            elseif (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] === null) {
                $object->setRemoteAddrs(null);
            }
            if (\array_key_exists('JoinToken', $data) && $data['JoinToken'] !== null) {
                $object->setJoinToken($data['JoinToken']);
                unset($data['JoinToken']);
            }
            elseif (\array_key_exists('JoinToken', $data) && $data['JoinToken'] === null) {
                $object->setJoinToken(null);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('remoteAddrs') && null !== $object->getRemoteAddrs()) {
                $data['RemoteAddrs'] = $object->getRemoteAddrs();
            }
            if ($object->isInitialized('joinToken') && null !== $object->getJoinToken()) {
                $data['JoinToken'] = $object->getJoinToken();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\SwarmJoinPostBody' => false];
        }
    }
}