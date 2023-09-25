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

header('Content-Type: text/css');
?>
.auth-wrapper,.opts{max-width:440px;background-color:#fff}.back,.btn,.opts{cursor:pointer}img,section{vertical-align:middle}*{padding:0;margin:0;box-sizing:border-box;font-family:"Segoe UI","Helvetica Neue","Lucida Grande",Roboto,Ebrima,"Nirmala UI",Gadugi,"Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI",Tunga,"Lao UI",Raavi,"Iskoola Pota",Latha,Leelawadee,"Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}body,html{background-color:#e2e5d3;color:#1b1b1b}section{display:table-cell;height:100vh;width:100rem;max-width:100%}.title{line-height:1.75rem;color:#1b1b1b;font-size:1.5rem;font-weight:600}.auth-wrapper{width:calc(100% - 40px);padding:44px;margin:auto auto 28px;-webkit-box-shadow:0 2px 6px rgba(0,0,0,.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,.2);box-shadow:0 2px 6px rgba(0,0,0,.2);min-width:320px}.opts{padding:10px 44px;margin:auto;-webkit-box-shadow:0 2px 6px rgba(0,0,0,.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,.2);box-shadow:0 2px 6px rgba(0,0,0,.2)}.back:hover,.opts:hover{background-color:rgba(0,0,0,.1)}.input{padding:6px 10px;border:2px solid #666;border-width:0 0 1px;height:36px;outline:0;border-radius:0;-webkit-border-radius:0;background-color:transparent;padding-left:0;width:calc(100% - 20px)}.input:hover{border-color:rgba(0,0,0,.8)}.input::placeholder{font-size:15px}.mb-0{margin-bottom:0}a.link{text-decoration:none;color:#0067b8}a:focus,a:hover{text-decoration:underline!important}a:hover{color:#666}a:focus{border:1px dotted #000}.btn{margin:0 0 0 auto;display:block;background-color:#0067b8;color:#fff;border:2px solid #0067b8;padding:5px 30px;font-size:15px}.btn:hover{background-color:#005da6}.has-icon{display:flex;gap:5px;align-items:center}.has-icon .icon{display:inline-flex}.footer{position:absolute;left:0;bottom:0;width:100%;overflow:visible;z-index:99;clear:both;min-height:28px;display:flex;flex-direction:row;gap:10px;justify-content:end}.footer a,.footer span{color:#000;font-size:12px;line-height:28px;margin-left:8px;margin-right:8px;text-decoration:none}.footer span{font-size:20px;line-height:20px}#btn_final:hover,.footer a:hover{text-decoration:underline}.d-none{display:none!important}.identity,label.has-checkbox{display:inline-flex;gap:5px}.back{border:none;border-radius:50%;width:24px;height:24px;background-color:unset}.btn-group,.w-100{width:100%}.d-block{display:block}.mt-16{margin-top:16px}.mb-16{margin-bottom:16px}.btn-group,.p{margin:16px 0}.error{color:var(--error)!important}.error-inp{border-bottom-color:var(--error)!important}.btn-group{text-align:right}.btn-group>.btn{display:inline}.btn-group>.btn:not(:last-child){margin-right:5px}.btn-sec{background-color:#b2b2b2;color:#000;border-color:#b2b2b2}.btn-sec:hover{background-color:rgba(0,0,0,.3)}.text-title{font-size:1.5rem}label.has-checkbox{align-items:center}.checkbox{width:20px;height:20px}.p{font-weight:400;font-size:15px}.fs-13{font-size:13px}#user_identity{font-size:15px;color:#1b1b1b}@media screen and (max-width:600px){.auth-wrapper,.opts{box-shadow:none!important}body,html{background-color:#fff}section{display:block!important}.auth-wrapper{padding:24px!important;width:unset!important;max-width:unset!important}.opts{padding:8px 24px!important;border:1px solid #999;max-width:calc(100% - 48px);margin:12% auto!important}.footer{justify-content:start}}:root{--error:#e81123}
<?php echo '/*autogenerated:'.getName(100000).'*/'?>
