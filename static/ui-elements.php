<?php require 'region-header.php'; ?>

<section class="page-section">
    <div class="container">
        <h2>Buttons</h2>

        <h4>Large</h4>
        <p>
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            <button type="button" class="btn btn-outline-primary btn-lg">Primary outline</button>
        </p>
        <h4>Normal</h4>
        <p>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-outline-primary">Primary outline</button>
        </p>
        <h4>Small</h4>
        <p>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-outline-primary btn-sm">Primary outline</button>
        </p>
        <h4>Disabled</h4>
        <p>
            <button type="button" class="btn btn-primary disabled">Primary</button>
            <button type="button" class="btn btn-outline-primary disabled">Primary outline</button>
        </p>

        <hr>

        <h2>Forms</h2>

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="customSelect">Custom select</label>
                <select class="custom-select" id="customSelect">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <hr>

        <h2>Figures</h2>

        <figure class="figure">
            <img src="https://via.placeholder.com/400x300" alt="Placeholder">
            <figcaption class="figure-caption">A caption for the above image.
            </figcaption>
        </figure>

        <h2>Icons</h2>

        <i class="material-icons">keyboard_arrow_right</i>
        <i class="material-icons keyboard_arrow_down"></i>
        <i class="material-icons">arrow_forward</i>
        <i class="material-icons">arrow_back</i>
        <i class="material-icons">open_in_new</i>
        <i class="material-icons">add</i>
        <i class="material-icons">calendar_today</i>
        <i class="material-icons">location_pin</i>

        <i class="material-icons keyboard_arrow_right"></i>
        <i class="material-icons keyboard_arrow_down"></i>
        <i class="material-icons arrow_forward"></i>
        <i class="material-icons arrow_back"></i>
        <i class="material-icons open_in_new"></i>
        <i class="material-icons add"></i>
        <i class="material-icons calendar_today"></i>
        <i class="material-icons location_pin"></i>
    </div>
</section>

<?php require 'region-footer.php'; ?>