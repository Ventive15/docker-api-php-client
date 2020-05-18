<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmUnlockkeyGetResponse200
{
    /**
     * The swarm's unlock key.
     *
     * @var string
     */
    protected $unlockKey;

    /**
     * The swarm's unlock key.
     *
     * @return string
     */
    public function getUnlockKey(): ?string
    {
        return $this->unlockKey;
    }

    /**
     * The swarm's unlock key.
     *
     * @param string $unlockKey
     */
    public function setUnlockKey(?string $unlockKey): self
    {
        $this->unlockKey = $unlockKey;

        return $this;
    }
}
