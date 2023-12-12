<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search/v1/search.proto

namespace Couchbase\Protostellar\Generated\Search\V1\SearchQueryResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.SearchQueryResponse.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * Generated from protobuf field <code>string term = 2;</code>
     */
    protected $term = '';
    /**
     * Generated from protobuf field <code>uint32 position = 3;</code>
     */
    protected $position = 0;
    /**
     * Generated from protobuf field <code>uint32 start = 4;</code>
     */
    protected $start = 0;
    /**
     * Generated from protobuf field <code>uint32 end = 5;</code>
     */
    protected $end = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 array_positions = 6;</code>
     */
    private $array_positions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *     @type string $term
     *     @type int $position
     *     @type int $start
     *     @type int $end
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $array_positions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Search\V1\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
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
     * Generated from protobuf field <code>string term = 2;</code>
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Generated from protobuf field <code>string term = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->term = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 position = 3;</code>
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Generated from protobuf field <code>uint32 position = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkUint32($var);
        $this->position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 start = 4;</code>
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>uint32 start = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkUint32($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 end = 5;</code>
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>uint32 end = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkUint32($var);
        $this->end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 array_positions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArrayPositions()
    {
        return $this->array_positions;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 array_positions = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArrayPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->array_positions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Location::class, \Couchbase\Protostellar\Generated\Search\V1\SearchQueryResponse_Location::class);
