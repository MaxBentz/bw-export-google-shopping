<?php

namespace BwElasticExportGoogleShopping;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class BwElasticExportGoogleShoppingServiceProvider extends DataExchangeServiceProvider
{
	public function register()
	{
	}

	public function exports(ExportPresetContainer $container)
	{
		$container->add(
			'BW-GoogleShopping-Plugin',
			'BwElasticExportGoogleShopping\ResultField\GoogleShopping',
			'BwElasticExportGoogleShopping\Generator\GoogleShopping',
            '',
			true,
            true
		);
	}
}
