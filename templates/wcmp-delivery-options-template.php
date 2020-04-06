<!-- Add the Custom styles to the checkout -->
<?php if ( ! empty(WooCommerce_MyParcel()->checkout_settings['custom_css'])) {
    echo "<style>";
    echo WooCommerce_MyParcel()->checkout_settings['custom_css'];
    echo "</style>";
} ?>

<div id="mypa-load" class="myparcel-delivery-options">
    <input style="display:none;" name='mypa-post-nl-data' id="mypa-input" />

    <div id="mypa-spinner-model">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 99" enable-background="new 0 0 100 99" xml:space="preserve">
            <image id="postnl-logo" width="100" height="99" href="<?php echo WooCommerce_MyParcel()->plugin_url() . '/assets/img/wcmp-postnl-logo.png' ?>" />
        </svg>
        <div id="mypa-spinner"></div>
    </div>

    <div class="mypa-message-model">
        <div id="mypa-message"></div>
    </div>
    <div id="mypa-location-details"></div>
    <div id="mypa-delivery-option-form">
        <table class="mypa-delivery-option-table">
            <tbody>
            <tr id="header-delivery-options-title">
                <td colspan="3">
                    <label for="mypa-delivery-options-title">
                        <h3><span id="mypa-delivery-options-title"></span></h3>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input name="mypa-deliver-or-pickup" id="mypa-select-delivery" value="mypa-deliver" type="radio">
                </td>
                <td colspan="2">
                    <label id="mypa-select-delivery-title" for="mypa-select-delivery">
                    <span id="mypa-delivery-title"></span></label>
                </td>
            </tr>
            <tr id="mypa-delivery-date-select">
                <td></td>
                <td colspan="2">
                    <select name="mypa-delivery-date-select" id="mypa-select-date" title="Delivery date"></select>
                </td>
            </tr>
            <tr id="mypa-delivery-date-text">
                <td></td>
                <td colspan="2">
                    <div name="mypa-delivery-date-text" id="mypa-date" title="Delivery date"></div>
                </td>
            </tr>
            <tr id="method-myparcel-delivery-morning-div">
                <td></td>
                <td>
                    <div class="mypa-delivery-option">
                        <input name="shipping-method" id="method-myparcel-delivery-morning" type="radio" value="myparcel-morning">
                        <label for="method-myparcel-delivery-morning"><span id="mypa-morning-title"></span></label>
                    </div>
                </td>
                <td>
                    <div class="mypa-delivery-option">
                        <span id="mypa-morning-delivery"></span>
                    </div>
                </td>
            </tr>
            <tr id="mypa-delivery-option method-myparcel-normal-div">
                <td></td>
                <td>
                    <div id="mypa-delivery" class="mypa-delivery-option">
                        <input name="shipping-method" id="method-myparcel-normal" type="radio" value="myparcel-normal">
                        <label for="method-myparcel-normal"><span id="mypa-standard-title"></span></label>
                    </div>
                </td>
                <td>
                    <div class="mypa-delivery-option">
                        <span id="mypa-normal-delivery"></span>
                    </div>
                </td>
            </tr>
            <tr id="method-myparcel-delivery-evening-div">
                <td></td>
                <td>
                    <div class="mypa-delivery-option">
                        <input name="shipping-method" id="method-myparcel-delivery-evening" type="radio" value="myparcel-delivery-evening">
                        <label for="method-myparcel-delivery-evening"><span id="mypa-evening-title"></span></label>
                    </div>
                </td>
                <td>
                    <div class="mypa-delivery-option">
                        <span id="mypa-evening-delivery"> </span>
                    </div>
                </td>
            </tr>
            <tr class="mypa-extra-delivery-option-signature">
                <td></td>
                <td id="mypa-signature" class=" mypa-extra-delivery-options-padding-top">
                    <div class="mypa-delivery-option">
                        <input name="myparcel-signature-selector" id="mypa-signature-selector" type="checkbox" value="myparcel-signature-selector">
                        <label for="mypa-signature-selector"><span id="mypa-signature-title"></span></label>
                    </div>
                </td>
                <td class="mypa-extra-delivery-options-padding-top">
                    <span id="mypa-signature-price"></span>
                </td>
            </tr>
            <tr class="mypa-extra-delivery-options">
                <td></td>
                <td id="mypa-only-recipient">
                    <div class="mypa-delivery-option">
                        <input name="method-myparcel-only-recipient-selector" id="mypa-only-recipient-selector" type="checkbox" value="myparcel-only-recipient-selector">
                        <label for="mypa-only-recipient-selector"><span id="mypa-only-recipient-title"></span></label>
                    </div>
                </td>
                <td>
                    <span id="mypa-only-recipient-price"></span>
                </td>
            </tr>
            <tr id="mypa-pickup-location-selector" class="mypa-is-pickup-element">
                <td>
                    <input name="mypa-deliver-or-pickup" id="mypa-pickup-delivery" value="mypa-pickup" type="radio">
                </td>
                <td colspan="2">
                    <label for="mypa-pickup-delivery"><span id="mypa-pickup-title"></span></label>
                </td>
            </tr>
            <tr id="mypa-pickup-options" class="mypa-is-pickup-element">
                <td></td>
                <td colspan="2">
                    <select name="mypa-pickup-location" id="mypa-pickup-location">
                        <option value="">Geen Locatie</option>
                    </select> <span id="mypa-show-location-details">
                        <svg class="svg-inline--fa mypa-fa-clock fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                        </svg>
                    </span>
                </td>
            </tr>
            <tr id="mypa-pickup" class="mypa-is-pickup-element">
                <td></td>
                <td>
                    <input name="method-myparcel-pickup-selector" id="mypa-pickup-selector" type="radio" value="myparcel-pickup-selector">
                    <label for="mypa-pickup-selector"><span class="mypa-pickup-delivery-titel"></span> 15:00</label>
                </td>
                <td>
                    <span id="mypa-pickup-price"></span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
