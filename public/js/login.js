$("#login-submit").on('click', function () {
    var username = document.getElementById("username-input").value;
    var password = document.getElementById("password-input").value;
    if (username == "" && password == "") {
        generate('warning', '<div class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
    }
    else {
        $.post(
            "index/LoginRegular",
            {
                'username': username,
                'password': password
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div class="activity-item">باموفقیت به سایت وارد شدید.</div>');
                    location.reload();
                }
                else {
                    generate('error', '<div class="activity-item">نام کاربری و یا کلمه عبور صحیح نمی باشد.</div>');
                }
            }
        );
    }
});
