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
class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\API\\Model\\TLSInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TLSInfo';
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
        $object = new \Docker\API\Model\TLSInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrustRoot', $data) && $data['TrustRoot'] !== null) {
            $object->setTrustRoot($data['TrustRoot']);
            unset($data['TrustRoot']);
        }
        elseif (\array_key_exists('TrustRoot', $data) && $data['TrustRoot'] === null) {
            $object->setTrustRoot(null);
        }
        if (\array_key_exists('CertIssuerSubject', $data) && $data['CertIssuerSubject'] !== null) {
            $object->setCertIssuerSubject($data['CertIssuerSubject']);
            unset($data['CertIssuerSubject']);
        }
        elseif (\array_key_exists('CertIssuerSubject', $data) && $data['CertIssuerSubject'] === null) {
            $object->setCertIssuerSubject(null);
        }
        if (\array_key_exists('CertIssuerPublicKey', $data) && $data['CertIssuerPublicKey'] !== null) {
            $object->setCertIssuerPublicKey($data['CertIssuerPublicKey']);
            unset($data['CertIssuerPublicKey']);
        }
        elseif (\array_key_exists('CertIssuerPublicKey', $data) && $data['CertIssuerPublicKey'] === null) {
            $object->setCertIssuerPublicKey(null);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('trustRoot') && null !== $object->getTrustRoot()) {
            $data['TrustRoot'] = $object->getTrustRoot();
        }
        if ($object->isInitialized('certIssuerSubject') && null !== $object->getCertIssuerSubject()) {
            $data['CertIssuerSubject'] = $object->getCertIssuerSubject();
        }
        if ($object->isInitialized('certIssuerPublicKey') && null !== $object->getCertIssuerPublicKey()) {
            $data['CertIssuerPublicKey'] = $object->getCertIssuerPublicKey();
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
        return array('Docker\\API\\Model\\TLSInfo' => false);
    }
}