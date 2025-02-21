<?php

namespace JobMetric\PaymentMethod;

use Illuminate\Support\Facades\App;
use JobMetric\Extension\Facades\ExtensionType;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\PaymentMethod\Events\InjectDriverNamespaceEvent;

class PaymentMethodServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @param PackageCore $package
     *
     * @return void
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('laravel-payment-method')
            ->hasConfig()
            ->hasTranslation();
    }

    public function afterBootPackage(): void
    {
        App::booted(function () {
            $defaultDriverNamespace = config('payment-method.namespaces');

            $event = new InjectDriverNamespaceEvent;
            event($event);

            $driverNamespace = array_merge($defaultDriverNamespace, $event->driverNamespace);

            ExtensionType::define('payment-method')
                ->label('payment-method::base.label')
                ->description('payment-method::base.description')
                ->showDescriptionInList()
                ->driverNamespace($driverNamespace);
        });
    }
}
