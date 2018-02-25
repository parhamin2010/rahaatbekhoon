$(".checkout-page-button").on('click', function () {
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var passwordConfirm = document.getElementById("password-confirm").value;
    var emailStatus = document.getElementById("emailstatus").value;

    if (email == "" || name == "" || password == "") {
        generate('warning', '<div class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
    }
    else {
        if (emailStatus == "true") {
            if (ValidateForm(password, passwordConfirm, email)) {
                $.post(
                    "register/submitData",
                    {
                        'email': email,
                        'name': name,
                        'password': password
                    },
                    function (data) {
                        if (data.includes("ok")) {
                            generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                        }
                        else {
                            generate('success', '<div class="activity-item">عملیات ثبت نام با موفقیت انجام شد.</div>');
                            history.back();
                        }
                    }
                );
                exit();
            }
            else {
                generate('warning', '<div class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
            }
        } else {
            generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا ورودی ها را بررسی نمایید.</div>');
        }
    }
});

$(".send-button-email-forget").on('click', function () {
    var email = document.getElementById("email").value;
    var emailStatus = document.getElementById("emailstatus").value;

    if (email == "") {
        generate('warning', '<div class="activity-item">لطفا فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
    }
    else {
        if (emailStatus == "true") {
            $.post(
                "forgetpassword/submitsendEmail",
                {
                    'email': email
                },
                function (data) {
                    if (data == "ok") {
                        generate('success', '<div class="activity-item">ایمیل بازیابی باموفقیت ارسال شد.</div>');
                        history.back();
                    }
                    else {
                        generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                    }
                }
            );
            exit();
        } else {
            generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا ورودی ها را بررسی نمایید.</div>');
        }
    }
});

function ForgetAccountValidate() {
    var email = document.getElementById("email").value;

    if (email && email != "") {
        if (validateEmail(email)) {
            $('#email_status').html("ایمیل مورد تایید است.");
            document.getElementById("emailstatus").value = "true";
            return true;
        }
        else {
            $('#email_status').html("لطفا یک ایمیل معتبر وارد کنید.");
            document.getElementById("emailstatus").value = "false";
            return false;
        }
    }
    else {
        $('#email_status').html("");
        document.getElementById("emailstatus").value = "false";
        return false;
    }
}

function checkEmail() {
    var email = document.getElementById("email").value;

    if (email && email != "") {
        if (validateEmail(email)) {
            $.post(
                "register/checkEmail",
                {
                    user_email: email
                },
                function (data) {
                    if (data.includes("ok")) {
                        $('#email_status').html("ایمیل مورد تایید است.");
                        document.getElementById("emailstatus").value = "true";
                        return true;
                    }
                    else {
                        $('#email_status').html("متاسفانه ایمیل وارد شده وجود دارد.");
                        document.getElementById("emailstatus").value = "false";
                        return false;
                    }
                }
            );
        }
        else {
            $('#email_status').html("لطفا یک ایمیل معتبر وارد کنید.");
            document.getElementById("emailstatus").value = "false";
            return false;
        }
    }
    else {
        $('#email_status').html("");
        document.getElementById("emailstatus").value = "false";
        return false;
    }
}

function ValidateForm(password, passwordConfirm, email) {
    if (password != "" && password == passwordConfirm) {
        if (password.length < 6) {
            generate('error', '<div class="activity-item">کلمه عبور می بایست حداقل 6 کاراکتر باشد.</div>');
            return false;
        }
        if (password == email) {
            generate('error', '<div class="activity-item">کلمه عبور می بایست با نام کاربری متفاوت باشد.</div>');
            return false;
        }
    } else {
        generate('error', '<div class="activity-item">کلمه های عبور وارد شده با یکدیگر مطابقت ندارند.</div>');
        return false;
    }

    return true;
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}