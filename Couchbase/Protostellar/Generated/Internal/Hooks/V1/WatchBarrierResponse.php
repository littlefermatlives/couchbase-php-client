<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/internal/hooks/v1/hooks.proto

namespace Couchbase\Protostellar\Generated\Internal\Hooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.internal.hooks.v1.WatchBarrierResponse</code>
 */
class WatchBarrierResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string wait_id = 2;</code>
     */
    protected $wait_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $wait_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Internal\Hooks\V1\Hooks::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string wait_id = 2;</code>
     * @return string
     */
    public function getWaitId()
    {
        return $this->wait_id;
    }

    /**
     * Generated from protobuf field <code>string wait_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWaitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->wait_id = $var;

        return $this;
    }

}

