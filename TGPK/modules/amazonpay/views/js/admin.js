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

$(document).ready(function(){

    $("#public_key_mail_init, #public_key_mail_init_2").on('click', function() {
        window.open('mailto:amazon-pay-delivery-notifications@amazon.com?subject=' + $("#alexa_mail_subject").html() + " " + $("#AMAZONPAY_MERCHANT_ID").val() + '&body=' + $("#alexa_mail_body").html() + " " + $("#AMAZONPAY_MERCHANT_ID").val() + "%0D%0A%0D%0A" + "Public key: " + "%0D%0A%0D%0A" +  $("#AMAZONPAY_PUBLIC_KEY").html());
    });

    $("#start_troubleshooter").click(function() {
        $(this).find('strong').hide();
        $(this).find('img').show();
        $("#troubleshooter_results").html('');
        tsurl = $(this).attr("data-url");
        $.post(
            tsurl,
            {},
            function(data){
                $("#start_troubleshooter").find('strong').show();
                $("#start_troubleshooter").find('img').hide();
                $("#troubleshooter_results").html(data.troubleshooter);
            }
        );
    });

    $("#showvideoprestashopyoutube").on('click', function() {
        $('#videoprestashopyoutube').parent('.responsive-video').show();
        $('#videoprestashopyoutube').show();
        $('#carrouselAmazonPay').hide();
    });

    if (amazonpay_get_public_key_link != '') {
        $("#AMAZONPAY_PUBLIC_KEY_ID").after($("#getPublicKeyLink"));
    }

    setTimeout(function() {
        if ($("#amazonpay_authentication").length > 0) {
            $(".tab-pane .panel").each(function() {
                if ($.trim($(this).text()) == '') {
                    $(this).hide();
                }
            });
        }
    }, 1500);

});
