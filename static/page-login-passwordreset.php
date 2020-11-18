<?php require 'region-header.php'; ?>

    <section class="page-section page-section-basic-page login-page">
        <div class="container-sm">
            <h1 class="h2 mb-4">Reset password</h1>
            <form class="user-pass" data-drupal-selector="user-pass" action="/user/password" method="post" id="user-pass" accept-charset="UTF-8">

                <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">

                    <label for="edit-name" class="js-form-required form-required">Username
                        or email address</label>

                    <input autocorrect="off" autocapitalize="off" spellcheck="false" autofocus="autofocus" data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="254" class="form-text required" required="required" aria-required="true">

                </div>

                <p>Password reset instructions will be sent to your
                    registered email address.</p>

                <input autocomplete="off" data-drupal-selector="form-7z9wcrbukk-whazemcsvebaeylestycwth4q40-rras" type="hidden" name="form_build_id" value="form-7z9WCRbukk_wHAzeMCsVebaEylesTycWTh4q40-Rras">

                <input data-drupal-selector="edit-user-pass" type="hidden" name="form_id" value="user_pass">

                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">

                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Submit" class="button js-form-submit form-submit">

                </div>

            </form>
        </div>
    </section>

<?php require 'region-footer.php'; ?>