<?php require 'region-header.php'; ?>

    <section class="page-section page-section-basic-page login-page">
        <div class="container-sm">

            <div data-drupal-messages="">
                <div role="contentinfo" aria-label="Error message" class="messages messages--error">
                    <div role="alert">
                        <h2 class="visually-hidden">Error message</h2>
                        Unrecognized username or password. <a href="/user/password?name=sdasdasd">Forgot your password?</a>
                    </div>
                </div>
            </div>

            <a href="index.php" class="login-home-logo"><img src="../web/themes/custom/cd_group/img/cdg-logo-blue.svg" alt="CDG logo"></a>

            <h1 class="h2 mb-4">Sign in with Colosseum Academy account</h1>

            <form class="user-login-form" data-drupal-selector="user-login-form" action="/user/login" method="post" id="user-login-form" accept-charset="UTF-8">
                <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                    <label for="edit-name" class="js-form-required form-required">Username</label>
                    <input autocorrect="none" autocapitalize="none" spellcheck="false" autofocus="autofocus" data-drupal-selector="edit-name" aria-describedby="edit-name--description" type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required" required="required" aria-required="true">

                    <div id="edit-name--description" class="description">
                        Enter your Colosseum Dental Academy username.
                    </div>
                </div>
                <div class="js-form-item form-item js-form-type-password form-type-password js-form-item-pass form-item-pass">
                    <label for="edit-pass" class="js-form-required form-required">Password</label>
                    <input data-drupal-selector="edit-pass" aria-describedby="edit-pass--description" type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required" required="required" aria-required="true">

                    <div id="edit-pass--description" class="description">
                        Enter the password that accompanies your username.
                    </div>
                </div>
                <input autocomplete="off" data-drupal-selector="form-6umojwwdeszu8qckvrcgfghjjb0x-f3rh1vdh5sclge" type="hidden" name="form_build_id" value="form-6uMojWwdeSZu8QCkVRCgFGhjJb0X-f3rH1vDh5sCLgE">
                <input data-drupal-selector="edit-user-login-form" type="hidden" name="form_id" value="user_login_form">
                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Log in" class="button js-form-submit form-submit">
                </div>
            </form>
            <hr>
            <div class="login-alt-instructions">
                <p>
                    <a href="/user/password" class="btn btn-link add-fwd-icon">Forgot your password?</a>
                </p>
                <p><strong>Don't have an account?</strong><br>
                    <a href="/user/register" class="btn btn-link add-fwd-icon">Request for an account</a>
                </p>
                <p>
                    <a href="/user/login" class="btn btn-link add-fwd-icon">Sign in with Colosseum Dental account</a>
                </p>
            </div>
        </div>
    </section>

<?php require 'region-footer.php'; ?>