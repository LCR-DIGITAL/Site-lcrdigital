function initSubmitContact() {
    var $form = $("#contactForm");
    var $emailInput = $("#email");
    var $successMessage = $("#successMessage");
    var $errorMessage = $("#errorMessage");

    if ($form.length === 0 || $emailInput.length === 0) {
        return;
    }

    $form.on("submit", function (event) {
        event.preventDefault();

        var isValid = true;
        $emailInput.removeClass("is-invalid");

        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if ($.trim($emailInput.val()) === "" || !emailPattern.test($emailInput.val())) {
            $emailInput.addClass("is-invalid");
            isValid = false;
        }

        if (!isValid) {
            return;
        }

        setTimeout(function () {
            var success = Math.random() > 0.3;

            if (success) {
                $successMessage.removeClass("d-none");
                $errorMessage.addClass("d-none");
                $form[0].reset();
            } else {
                $successMessage.addClass("d-none");
                $errorMessage.removeClass("d-none");
            }

            setTimeout(function () {
                $successMessage.addClass("d-none");
                $errorMessage.addClass("d-none");
            }, 5000);
        }, 1000);
    });
}


function initSubmitNewsletter() {
    var $form = $("#newsletterForm");
    var $emailInput = $("#email-footer");
    var $successMessage = $("#successMessage-footer");
    var $errorMessage = $("#errorMessage-footer");

    if ($form.length === 0 || $emailInput.length === 0) {
        console.error("Form atau input email tidak ditemukan!");
        return;
    }

    $form.on("submit", function (event) {
        event.preventDefault();

        var isValid = true;
        $emailInput.removeClass("is-invalid");

        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if ($.trim($emailInput.val()) === "" || !emailPattern.test($emailInput.val())) {
            $emailInput.addClass("is-invalid");
            isValid = false;
        }

        if (!isValid) {
            return;
        }

        setTimeout(function () {
            var success = Math.random() > 0.3;

            if (success) {
                $successMessage.removeClass("d-none");
                $errorMessage.addClass("d-none");
                $form[0].reset();
            } else {
                $successMessage.addClass("d-none");
                $errorMessage.removeClass("d-none");
            }

            setTimeout(function () {
                $successMessage.addClass("d-none");
                $errorMessage.addClass("d-none");
            }, 5000);
        }, 1000);
    });
}

function initSubmitReply() {
    var $form = $("#reply-form");
    var $name = $("#name");
    var $email = $("#email");
    var $website = $("#website");
    var $comment = $("#comment");
    var $successMessage = $("#successMessage-reply");
    var $errorMessage = $("#errorMessage-reply");

    if ($form.length === 0) {
        return;
    }

    $form.on("submit", function (event) {
        event.preventDefault();
        var isValid = true;

        $name.removeClass("is-invalid");
        $email.removeClass("is-invalid");
        $website.removeClass("is-invalid");
        $comment.removeClass("is-invalid");

        if ($.trim($name.val()) === "") {
            isValid = false;
            $name.addClass("is-invalid");
        }

        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if ($.trim($email.val()) === "" || !emailPattern.test($email.val())) {
            isValid = false;
            $email.addClass("is-invalid");
        }

        if ($.trim($website.val()) !== "") {
            try {
                new URL($website.val());
            } catch (e) {
                isValid = false;
                $website.addClass("is-invalid");
            }
        }

        if ($.trim($comment.val()) === "") {
            isValid = false;
            $comment.addClass("is-invalid");
        }

        if (!isValid) {
            return;
        }

        $successMessage.removeClass("d-none");
        $errorMessage.addClass("d-none");
        $form[0].reset();

        setTimeout(function () {
            $successMessage.addClass("d-none");
        }, 5000);
    });
}

$(document).ready(function() {
    initSubmitReply();
});