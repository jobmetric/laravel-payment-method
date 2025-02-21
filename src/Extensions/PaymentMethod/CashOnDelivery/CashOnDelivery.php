<?php

namespace JobMetric\PaymentMethod\Extensions\PaymentMethod\CashOnDelivery;

use JobMetric\Extension\Contracts\ExtensionContract;

class CashOnDelivery implements ExtensionContract
{
    /**
     * Handle the extension.
     *
     * @param array $options
     *
     * @return string|null
     */
    public function handle(array $options = []): ?string
    {
        return 'Handle the extension';
    }

    /**
     * Install the extension.
     *
     * @return void
     */
    public static function install(): void
    {
        //
    }

    /**
     * Uninstall the extension.
     *
     * @return void
     */
    public static function uninstall(): void
    {
        //
    }
}
