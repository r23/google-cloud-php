<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A VPN gateway interface.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGatewayVpnGatewayInterface</code>
 */
class VpnGatewayVpnGatewayInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * The numeric ID of this VPN gateway interface.
     *
     * Generated from protobuf field <code>uint32 id = 3355;</code>
     */
    private $id = 0;
    /**
     * [Output Only] The external IP address for this VPN gateway interface.
     *
     * Generated from protobuf field <code>string ip_address = 137836764;</code>
     */
    private $ip_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           The numeric ID of this VPN gateway interface.
     *     @type string $ip_address
     *           [Output Only] The external IP address for this VPN gateway interface.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The numeric ID of this VPN gateway interface.
     *
     * Generated from protobuf field <code>uint32 id = 3355;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The numeric ID of this VPN gateway interface.
     *
     * Generated from protobuf field <code>uint32 id = 3355;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The external IP address for this VPN gateway interface.
     *
     * Generated from protobuf field <code>string ip_address = 137836764;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * [Output Only] The external IP address for this VPN gateway interface.
     *
     * Generated from protobuf field <code>string ip_address = 137836764;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

}

