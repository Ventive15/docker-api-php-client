<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class MountVolumeOptions
{
    /**
     * Populate volume with data from the target.
     *
     * @var bool
     */
    protected $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Map of driver specific options.
     *
     * @var MountVolumeOptionsDriverConfig
     */
    protected $driverConfig;

    /**
     * Populate volume with data from the target.
     *
     * @return bool
     */
    public function getNoCopy(): ?bool
    {
        return $this->noCopy;
    }

    /**
     * Populate volume with data from the target.
     *
     * @param bool $noCopy
     */
    public function setNoCopy(?bool $noCopy): self
    {
        $this->noCopy = $noCopy;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Map of driver specific options.
     *
     * @return MountVolumeOptionsDriverConfig
     */
    public function getDriverConfig(): ?MountVolumeOptionsDriverConfig
    {
        return $this->driverConfig;
    }

    /**
     * Map of driver specific options.
     *
     * @param MountVolumeOptionsDriverConfig $driverConfig
     */
    public function setDriverConfig(?MountVolumeOptionsDriverConfig $driverConfig): self
    {
        $this->driverConfig = $driverConfig;

        return $this;
    }
}
