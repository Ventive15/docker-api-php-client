<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskStatus
{
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $err;
    /**
     * @var TaskStatusContainerStatus
     */
    protected $containerStatus;

    /**
     * @return string
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(?string $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getErr(): ?string
    {
        return $this->err;
    }

    /**
     * @param string $err
     */
    public function setErr(?string $err): self
    {
        $this->err = $err;

        return $this;
    }

    /**
     * @return TaskStatusContainerStatus
     */
    public function getContainerStatus(): ?TaskStatusContainerStatus
    {
        return $this->containerStatus;
    }

    /**
     * @param TaskStatusContainerStatus $containerStatus
     */
    public function setContainerStatus(?TaskStatusContainerStatus $containerStatus): self
    {
        $this->containerStatus = $containerStatus;

        return $this;
    }
}
