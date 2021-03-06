<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DiskMoveRequest</code>
 */
class DiskMoveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of the destination zone to move the disk. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     */
    private $destination_zone = '';
    /**
     * The URL of the target disk to move. This can be a full or partial URL. For example, the following are all valid URLs to a disk:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/disks/disk
     * - projects/project/zones/zone/disks/disk
     * - zones/zone/disks/disk
     *
     * Generated from protobuf field <code>string target_disk = 62433163;</code>
     */
    private $target_disk = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination_zone
     *           The URL of the destination zone to move the disk. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     *           - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     *           - projects/project/zones/zone
     *           - zones/zone
     *     @type string $target_disk
     *           The URL of the target disk to move. This can be a full or partial URL. For example, the following are all valid URLs to a disk:
     *           - https://www.googleapis.com/compute/v1/projects/project/zones/zone/disks/disk
     *           - projects/project/zones/zone/disks/disk
     *           - zones/zone/disks/disk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of the destination zone to move the disk. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     * @return string
     */
    public function getDestinationZone()
    {
        return $this->destination_zone;
    }

    /**
     * The URL of the destination zone to move the disk. This can be a full or partial URL. For example, the following are all valid URLs to a zone:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone
     * - projects/project/zones/zone
     * - zones/zone
     *
     * Generated from protobuf field <code>string destination_zone = 131854653;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_zone = $var;

        return $this;
    }

    /**
     * The URL of the target disk to move. This can be a full or partial URL. For example, the following are all valid URLs to a disk:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/disks/disk
     * - projects/project/zones/zone/disks/disk
     * - zones/zone/disks/disk
     *
     * Generated from protobuf field <code>string target_disk = 62433163;</code>
     * @return string
     */
    public function getTargetDisk()
    {
        return $this->target_disk;
    }

    /**
     * The URL of the target disk to move. This can be a full or partial URL. For example, the following are all valid URLs to a disk:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/disks/disk
     * - projects/project/zones/zone/disks/disk
     * - zones/zone/disks/disk
     *
     * Generated from protobuf field <code>string target_disk = 62433163;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_disk = $var;

        return $this;
    }

}

