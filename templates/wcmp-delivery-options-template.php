<!-- Add the Custom styles to the checkout -->
<?php if ( ! empty(WooCommerce_MyParcel()->checkout_settings['custom_css'])) {
    echo "<style>";
    echo WooCommerce_MyParcel()->checkout_settings['custom_css'];
    echo "</style>";
} ?>

<div id="myparcel-checkout"></div>
