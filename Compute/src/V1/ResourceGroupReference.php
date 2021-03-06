<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourceGroupReference</code>
 */
class ResourceGroupReference extends \Google\Protobuf\Internal\Message
{
    /**
     * A URI referencing one of the instance groups or network endpoint groups listed in the backend service.
     *
     * Generated from protobuf field <code>string group = 98629247;</code>
     */
    private $group = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *           A URI referencing one of the instance groups or network endpoint groups listed in the backend service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A URI referencing one of the instance groups or network endpoint groups listed in the backend service.
     *
     * Generated from protobuf field <code>string group = 98629247;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A URI referencing one of the instance groups or network endpoint groups listed in the backend service.
     *
     * Generated from protobuf field <code>string group = 98629247;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

}

