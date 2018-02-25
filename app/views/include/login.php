<div dir="rtl" class="modal fade" id="Google-Login-Modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ورود</h4>
            </div>
            <div class="modal-body">
                <div class="login-with-title">ورود و ثبت نام سریع با گوگل</div>
                <div class="login-with-social">
                    <a href="<?= $data['getGoogleLoginLink'] ?>" title="ورود و ثبت نام با استفاده از اکانت گوگل شما" style="padding: 10px 16px;text-align: right;color: #fff" class="btn btn-block btn-social btn-google">
                        <span style="color: #fff;font-size: 1.2em;margin-top: 2px" class="fa fa-google-plus"></span> ورود سریع با حساب گوکل
                    </a>
                </div>
                <div class="login-with-or">یا</div>
                <a onclick="GoogleloginRegularStyle()" id="btn-regular-login" class="regular-login">ورود به <?= NAME; ?></a>
                <div id="form-regular-login" class="login-fold">
                    <p class="email-wrap">
                        <label for="username-input">پست الکترونیکی (*)</label>
                        <input id="username-input" name="username-input" class="form-control" type="email">
                    </p>
                    <p>
                        <label for="password-input">کلمه عبور (*)</label>
                        <input id="password-input" name="password-input" class="form-control" type="password">
                    </p>
                    <p>
                        <a style="color: inherit" href="forgetPassword" class="forget-password">آیا رمز خود را فراموش کرده‌اید؟</a>
                    </p>
                    <div class="row">
                        <div class="sign-up-inside-login">
                            <input id="login-submit" class="btn btn-dropbox" value="ورود" type="submit">
                            <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 10px !important;">
                <span>اکانت <?= NAME; ?> و گوگل ندارید؟!</span>
                <a style="color: inherit" href="register" class="signup-inside" title="ثبت نام مستقیم در سایت">&nbsp;  ثبت نام کنید   &nbsp;</a>
            </div>
        </div>
    </div>
</div>