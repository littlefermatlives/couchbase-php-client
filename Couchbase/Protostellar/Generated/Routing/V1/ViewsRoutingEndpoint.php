<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/routing/v1/routing.proto

namespace Couchbase\Protostellar\Generated\Routing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.routing.v1.ViewsRoutingEndpoint</code>
 */
class ViewsRoutingEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 endpoint_idx = 1;</code>
     */
    protected $endpoint_idx = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $endpoint_idx
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Routing\V1\Routing::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 endpoint_idx = 1;</code>
     * @return int
     */
    public function getEndpointIdx()
    {
        return $this->endpoint_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 endpoint_idx = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEndpointIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->endpoint_idx = $var;

        return $this;
    }

}

