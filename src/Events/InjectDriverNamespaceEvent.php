<?php

namespace JobMetric\PaymentMethod\Events;

class InjectDriverNamespaceEvent
{
    /**
     * The Driver Namespace
     *
     * @var array
     */
    public array $driverNamespace = [];

    /**
     * Set Driver Namespace
     *
     * @param array $driverNamespace
     *
     * @return static
     */
    public function driverNamespace(array $driverNamespace): static
    {
        $this->driverNamespace = array_merge($this->driverNamespace, $driverNamespace);

        return $this;
    }
}
