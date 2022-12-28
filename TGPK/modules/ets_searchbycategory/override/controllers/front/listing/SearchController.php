<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  @version  Release: $Revision$
*  International Registered Trademark & Property of PrestaShop SA
*/

 use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
 use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;
 use PrestaShop\PrestaShop\Adapter\Search\SearchProductSearchProvider;

 class SearchController extends SearchControllerCore
 {
     public function init()
     {
         if (Tools::isSubmit('ajaxSearch'))
         {
             FrontController::init();
             $this->search_string = Tools::getValue('s');
             if (!$this->search_string) {
                 $this->search_string = Tools::getValue('search_query');
             }
             $query = Tools::replaceAccentedChars(urldecode(Tools::getValue('q')));
             $searchResults = Search::find((int)(Tools::getValue('id_lang')), $query, 1, 10, 'position', 'desc', true);
             $currency = Currency::getCurrencyInstance($this->context->currency->id);
             if (is_array($searchResults))
                 foreach ($searchResults as &$product)
                 {

                     $product['product_link'] = $this->context->link->getProductLink($product['id_product'], $product['prewrite'], $product['crewrite']);
                     $productObj = new Product((int)$product['id_product'], true, (int)$this->context->cookie->id_lang, $this->context->shop->id);
                     $images = $productObj->getImages((int)$this->context->cookie->id_lang);
                     if((int)Configuration::get('ETS_BLOCKSEARCH_SHOW_PRODUCT_IMAGE'))
                     {
                         if(isset($images[0]))
                             $id_image = Configuration::get('PS_LEGACY_IMAGES') ? ($productObj->id.'-'.$images[0]['id_image']) : $images[0]['id_image'];
                         else
                             $id_image = $this->context->language->iso_code.'-default';
                         $product['img_url'] =  $this->context->link->getImageLink($productObj->link_rewrite, $id_image, ImageType::getFormatedName('cart'));
                     }
                     else
                         $product['img_url'] = '';
                     $product['price'] = (int) $productObj->price ? Tools::displayPrice($productObj->price, $currency) : Module::getInstanceByName('ets_searchbycategory')->l('Free');

                     if (Module::isEnabled('ets_searchbycategory')){
                         $module = Module::getInstanceByName('ets_searchbycategory');
                         $product['html'] = $module->renderAjaxProductItem($product,$product['img_url']);
                     }else{
                         $product['html'] = '';
                     }
                 }
             $this->ajaxDie(Tools::jsonEncode($searchResults));
         }
         parent::init();
         $this->search_string = Tools::getValue('s');
         if (!$this->search_string) {
             $this->search_string = Tools::getValue('search_query');
         }
         $this->search_tag = Tools::getValue('tag');
         $this->context->smarty->assign(array(
             'search_string' => $this->search_string,
             'search_tag' => $this->search_tag,
         ));
     }
 }