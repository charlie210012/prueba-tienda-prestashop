<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.supplier.command_handler.delete_supplier_handler' shared service.

return $this->services['prestashop.adapter.supplier.command_handler.delete_supplier_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\DeleteSupplierHandler(${($_ = isset($this->services['prestashop.adapter.supplier.supplier_order_validator']) ? $this->services['prestashop.adapter.supplier.supplier_order_validator'] : ($this->services['prestashop.adapter.supplier.supplier_order_validator'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierOrderValidator())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.supplier.provider.supplier_address']) ? $this->services['prestashop.adapter.supplier.provider.supplier_address'] : ($this->services['prestashop.adapter.supplier.provider.supplier_address'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierAddressProvider())) && false ?: '_'}, 'ca_');
