{*
* 2007-2021 ETS-Soft
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
* needs please, contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2021 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}

<style>

    {if isset($ETS_DISPLAY_PRICE) && isset($ETS_DISPLAY_RATING)}
    .sbc-product-price {
        display:{if $ETS_DISPLAY_PRICE}{else}none !important{/if};
    }
    .sbc-item-wrapper .product-list-reviews{
    display:{if $ETS_DISPLAY_RATING}{else}none !important{/if};
    }
    {/if}
    {if isset($ETS_BLOCKSEARCH_BUTTON_COLOR)}
    #search_block_top .button-search, .sbc_show_more.ac_over,
    .searched_category option:hover
    {
        background-color: {$ETS_BLOCKSEARCH_BUTTON_COLOR} !important;
    }
    {/if}
    {if isset($ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR)}
    #search_block_top .button-search:hover,.sbc_show_more:hover {
        background-color: {$ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR} !important;
    }
    {/if}
</style>