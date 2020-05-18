<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class IdResponse
{
    /**
     * The id of the newly created object.
     *
     * @var string
     */
    protected $id;

    /**
     * The id of the newly created object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The id of the newly created object.
     *
     * @param string $id
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
