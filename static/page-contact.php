<?php require 'region-header.php'; ?>

    <section class="hero hero-basic hero-contact">
        <div class="hero-content align-items-center">
            <div class="container-fullwidth">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="hero-title">Hello!</h1>
                    </div>
                    <div class="col-md-5">
                        <div class="hero-contact-info">
                            <p class="contact">
                                <a href=""><span>info@colosseumacademy.com</span></a>
                                <a href=""><span>+47 464 73 830</span></a>
                            </p>
                            <p class="address">
                                Colosseum Academy<br>
                                Sørkedalsveien 10A<br>
                                0368 Oslo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section-contact-img">
        <div class="row no-gutters justify-content-end">
            <div class="section-img">
                <img src="img/contact-page-img.jpg" alt="Classroom Image">
                <a href="#pageSectionContactForm" class="btn-scroll-down btn-scroll-down-lg btn-scrolltosection"><i class="material-icons arrow_downward"></i></a>
            </div>
        </div>
    </section>

    <section class="page-section-contact-form" id="pageSectionContactForm">
        <div class="contact-form-box">
            <h3 class="section-title">Please feel free to contact us</h3>
            <p>Please also take a look at <a href="page-front.php#faqSection">Frequently Asked Questions</a>. You might find the answer you're looking for.</p>
            <form action="#" class="contact-form">
                <div data-drupal-messages="">
                    <div role="contentinfo" aria-label="Error message" class="messages messages--error">
                        <div role="alert">
                            <h2 class="visually-hidden">Error message</h2>
                            <ul class="messages__list">
                                <li class="messages__item">Last name field is required.</li>
                                <li class="messages__item">Message field is required.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="webform-elements" data-drupal-selector="edit-elements">
                    <div class="row js-form-wrapper form-wrapper" data-drupal-selector="edit-container" id="edit-container--Scabd2ISe3s">
                        <div class="form-group col-sm-6 js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-first-name form-item-first-name">
                            <label for="edit-first-name--O5mHWibTER4" class="js-form-required form-required">First name</label>
                            <input class="form-control form-text required" data-drupal-selector="edit-first-name" type="text" id="edit-first-name--O5mHWibTER4" name="first_name" value="asdasd" size="60" maxlength="255" required="required" aria-required="true">
                        </div>
                        <div class="form-group col-sm-6 js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-last-name form-item-last-name">
                            <label for="edit-last-name--zuBtkibe81E" class="js-form-required form-required">Last name</label>
                            <input class="form-control form-text required error" data-drupal-selector="edit-last-name" type="text" id="edit-last-name--zuBtkibe81E" name="last_name" value="" size="60" maxlength="255" required="required" aria-required="true" aria-invalid="true">
                        </div>
                        <div class="form-group col-sm-6 js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                            <label for="edit-email--x4NRzTMNArY" class="js-form-required form-required">Email address</label>
                            <input class="form-control form-email required" data-drupal-selector="edit-email" type="email" id="edit-email--x4NRzTMNArY" name="email" value="antti@amalinen.com" size="60" maxlength="254" required="required" aria-required="true">
                        </div>
                        <div class="form-group col-sm-6 js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone-number form-item-phone-number">
                            <label for="edit-phone-number--UE8M3MeGhCY">Phone number</label>
                            <input class="form-control form-tel" data-drupal-selector="edit-phone-number" type="tel" id="edit-phone-number--UE8M3MeGhCY" name="phone_number" value="" size="30" maxlength="128">
                        </div>
                        <div class="form-group col-12 js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-message form-item-message">
                            <label for="edit-message--Gz2lzMHQ_7w" class="js-form-required form-required">Message</label>
                            <div class="form-textarea-wrapper">
                                <textarea class="form-control form-textarea required error resize-vertical" data-drupal-selector="edit-message" id="edit-message--Gz2lzMHQ_7w" name="message" rows="5" cols="60" required="required" aria-required="true" aria-invalid="true"></textarea>
                            </div>
                        </div>
                    </div>

                    <div data-drupal-selector="edit-actions" class="form-actions webform-actions js-form-wrapper form-wrapper" id="edit-actions--K0NKTbFQNec">
                        <input class="webform-button--submit btn btn-primary button button--primary js-form-submit form-submit" data-drupal-selector="edit-actions-submit-ssr45-vgbjy" data-disable-refocus="true" type="submit" id="edit-actions-submit--ssr45-VGbjY" name="op" value="Send message">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--<div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front webform-confirmation-modal" aria-describedby="ui-id-1" aria-labelledby="ui-id-2" style="position: fixed; height: auto; width: 600px; top: 212px; left: 532px;">
        <div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix">
            <span id="ui-id-2" class="ui-dialog-title">Thank you for your message!</span>
            <button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="Close">
                <span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>Close
            </button>
        </div>
        <div class="webform-confirmation-modal--content ui-dialog-content ui-widget-content" id="ui-id-1" style="width: auto; min-height: 90px; max-height: 470px; height: auto;">
            Your message has been sent.
        </div>
    </div>
    <div class="ui-widget-overlay ui-front"></div>-->

<?php require 'region-footer.php'; ?>