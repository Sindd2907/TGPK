<?php
/**
* 2007-2022 patworx.de
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade AmazonPay to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    patworx multimedia GmbH <service@patworx.de>
*  @copyright 2007-2022 patworx multimedia GmbH
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class AmazonpayResetModuleFrontController extends ModuleFrontController
{

    /**
     * @throws Exception
     */
    public function postProcess()
    {
        $amazonPayCheckoutSession = new AmazonPayCheckoutSession();
        if ($amazonPayCheckoutSession->checkStatus()) {
            $amazonPayCheckoutSession->reset();
        }

        if ($this->module->isOnePageCheckoutPSInstalled()) {
            Tools::redirect(
                $this->context->link->getPageLink('order')
            );
        }

        Tools::redirect(
            $this->context->link->getPageLink('cart')
        );
    }
}
