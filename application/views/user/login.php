<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#5a589f">
    <script>document.domain='blureo.com';</script>
     <title> Zunego When </title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/login.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/blureowhen.css') ?>">


    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/blureologo2.png') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/blureologo.png') ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">

    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.min.js') ?>"></script>

    <script>
        var GlobalVariables = {
            csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
            baseUrl: <?= json_encode($base_url) ?>,
            destUrl: <?= json_encode($dest_url) ?>,
            AJAX_SUCCESS: 'SUCCESS',
            AJAX_FAILURE: 'FAILURE'
        };

        var EALang = <?= json_encode($this->lang->language) ?>;

        var availableLanguages = <?= json_encode(config('available_languages')) ?>;

        $(function () {
            GeneralFunctions.enableLanguageSelection($('#select-language'));
        });
    </script>
</head>
<body>
<div id="login-frame" class="frame-container">
    <div class="alert d-none"></div>
    <form id="login-form">
        <div class="form-group">
            <label for="username"><h6><b>username</b></h6></label>
            <input type="text" id="username"
                   placeholder="Enter your username"
                   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="username"><h6><b>password</b></h6></label>
            <input type="password" id="password"
                   placeholder="Enter your password"
                   class="form-control"/>
                       <a href="<?= site_url('user/forgot_password') ?>" class="forgot-password">
            <?= lang('forgot_your_password') ?></a>
        </div>
<br>
        <div class="form-group">
            <button type="submit" id="login" class="btn btn-primary">
             Log in
            </button>
            &nbsp;
             <a href="<?= site_url() ?>" class="btn btn-success btn-large">

        <?= lang('book_appointment_title') ?>
    </a>
        </div>
    </form>
</div>

<script src="<?= asset_url('assets/ext/fontawesome/js/fontawesome.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/fontawesome/js/solid.min.js') ?>"></script>
<script src="<?= asset_url('assets/js/polyfill.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
<script src="<?= asset_url('assets/js/login.js') ?>"></script>
</body>
</html>
