<form role="form" action="index.html" id="validate">
    <div class="text-xs-center m-b-3">
        <img src="<?php echo $loginMilestoneAsset->baseUrl ?>/images/logo-icon.png" height="80" alt="" class="m-b-1"/>
        <h5>
            Welcome back!
        </h5>
        <p class="text-muted">
            Sign in with your app id to continue.
        </p>
    </div>
    <fieldset class="form-group">
        <label for="username">
            Enter your username
        </label>
        <input type="text" class="form-control form-control-lg" id="username" placeholder="username" required/>
    </fieldset>
    <fieldset class="form-group">
        <label for="password">
            Enter your password
        </label>
        <input type="password" class="form-control form-control-lg" id="password" placeholder="********" required/>
    </fieldset>
    <label class="custom-control custom-checkbox m-b-1">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Stay logged in</span>
    </label>
    <button class="btn btn-primary btn-block btn-lg" type="submit">
        Login
    </button>

    <?php echo $this->render('@app/views/layouts/_login-social', ['loginMilestoneAsset' => $loginMilestoneAsset]); ?>

</form>