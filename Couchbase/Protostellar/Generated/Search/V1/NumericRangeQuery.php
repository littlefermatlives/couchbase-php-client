<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search/v1/search.proto

namespace Couchbase\Protostellar\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.NumericRangeQuery</code>
 */
class NumericRangeQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     */
    protected $boost = null;
    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     */
    protected $field = null;
    /**
     * Generated from protobuf field <code>optional float min = 3;</code>
     */
    protected $min = null;
    /**
     * Generated from protobuf field <code>optional float max = 4;</code>
     */
    protected $max = null;
    /**
     * Generated from protobuf field <code>optional bool inclusive_min = 5;</code>
     */
    protected $inclusive_min = null;
    /**
     * Generated from protobuf field <code>optional bool inclusive_max = 6;</code>
     */
    protected $inclusive_max = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *     @type string $field
     *     @type float $min
     *     @type float $max
     *     @type bool $inclusive_min
     *     @type bool $inclusive_max
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Search\V1\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     * @return float
     */
    public function getBoost()
    {
        return isset($this->boost) ? $this->boost : 0.0;
    }

    public function hasBoost()
    {
        return isset($this->boost);
    }

    public function clearBoost()
    {
        unset($this->boost);
    }

    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     * @return string
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : '';
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float min = 3;</code>
     * @return float
     */
    public function getMin()
    {
        return isset($this->min) ? $this->min : 0.0;
    }

    public function hasMin()
    {
        return isset($this->min);
    }

    public function clearMin()
    {
        unset($this->min);
    }

    /**
     * Generated from protobuf field <code>optional float min = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkFloat($var);
        $this->min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float max = 4;</code>
     * @return float
     */
    public function getMax()
    {
        return isset($this->max) ? $this->max : 0.0;
    }

    public function hasMax()
    {
        return isset($this->max);
    }

    public function clearMax()
    {
        unset($this->max);
    }

    /**
     * Generated from protobuf field <code>optional float max = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkFloat($var);
        $this->max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool inclusive_min = 5;</code>
     * @return bool
     */
    public function getInclusiveMin()
    {
        return isset($this->inclusive_min) ? $this->inclusive_min : false;
    }

    public function hasInclusiveMin()
    {
        return isset($this->inclusive_min);
    }

    public function clearInclusiveMin()
    {
        unset($this->inclusive_min);
    }

    /**
     * Generated from protobuf field <code>optional bool inclusive_min = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setInclusiveMin($var)
    {
        GPBUtil::checkBool($var);
        $this->inclusive_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool inclusive_max = 6;</code>
     * @return bool
     */
    public function getInclusiveMax()
    {
        return isset($this->inclusive_max) ? $this->inclusive_max : false;
    }

    public function hasInclusiveMax()
    {
        return isset($this->inclusive_max);
    }

    public function clearInclusiveMax()
    {
        unset($this->inclusive_max);
    }

    /**
     * Generated from protobuf field <code>optional bool inclusive_max = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setInclusiveMax($var)
    {
        GPBUtil::checkBool($var);
        $this->inclusive_max = $var;

        return $this;
    }

}

