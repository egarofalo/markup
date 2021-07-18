import $ from "jquery";

$.extend({
    // Return the size of an object or array
    sizeOf: function (obj) {
        var i = 0;

        for (var key in obj) {
            i++;
        }

        return i;
    },
});

$.fn.extend({
    // Reset the appearance of the form after the client side validation in Bootstrap 4
    resetAppearanceClientSideValidation: function () {
        $(this).removeClass("was-validated");

        return $(this);
    },
    // Reset the appearance of the form after the server side validation in Bootstrap 4
    resetAppearanceServerSideValidation: function () {
        $(this)
            .find("[name]")
            .removeClass("is-valid")
            .removeClass("is-invalid");

        return $(this);
    },
});

export default $;
