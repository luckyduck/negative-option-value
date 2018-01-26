/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery'
], function ($) {
    'use strict';

    var globalOptions = {
        productId: null,
        priceHolderSelector: '.price-box', //data-role="priceBox"
        optionsSelector: '.product-custom-option',
        optionConfig: {},
        optionHandlers: {},
        optionTemplate: '<%= data.label %>' +
        '<% if (data.finalPrice.value > 0) { %>' +
        ' +<%- data.finalPrice.formatted %>' +
        '<% } else if (data.finalPrice.value) { %>' +
        ' <%- data.finalPrice.formatted %>' +
        '<% } %>',
        controlContainer: 'dd'
    };

    return function (widget) {

        $.widget('mage.priceOptions', widget, {
            options: globalOptions

        });
        return $.mage.priceOptions;
    }
});
