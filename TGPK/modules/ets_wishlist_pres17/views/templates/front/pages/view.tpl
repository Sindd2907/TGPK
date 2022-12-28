{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses.
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
{extends file='page.tpl'}

{block name='page_header_container'}
<script type="text/javascript">
    var addProductToCartUrl = '{$addProductToCartUrl nofilter}';
    var confirm_delete_product_text= '{l s='Do you want to delete this product?' mod='ets_wishlist_pres17' js=1}';
</script>
{/block}

{block name='page_content_container'}
  <div class="ets-wishlist-products-container">
        {$list_products nofilter}
  </div>
{/block}
{block name='page_footer_container'}
  <div class="ets-wishlist-footer-links">
    <a href="{$wishlistsLink|escape:'html':'UTF-8'}"><i class="material-icons">chevron_left</i>{l s='Return to wish lists' mod='ets_wishlist_pres17'}</a>
    <a href="{$urls.base_url|escape:'html':'UTF-8'}"><i class="material-icons">home</i>{l s='Home' mod='ets_wishlist_pres17'}</a>
  </div>
{/block}