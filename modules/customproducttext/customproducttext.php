<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomProductText extends Module
{
    /**
     * Constructor of the module
     */
    public function __construct()
    {
        $this->name = 'customproducttext';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Carlos Andrés Arévalo Cortés';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Texto personalizado de producto');
        $this->description = $this->l('Permite añadir texto personalizado a la vista del producto.');
    }

    /**
     * Install the module
     *
     * @return bool Installation result
     */
    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayProductAdditionalInfo') ||
            !$this->registerHook('actionProductUpdate') ||
            !$this->registerHook('displayAdminProductsMainStepLeftColumnMiddle')
        ) {
            return false;
        }
        
        // Add custom_text field to the product table
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product` ADD `custom_text` TEXT');

        return true;
    }

    /**
     * Uninstall the module
     *
     * @return bool Uninstallation result
     */
    public function uninstall()
    {
        if (!parent::uninstall() ||
            !$this->unregisterHook('displayProductAdditionalInfo') ||
            !$this->unregisterHook('actionProductUpdate') ||
            !$this->unregisterHook('displayAdminProductsMainStepLeftColumnMiddle')
        ) {
            return false;
        }

        // Remove custom_text field from the product table
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product` DROP `custom_text`');

        return true;
    }

   
    /**
     * @param array $params
     * 
     * @return void
     */
    public function hookActionProductUpdate(array $params): void
    {
        $productId = (int) $params['id_product'];
        $customText = pSQL(Tools::getValue('custom_text'));

        // Update custom_text field in the product table
        Db::getInstance()->execute(
            'UPDATE `'._DB_PREFIX_.'product`
             SET `custom_text` = "'.$customText.'"
             WHERE `id_product` = '.$productId
        );
    }

    /**
     * Hook to display custom product text on the front-end product page
     *
     * @param array $params Hook parameters
     * @return string Rendered HTML content
     */
    public function hookDisplayProductAdditionalInfo($params):string
    {
        $productText = $this->getProductText($params['product']['id_product']);
        $this->context->smarty->assign(array(
            'productText' => $productText,
        ));
        return $this->display(__FILE__, 'views/templates/hook/custom_product_text.tpl');
    }

   
    /**
     * @param mixed $params
     * 
     */
    public function hookDisplayAdminProductsMainStepLeftColumnMiddle($params)
    {
        if (isset($params['id_product']) && $params['id_product']) {
            $productId = (int) $params['id_product'];
            $productText = $this->getProductText($productId);

            $this->context->smarty->assign(array(
                'productText' => $productText,
            ));

            return $this->display(__FILE__, 'views/templates/admin/product_form_custom_text.tpl');
        }
    }

    /**
     * Get the custom product text from the database
     *
     * @param int $productId Product ID
     * @return string|null Custom product text
     */
    public function getProductText(int $productId): ?string
    {
        // Get custom_text from the product table
        $sql = 'SELECT `custom_text` FROM `'._DB_PREFIX_.'product` WHERE `id_product` = '.(int)$productId;
        return Db::getInstance()->getValue($sql);
    }
}
