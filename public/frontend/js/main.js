(function () {
    "use strict";

    // click //
    document.querySelectorAll(".click").forEach(function (element) {
        element.addEventListener("click", function () {
            document.querySelector(".toggole").classList.toggle("slide");
        });
    });

    /*--------------------------
     scrollUp
    ---------------------------- */
    function scrollUp() {
        var scrollText = document.createElement("i");
        scrollText.className = "fa fa-angle-up";

        var options = {
            scrollText: scrollText,
            easingType: "linear",
            scrollSpeed: 900,
            animation: "fade",
        };

        // Your implementation of scrollUp function
    }

    scrollUp();

    // mobail menu ///
    // Implementation for mobail menu

    // slider-active///
    // Implementation for slider-active

    // product-active ///
    // Implementation for product-active

    // new-product-active ///
    // Implementation for new-product-active

    // tab-active ///
    // Implementation for tab-active

    // latest-deals-active ///
    // Implementation for latest-deals-active

    // feautred-active ///
    // Implementation for feautred-active

    // testmonial-active ///
    // Implementation for testmonial-active

    // mostviewed-active///
    // Implementation for mostviewed-active

    // brand-active///
    // Implementation for brand-active

    // single-protfolio-active///
    // Implementation for single-protfolio-active

    /*--------------------------
    tab active
    ---------------------------- */
    var ProductDetailsSmall = document.querySelectorAll(
        ".single-protfolio-active .single-img a , .single-product-active .single-img a"
    );

    ProductDetailsSmall.forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.preventDefault();

            var href = this.getAttribute("href");

            ProductDetailsSmall.forEach(function (el) {
                el.classList.remove("active");
            });

            this.classList.add("active");

            document
                .querySelectorAll(
                    ".single-protfolio-tab .tab-content .tab-pane , .single-product-tab .tab-content .tab-pane"
                )
                .forEach(function (el) {
                    el.classList.remove("active");
                });

            document
                .querySelector(
                    ".single-protfolio-tab .tab-content , .single-product-tab .tab-content " +
                        href
                )
                .classList.add("active");
        });
    });

    // single-product-active///
    // Implementation for single-product-active

    /*---------------------
    countdown
    --------------------- */
    // Implementation for countdown

    /*-----------------------------
                home-2 js
    ------------------------------*/
    // Implementation for home2-blog-active

    // blog-active///
    // Implementation for blog-active

    // mostviewed-active-2///
    // Implementation for mostviewed-active-2

    // cart-active///
    // Implementation for cart-active

    // pricing slider////
    // Implementation for pricing slider

    // click function//////////
    document.querySelector(".opener-1").addEventListener("click", function () {
        document.querySelector(".toggle-1").classList.toggle("slide");
    });

    document.querySelector(".opener-2").addEventListener("click", function () {
        document.querySelector(".toggle-2").classList.toggle("slide");
    });

    document.querySelector(".opener-3").addEventListener("click", function () {
        document.querySelector(".toggle-3").classList.toggle("slide");
    });

    document.querySelector(".opener-4").addEventListener("click", function () {
        document.querySelector(".toggle-4").classList.toggle("slide");
    });

    // login form click////
    document
        .querySelector(".login-form-click")
        .addEventListener("click", function () {
            document.querySelector(".login-form").classList.toggle("slide");
        });

    // /// show-code///
    document.querySelector(".code").addEventListener("click", function () {
        document.querySelector(".code-form").classList.toggle("slide");
    });

    // /// Account password///
    document
        .querySelector(".show-password")
        .addEventListener("click", function () {
            document
                .querySelector(".account-password")
                .classList.toggle("slide");
        });

    // tooltip///
    // Implementation for tooltip

    // popup///
    // Implementation for popup

    // mintiup////
    // Implementation for mintiup
})();
