<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.admin.wrapper.product' shared service.

return $this->services['prestashop.adapter.admin.wrapper.product'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->employee->getAssociatedShops(), ${($_ = isset($this->services['prestashop.core.localization.locale.context_locale']) ? $this->services['prestashop.core.localization.locale.context_locale'] : $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.utils.float_parser']) ? $this->services['prestashop.utils.float_parser'] : $this->load('getPrestashop_Utils_FloatParserService.php')) && false ?: '_'});
