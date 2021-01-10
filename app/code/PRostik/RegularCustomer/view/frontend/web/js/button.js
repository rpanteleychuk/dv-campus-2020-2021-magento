define([
    'jquery',
    'jquery/ui'
], function ($) {
    'use strict';

    $.widget('pRostik.regularCustomerButton', {
        /**
         * Constructor
         * @private
         */
        _create: function () {
            $(this.element).click(this.openRequestForm.bind(this));
        },
        /**
         * Generate event to open the form
         */
        openRequestForm: function () {
            $(document).trigger('prostik_regular_customer_form_open');
        }
    });

    return $.pRostik.regularCustomerButton;
});
