<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ISO
 * @package Exploriment\HetznerCloud\Objects
 */
final class ISO extends BaseObject
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $type;

    /**
     * ID of the ISO
     *
     * @see https://docs.hetzner.cloud/#resources-isos-get-1
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier of the ISO. Only set for public ISOs
     *
     * @see https://docs.hetzner.cloud/#resources-isos-get-1
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Description of the ISO
     *
     * @see https://docs.hetzner.cloud/#resources-isos-get-1
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Type of ISO (public / private)
     *
     * @see https://docs.hetzner.cloud/#resources-isos-get-1
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->type === 'public';
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->type === 'private';
    }

}