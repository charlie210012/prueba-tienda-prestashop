<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.image.repository.product_image_repository' shared service.

return $this->services['prestashop.adapter.product.image.repository.product_image_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ca_', ${($_ = isset($this->services['prestashop.adapter.product.image.validate.product_image_validator']) ? $this->services['prestashop.adapter.product.image.validate.product_image_validator'] : ($this->services['prestashop.adapter.product.image.validate.product_image_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Validate\ProductImageValidator())) && false ?: '_'});
