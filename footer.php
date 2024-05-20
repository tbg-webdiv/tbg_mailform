<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tbg_contact
 */

?>

<?php wp_footer(); ?>

<script>
"use strict";

$(function () {
    $(".reset").on("click", function () {
        clearForm(this.form);
    });

    function clearForm (form) {
        $(form)
            .find("input, select, textarea")
            .not(":button, :submit, :reset, :hidden")
            .val("")
            .prop("checked", false)
            .prop("selected", false)
        ;

        $(form).find(":radio").filter("[data-default]").prop("checked", true);
    }
});
function close_win() {
    window.close();
  }
</script>
</body>
</html>
