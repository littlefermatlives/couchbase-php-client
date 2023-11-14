<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv/v1/kv.proto

namespace Couchbase\Protostellar\Generated\KV\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.kv.v1.InsertRequest</code>
 */
class InsertRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     */
    protected $scope_name = '';
    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * Generated from protobuf field <code>string key = 4;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>uint32 content_flags = 11;</code>
     */
    protected $content_flags = 0;
    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel durability_level = 9;</code>
     */
    protected $durability_level = null;
    protected $content;
    protected $expiry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *     @type string $scope_name
     *     @type string $collection_name
     *     @type string $key
     *     @type string $content_uncompressed
     *     @type string $content_compressed
     *     @type int $content_flags
     *     @type \Google\Protobuf\Timestamp $expiry_time
     *     @type int $expiry_secs
     *     @type int $durability_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Kv\V1\Kv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @return string
     */
    public function getScopeName()
    {
        return $this->scope_name;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScopeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 4;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes content_uncompressed = 5;</code>
     * @return string
     */
    public function getContentUncompressed()
    {
        return $this->readOneof(5);
    }

    public function hasContentUncompressed()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>bytes content_uncompressed = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContentUncompressed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes content_compressed = 12;</code>
     * @return string
     */
    public function getContentCompressed()
    {
        return $this->readOneof(12);
    }

    public function hasContentCompressed()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>bytes content_compressed = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setContentCompressed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 content_flags = 11;</code>
     * @return int
     */
    public function getContentFlags()
    {
        return $this->content_flags;
    }

    /**
     * Generated from protobuf field <code>uint32 content_flags = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setContentFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->content_flags = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryTime()
    {
        return $this->readOneof(7);
    }

    public function hasExpiryTime()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expiry_secs = 10;</code>
     * @return int
     */
    public function getExpirySecs()
    {
        return $this->readOneof(10);
    }

    public function hasExpirySecs()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>uint32 expiry_secs = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setExpirySecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel durability_level = 9;</code>
     * @return int
     */
    public function getDurabilityLevel()
    {
        return isset($this->durability_level) ? $this->durability_level : 0;
    }

    public function hasDurabilityLevel()
    {
        return isset($this->durability_level);
    }

    public function clearDurabilityLevel()
    {
        unset($this->durability_level);
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel durability_level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDurabilityLevel($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\Protostellar\Generated\KV\V1\DurabilityLevel::class);
        $this->durability_level = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

    /**
     * @return string
     */
    public function getExpiry()
    {
        return $this->whichOneof("expiry");
    }

}

