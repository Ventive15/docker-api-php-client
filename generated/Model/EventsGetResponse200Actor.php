<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class EventsGetResponse200Actor
{
    /**
     * The ID of the object emitting the event.
     *
     * @var string
     */
    protected $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @var string[]
     */
    protected $attributes;

    /**
     * The ID of the object emitting the event.
     *
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * The ID of the object emitting the event.
     *
     * @param string $iD
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @return string[]
     */
    public function getAttributes(): ?\ArrayObject
    {
        return $this->attributes;
    }

    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @param string[] $attributes
     */
    public function setAttributes(?\ArrayObject $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
