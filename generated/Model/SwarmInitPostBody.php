<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmInitPostBody
{
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @var string
     */
    protected $listenAddr;
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @var string
     */
    protected $advertiseAddr;
    /**
     * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,.
     *
     * @var string
     */
    protected $dataPathAddr;
    /**
     * Force creation of a new swarm.
     *
     * @var bool
     */
    protected $forceNewCluster;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec
     */
    protected $spec;

    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @return string
     */
    public function getListenAddr(): ?string
    {
        return $this->listenAddr;
    }

    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @param string $listenAddr
     */
    public function setListenAddr(?string $listenAddr): self
    {
        $this->listenAddr = $listenAddr;

        return $this;
    }

    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @return string
     */
    public function getAdvertiseAddr(): ?string
    {
        return $this->advertiseAddr;
    }

    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @param string $advertiseAddr
     */
    public function setAdvertiseAddr(?string $advertiseAddr): self
    {
        $this->advertiseAddr = $advertiseAddr;

        return $this;
    }

    /**
     * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,.
     *
     * @return string
     */
    public function getDataPathAddr(): ?string
    {
        return $this->dataPathAddr;
    }

    /**
     * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,.
     *
     * @param string $dataPathAddr
     */
    public function setDataPathAddr(?string $dataPathAddr): self
    {
        $this->dataPathAddr = $dataPathAddr;

        return $this;
    }

    /**
     * Force creation of a new swarm.
     *
     * @return bool
     */
    public function getForceNewCluster(): ?bool
    {
        return $this->forceNewCluster;
    }

    /**
     * Force creation of a new swarm.
     *
     * @param bool $forceNewCluster
     */
    public function setForceNewCluster(?bool $forceNewCluster): self
    {
        $this->forceNewCluster = $forceNewCluster;

        return $this;
    }

    /**
     * User modifiable swarm configuration.
     *
     * @return SwarmSpec
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable swarm configuration.
     *
     * @param SwarmSpec $spec
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }
}
