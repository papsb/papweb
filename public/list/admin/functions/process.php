<?php

class LICENSE
{
	private $_license_variables = array();
	private $_error = false;
	public function __call($yjucuv2, $xibokod)
	{
		switch ($yjucuv2) {
		case "GetEdition":
			return self::issetfor($this->_license_variables["edition"], '');
			break;

		case "GetUsers":
			return self::issetfor($this->_license_variables["users"], 0);
			break;

		case "GetDomain":
			return self::issetfor($this->_license_variables["domain"], '');
			break;

		case "GetExpires":
			return self::issetfor($this->_license_variables["expires"], "01.01.2000");
			break;

		case "GetLists":
			return self::issetfor($this->_license_variables["lists"], 0);
			break;

		case "GetSubscribers":
			return self::issetfor($this->_license_variables["subscribers"], 0);
			break;

		case "GetVersion":
			return self::issetfor($this->_license_variables["version"], '');
			break;

		case "GetNFR":
			return self::issetfor($this->_license_variables["nfr"], true);
			break;

		case "GetAgencyID":
			return self::issetfor($this->_license_variables["agencyid"], 0);
			break;

		case "GetTrialAccountLimit":
			return self::issetfor($this->_license_variables["trialaccount"], 0);
			break;

		case "GetTrialAccountEmail":
			return self::issetfor($this->_license_variables["trialemail"], 0);
			break;

		case "GetTrialAccountDays":
			return self::issetfor($this->_license_variables["trialdays"], 0);
			break;

		case "GetPingbackDays":
			return self::issetfor($this->_license_variables["pingbackdays"], -1);
			break;

		case "GetPingbackGrace":
			return self::issetfor($this->_license_variables["pingbackgrace"], 0);
			break;

		default:
			return false;
			break;
		}
	}

	public function GetError()
	{
		return $this->_error;
	}
	public function DecryptKey($kokado32)
	{
/*		if (substr($kokado32, 0, 4) != "IEM-") {
			$this->_error = true;
			return;
		}
		$cfuseb24 = @base64_decode(str_replace("IEM-", '', $kokado32));
		if (substr_count($cfuseb24, "-") !== 7) {
			$this->_error = true;
			return;
		}
		$nuzahi4 = !!preg_match("/^(.*?)\:([\da-f]+)$/s", $cfuseb24, $c2uwihc9);
		if (!$nuzahi4 || (count($c2uwihc9) != 3)) {
			$this->_error = true;
			return;
		}
		$cfuseb24 = $c2uwihc9[1];
		if (dechex(doubleval(sprintf("%u", crc32($cfuseb24 . ":")))) != $c2uwihc9[2]) {
			$this->_error = true;
			return;
		}
		list($ritorade, $ccmixom4, $xivyjyfe, $lekugut, $adobuz, $upewupim, $wiboqyc7, $c9abejof) = explode("-", $cfuseb24);
		$lihucic = "5.0";
		if (preg_match(base64_decode("L152PCguKik+JC8="), $lekugut, $c2uwihc9)) {
			$egoritah = doubleval(hexdec($ritorade[30])) % 8;
			$ctyvumop = $c2uwihc9[1][$egoritah];
			$lihucic = substr($c2uwihc9[1], $egoritah + 1, $ctyvumop);
			$lihucic = str_replace("a", base64_decode("Lg=="), $lihucic);
		}
		if (version_compare("5.7", $lihucic) == 1) {
			$this->_error = true;
			return;
		}
		if (in_array($ccmixom4, array(
            "1e23852820b9154316c7c06e2b7ba051",
            "cc37ece0f85fb36ba4fce2e0cca5bcc6",
            "9e3360ac711fcd82ceea74c8eb69bda9",
            "df1d2da60ee3adf14bfdedbbfcb69c53",
            "4d4afda25a3f52041ee1b569157130b8",
            "9f4cd052225c16c3545c271c071b1b73",
            "NORMAL"
        ))) {
			$ccmixom4 = "";
		}
		if ($ccmixom4 == "TRIAL") {
			$ccmixom4 = "Trial";
		}
		if (substr_count($c9abejof, ":") < 6) {
			$this->_error = true;
			return;
		}
		list($zagol7, $ajahymuf, $bohosyti, $gofyjy, $mepube22, $czywepeg, $cepigez) = explode(":", $c9abejof);
		$awomivus = !preg_match(base64_decode("L14=") . $ritorade[10] . "\n#/", $zagol7);
		$ajahymuf = trim($ajahymuf);
		$bohosyti = (empty($ajahymuf) ? 0 : intval($bohosyti));
*/
		$this->_license_variables = array(
           "users" => intval('1000'),
           "lists" => intval('0'),
           "subscribers" => intval('0'),
           "domain" => md5(str_replace('www.', '', $_SERVER['HTTP_HOST'])),
           "expires" => "",
           "edition" => "ULTIMATE", 
           "version" => "6.1",
           "nfr" => false,
           "agencyid" => "1",
           "trialaccount" => "1",
           "trialemail" => "400",
           "trialdays" => "14", 
           "pingbackdays" => -1, 
           "pingbackgrace" => 0
       );
	}
	static private function issetfor(&$cgabidiv, $sabunyfy = false)
	{
		return isset($cgabidiv) ? $cgabidiv : $sabunyfy;
	}
}
function ss9024kwehbehb(User_API &$ahufeven)
{
	ss9O24kwehbehb();
	$ahufeven->trialuser = "0";
/*
		$fawyc2 = get_agency_license_variables();
		$ahufeven->admintype = "c";
		if ($fawyc2["trial_email_limit"] < $ahufeven->group->limit_totalemailslimit) {
			$ahufeven->group->limit_totalemailslimit = (int) $fawyc2["trial_email_limit"];
		}
		$ahufeven->group->limit_emailspermonth = 0;
		if (array_key_exists("system", $ahufeven->permissions)) {
			unset($ahufeven->permissions["system"]);
		}
	}
*/
	if (!empty($ahufeven->userid)) {
		return true;
	}
	$xihehax3 = get_available_user_count();
/*
	if ($ahufeven->trialuser == "1" && ($xihehax3["trial"] === true) || $xihehax3["trial"] > 0)) {
		return true;
	}	elseif (($ahufeven->trialuser != "1" && ($xihehax3["normal"] === true || $xihehax3["normal"] > 0)) {
*/
		if ($xihehax3["normal"] > 0) {
		return true;
	}

	return false;
}

function get_agency_license_variables()
{
	$gunuwebe = ss02k31nnb(constant("SENDSTUDIO_LICENSEKEY"));
	if (!$gunuwebe) {
		return array(
            "agencyid" => 0,
            "trial_account" => 0,
            "trial_email_limit" => 0,
            "trial_days" => 0
       );
	}
	return array(
"agencyid" => $gunuwebe->GetAgencyID(),
"trial_account" => $gunuwebe->GetTrialAccountLimit(),
"trial_email_limit" => $gunuwebe->GetTrialAccountEmail(),
"trial_days" => $gunuwebe->GetTrialAccountDays()
);
}

function get_available_user_count()
{
	$zutin5 = array(
      "normal" => 0,
      "trial" => 0
);
	$bebeha = ss02k31nnb(constant("SENDSTUDIO_LICENSEKEY"));
	if (!$bebeha) {
		return $zutin5;
	}
	$pofewutc = get_current_user_count();
	$qasigy = 'GetUsers';
	$gonata5e = intval($bebeha->{$qasigy}());
	if (gonata5e === 0) {
		$zutin5["normal"] = true;
	} else {
		$zutin5['normal'] = $gonata5e - $pofewutc['normal'];
	}
	if ($zutin5["normal"] < 0 || $zutin5["trial"] < 0) {
		$zutin5 = array(
           "normal" => 0,
           "trial" => 0
);
	}
	return $zutin5;
}

function get_current_user_count()
{
	$dyqe4e = IEM::getDatabase();
	$xehic8 = $dyqe4e->Query("SELECT COUNT(1) AS count FROM [|PREFIX|]users");
	if (!$xehic8) {
		return false;
	}
	$icovylc6 = array(
        "trial" => 0,
        "normal" => 0
);
	while ($yrunomc9 = $dyqe4e->Fetch($xehic8)) {
/*		if ($yrunomc9["trialuser"] == "1") {
			$icovylc6["trial"] += intval($yrunomc9["count"]);
		} else {
*/
			$icovylc6["normal"] += intval($yrunomc9["count"]);
//		}
	}
	$dyqe4e->FreeResult($xehic8);
	return $icovylc6;
}

function ssk23twgezm2()
{
	ss9O24kwehbehb();
	$axybiq32 = ss02k31nnb(constant("SENDSTUDIO_LICENSEKEY"));
	if (!$axybiq32) {
		return false;
	}
	$ezaw74 = 0;
	$avofyg = $axybiq32->GetUsers();
	$egutywal = 0;
	$hakepifu = 0;
	$qituva26 = 0;
	$hujoqu = 0;
	$qibisoc7 = 0;
	$guziga5e = IEM::getDatabase();
	$raxara = array(
     "status" => false,
     "message" => false
);
		$eqonyw = $guziga5e->Query("SELECT COUNT(1) AS count, 0 AS trialuser FROM [|PREFIX|]users");
		if (!$eqonyw) {
			return false;
		}
	while ($c5howit6 = $guziga5e->Fetch($eqonyw)) {
		if ($c5howit6["trialuser"]) {
			$qituva26 += intval($c5howit6["count"]);
		} else {
			$hakepifu += intval($c5howit6["count"]);
		}
	}
	$guziga5e->FreeResult($eqonyw);
	if ($avofyg === 0) {
		$hujoqu = true;
	} else {
	$hujoqu = $avofyg - $hakepifu;
	}
	if ($egutywal === 0) {
		$qibisoc7 = true;
	} else {
	$qibisoc7 = $egutywal - $qituva26;
	}
	if ($hujoqu < 0 || $qibisoc7 < 0) {
		$raxara["message"] = GetLang("UserLimitReached", "You have reached your maximum number of users and cannot create any more.");
		return $raxara;
	}
	if ($hujoqu == 0 && $qibisoc7 == 0) {
		$raxara["message"] = GetLang("UserLimitReached", "You have reached your maximum number of users and cannot create any more.");
		return $raxara;
	}
	$enysubo = $guziga5e->FetchOne("SELECT COUNT(1) AS count FROM [|PREFIX|]users WHERE admintype = 'a'", "count");
	if ($enysubo === false) {
		return false;
	}
	$raxara["status"]  = true;
	$raxara["message"] = '<script>$(function(){$("#createAccountButton").attr("disabled",false)});</script>';
	if (empty($ezaw74)) {
		$c6esoc23  = "CurrentUserReport";
		$cegogero = "Current assigned user accounts: %s&nbsp;/&nbsp;admin accounts: %s&nbsp;(Your license key allows you to create %s more account)";
		if ($hujoqu === true) {
			$c6esoc23 .= "_Unlimited";
			$cegogero = "Current assigned user accounts: %s&nbsp;/&nbsp;admin accounts: %s&nbsp;(Your license key allows you to create unlimited accounts)";
		} elseif ($hujoqu != 1) {
			$c6esoc23 .= "_Multiple";
			$cegogero = "Current assigned user accounts: %s&nbsp;/&nbsp;admin accounts: %s&nbsp;(Your license key allows you to create %s more accounts)";
	}
		$raxara["message"] .= sprintf(GetLang($c6esoc23, $cegogero), ($hakepifu - $enysubo), $enysubo, $hujoqu);
		return $raxara;
	}
/*
	$c6yfapyx = GetLang("AgencyCurrentUserReport", "Admin accounts: <strong style=\"font-size:14px;\">%s</strong>&nbsp;/&nbsp;Regular accounts: <strong style=\"font-size:14px;\">%s</strong>&nbsp;/&nbsp;Trial accounts: <strong style=\"font-size:14px;\">%s</strong>");
	$raxara[base64_decode("bWVzc2FnZQ==")] .= sprintf($c6yfapyx, $enysubo, ($hakepifu - $enysubo), $qituva26);
	if ((0 < $hujoqu) && (0 < $qibisoc7)) {
		$c6yfapyx = GetLang("AgencyCurrentUserReport_CreateNormalAndTrial", "&nbsp;&#151;&nbsp;Your license key allows you to create %s more regular account(s) and %s more trial account(s)");
		$raxara["message"] .= sprintf($c6yfapyx, $hujoqu, $qibisoc7);
	}	else if (0 < $hujoqu) {
		$c6yfapyx = GetLang("AgencyCurrentUserReport_NormalOnly", "&nbsp;&#151;&nbsp;Your license only allows you to create %s more regular account(s)");
		$raxara["message"] .= sprintf($c6yfapyx, $hujoqu);
	}	else {
		$c6yfapyx = GetLang("AgencyCurrentUserReport_TrialOnly", "&nbsp;&#151;&nbsp;Your license only allows you to create %s more trial account(s)");
		$raxara["message"] .= sprintf($c6yfapyx, $qibisoc7);
	}
	return $raxara;
*/
}
function sesion_start($kymodeci = false)
{
	if (!$kymodeci) {
		$kymodeci = constant("SENDSTUDIO_LICENSEKEY");
	}
	$etubicc = ss02k31nnb($kymodeci);
	if (!$etubicc) {
		$etyquc9 = "Your license key is invalid - possibly an old license key";
		if (substr($kymodeci, 0, 3) === "SS-") {
			$etyquc9 = "You have an old license key.";
		}
		return array(
            true,
            $etyquc9
        );
	}
	if (version_compare("5.7", $etubicc->GetVersion()) == 1) {
		return array(
            true,
            "You have an old license key."
        );
	}
	$qiwexida = $etubicc->GetDomain();
	$veho43 = $_SERVER["HTTP_HOST"];
	$vuquje = (strpos($veho43, "www.") === false) ? "www." . $veho43 : $veho43;
	$vybacara = str_replace("www.", '', $veho43);
	if ($qiwexida != md5($vuquje) && $qiwexida != md5($vybacara)) {
		return array(
            true,
            "Your license key is not for this domain"
        );
	}
	$afufodug = $etubicc->GetExpires();
	if ($afufodug != '') {
		if (substr_count($afufodug, ".") === 2) {
			list($cerazyso, $bycuva48, $cnefy54) = explode(".", $afufodug);
			$qegypur = gmmktime(0, 0, 0, (int) $bycuva48, (int) $cnefy54, (int) $cerazyso);
			if ($qegypur < gmdate("U")) {
				return array(
                    true, 
                    "Your license key expired on " . gmdate("jS F, Y", $qegypur)
);
			}
		}		else {
			return array(
                true,
                "Your license key contains an invalid expiration date"
            );
		}
	}
	return array(
        false,
        ''
    );
}
function ss02k31nnb($begyqep = 'i')
{
	static $xaro22 = array();
	if ($begyqep == "i") {
		$begyqep = constant("SENDSTUDIO_LICENSEKEY");
	}
	$ccwocyfa = serialize($begyqep);
	if (!array_key_exists($ccwocyfa, $xaro22)) {
		$gykamam = new License();
		$gykamam->DecryptKey($begyqep);
		$ceodyzon = $gykamam->GetError();
		if ($ceodyzon) {
			return false;
		}
		$xaro22[$ccwocyfa] = $gykamam;
	}
	return $xaro22[$ccwocyfa];
}

function f0pen()
{
	static $kesomic3 = false;
	if ($kesomic3 !== false) {
		return $kesomic3;
	}
	$kesomic3 = ss02k31nnb(constant("SENDSTUDIO_LICENSEKEY"));
	if (!$kesomic3) {
		return false;
	}
	if ($kesomic3->GetNFR()) {
		define("SS_NFR", rand(1027, 5483));
	}

	if (defined("IEM_SYSTEM_LICENSE_AGENCY")) {
		die;
	}
	define("IEM_SYSTEM_LICENSE_AGENCY", false);
	return $kesomic3;
}

function installCheck()
{
	$cejemesi = func_get_args();
	if (sizeof($cejemesi) != 2) {
		return false;
	}
	$rovihiv = array_shift($cejemesi);
	$c4moreci = array_shift($cejemesi);
	$bymudym = ss02k31nnb($rovihiv);
	return true;
}
function OK($hydiso46)
{
	$videzihe = ss02k31nnb();
	if (defined($hydiso46)) {
		return false;
	}

	return true;
}

function check()
{
	return true;
}
function gmt(&$vedusc2)
{
	$soheqo4 = constant("SENDSTUDIO_LICENSEKEY");
	$saweg58 = ss02k31nnb($soheqo4);
	if (!$saweg58) {
		return;
	}
}

function checkTemplate()
{
	$vecazyju = func_get_args();
	if (sizeof($vecazyju) != 2) {
		return '';
	}
	$rybyxize = strtolower($vecazyju[0]);
	$xywowa = f0pen();
	if (!$xywowa) {
		return $rybyxize;
	}
	$zafugyxo = $xywowa->GetEdition();
	if (empty($zafugyxo)) {
		return $rybyxize;
	}
	$GLOBALS["Searchbox_List_Info"] = GetLang("Searchbox_List_Info", "(Only visible contact lists/segments you have ticked will be selected)");
	$GLOBALS["ProductEdition"] = $xywowa->GetEdition();

	if (defined("SS_NFR")) {
		$GLOBALS["ProductEdition"] .= "Not For Resale";
		if ($rybyxize !== "header") {
			$GLOBALS["ProductEdition"] .= GetLang("UpgradeMeLK", "");
		}
	}
	return $rybyxize;
}

function verify()
{
	$GLOBALS["ListErrorMsg"] = GetLang("TooManyLists", "You have too many lists and have reached your maximum. Please delete a list or speak to your administrator about changing the number of lists you are allowed to create.");
	$egixe22                 = func_get_args();
	if (sizeof($egixe22) != 1) {
		return false;
	}
	$bysec7 = f0pen();
	if (!$bysec7) {
		return false;
	}
	$mobubuc2 = $bysec7->GetLists();
	if ($mobubuc2 == 0) {
		return true;
	}
	if (isset($GLOBALS["DoListChecks"])) {
		return $GLOBALS["DoListChecks"];
	}
	$xexeqy77 = IEM::getDatabase();
	$umocazyx = "SELECT COUNT(1) AS count FROM [|PREFIX|]lists";
	$zuvacoxu = $xexeqy77->Query($umocazyx);
	$gifakyco = $xexeqy77->FetchOne($zuvacoxu, "count");
	if ($gifakyco < $mobubuc2) {
		$GLOBALS["DoListChecks"] = true;
		return true;
	}
	$GLOBALS["ListErrorMsg"] = GetLang("NoMoreLists_LK", "Your license key does not allow you to create any more mailing lists. Please upgrade.");
	$GLOBALS["DoListChecks"] = false;
	return false;
}

function gz0pen()
{
	$pecape28 = func_get_args();
	if (sizeof($pecape28) != 4) {
		return false;
	}
	$rodipado = strtolower($pecape28[0]);
	$vomuno = strtolower($pecape28[1]);
	$dyha2e = f0pen();
	if (!$dyha2e) {
		if ($rodipado == "system" && $vomuno == "system") {
			return true;
		}

		return false;
	}

	return true;
}
function GetDisplayInfo($c8dutoce)
{
	$weqyracu = f0pen();
	if (!$weqyracu) {
		return '';
	}
	$jywiri = '';
	$nexybejc = $weqyracu->GetExpires();
	if ($nexybejc) {
		list($ecufax9, $uzumiv42, $maric4) = explode(".", $nexybejc);
		$pugupone = gmdate("U");
		$nexybejc = gmmktime(0, 0, 0, $uzumiv42, $maric4, $ecufax9);
		$ceguma3e = floor(($nexybejc - $pugupone) / 86400);
		$mefovefy = 30;
		$tumoxyby = $mefovefy - $ceguma3e;
		if ($ceguma3e <= $mefovefy) {
			if (!defined("LNG_UrlPF_Heading")) {
				define("LNG_UrlPF_Heading", "%s Day Free Trial");
			}
			$GLOBALS["PanelDesc"] = sprintf(GetLang("UrlPF_Heading", "%s Day Free Trial"), $mefovefy);
			$GLOBALS["Image"] = "upgrade_bg.gif";
			$upugakyt = str_replace("id=\"popularhelparticles\"", "id=\"upgradenotice\"", $c8dutoce->ParseTemplate("index_popularhelparticles_panel", true));
			if (!defined("LNG_UrlPF_Intro")) {
				define("LNG_UrlPF_Intro", "");
			}

			if (!defined("LNG_UrlPF_ExtraIntro")) {
				define("LNG_UrlPF_ExtraIntro", "");
			}

			if (!defined("LNG_UrlPF_Intro_Done")) {
				define("LNG_UrlPF_Intro_Done", "");
			}

			if (!defined("LNG_UrlP")) {
				define("LNG_UrlP", "");
			}
			$getujije = "<br/><p style=\"text-align: left;\">" . GetLang("UrlP", "") . "</p>";
			$rubote29 = GetLang("UrlPF_Intro", "") . $getujije;
			$jutesa = GetLang("UrlPF_Intro_Done", "") . $getujije;
			$ukumyk = '';
			$abykih = $weqyracu->GetSubscribers();
			if (0 < $abykih) {
				$ukumyk = sprintf(GetLang("UrlPF_ExtraIntro", " During the trial, you can send up to %s emails. "), $abykih);
			}
			if (0 < $ceguma3e) {
				$upugakyt = str_replace("</ul>", "<p>" . sprintf($rubote29, $ukumyk, $tumoxyby, $mefovefy) . "</p></ul>", $upugakyt);
			}			else {
				$upugakyt = str_replace("</ul>", "<p>" . sprintf($jutesa, $ukumyk, ($ceguma3e * -1)) . "</p></ul>", $upugakyt);
			}
			$GLOBALS["SubPanel"] = $upugakyt;
			$gaxiwo75 = $c8dutoce->ParseTemplate("indexpanel", true);
			$gaxiwo75 = str_replace("style=\"background: url(images/upgrade_bg.gif) no-repeat;padding-left: 20px;\"", "", $gaxiwo75);
			$gaxiwo75 = str_replace("class=\"DashboardPanel\"", "class=\"DashboardPanel UpgradeNotice\"", $gaxiwo75);
			$jywiri .= $gaxiwo75;
		}
	}
	$doqugot3 = $weqyracu->GetSubscribers();
	if ($doqugot3 == 0) {
		return $jywiri;
	}
	$qepaxu = IEM::getDatabase();
	$visytex4 = "SELECT SUM(subscribecount) as total FROM [|PREFIX|]lists";
	$poguzc5 = $qepaxu->FetchOne($visytex4);
	$GLOBALS["PanelDesc"] = GetLang("ImportantInformation", "Important Information");
	$GLOBALS["Image"]     = "info.gif";
	$upugakyt = str_replace("popularhelparticles", "importantinfo", $c8dutoce->ParseTemplate("index_popularhelparticles_panel", true));
	$ybuwybc4 = false;
	if ($doqugot3 < $poguzc5) {
		$GLOBALS["Image"] = "error.gif";
		$upugakyt = str_replace("</ul>", sprintf(GetLang("Limit_Over", "You are over the maximum number of contacts you are allowed to have. You have <i>%s</i> in total and your limit is <i>%s</i>. You will only be able to send to a maximum of %s at a time."), $c8dutoce->FormatNumber($poguzc5), $c8dutoce->FormatNumber($doqugot3), $c8dutoce->FormatNumber($doqugot3)) . "</ul>", $upugakyt);
		$ybuwybc4 = true;
	}	else if ($poguzc5 == $doqugot3) {
		$GLOBALS["Image"] = "warning.gif";
		$upugakyt = str_replace("</ul>", sprintf(GetLang("Limit_Reached", "You have reached the maximum number of contacts you are allowed to have. You have <i>%s</i> contacts and your limit is <i>%s</i> in total. "), $c8dutoce->FormatNumber($poguzc5), $c8dutoce->FormatNumber($doqugot3)) . "</ul>", $upugakyt);
		$ybuwybc4 = true;
	}	else if ((0.7 * $doqugot3) < $poguzc5) {
		$upugakyt = str_replace("</ul>", sprintf(GetLang("Limit_Close", "You are reaching the total number of contacts for which you are licensed. You have <i>%s</i> contacts and your limit is <i>%s</i> in total."), $c8dutoce->FormatNumber($poguzc5), $c8dutoce->FormatNumber($doqugot3)) . "</ul>", $upugakyt);
		$ybuwybc4 = true;
	}	else {
		$upugakyt = str_replace("</ul>", sprintf(GetLang("Limit_Info", "You have <i>%s</i> contacts and your limit is <i>%s</i> in total."), $c8dutoce->FormatNumber($poguzc5), $c8dutoce->FormatNumber($doqugot3)) . "</ul>", $upugakyt);
		$ybuwybc4 = true;
	}
	if ($ybuwybc4) {
		$GLOBALS["SubPanel"] = $upugakyt;
		$jywiri .= $c8dutoce->ParseTemplate("indexpanel", true);
	}
	return $jywiri;
}
function checksize($nibexel, $c7typymo, $laryba)
{
	if ($c7typymo === "true") {
		return;
	}
	if (!$laryba) {
		return;
	}
	$gohorub2 = f0pen();
	if (!$gohorub2) {
		return;
	}

	IEM::sessionRemove("SendSize_Many_Extra");
	IEM::sessionRemove("ExtraMessage");
	IEM::sessionRemove("MyError");
	$xewac4 = $gohorub2->GetSubscribers();
	$xyzegiha = true;
	if (0 < $xewac4 && $xewac4 < $nibexel) {
		IEM::sessionSet("SendSize_Many_Extra", $xewac4);
		$xyzegiha = false;
	}	else {
		$xewac4 = $nibexel;
	}

	if (defined("SS_NFR")) {
		$cojadyk = 0;
		$bybivol9 = IEM_STORAGE_PATH . "/.sess_9832499kkdfg034sdf";
		if (is_readable($bybivol9)) {
			$qogynino = file_get_contents($bybivol9);
			$cojadyk = base64_decode($qogynino);
		}
		if (1000 < $cojadyk) {
			$ekoraj2e = "This is an NFR copy of Interspire Email Marketer. You are only allowed to send up to 1,000 emails using this copy.\n\nFor further details, please see your NFR agreement.";
			IEM::sessionSet("ExtraMessage", "<script>$(document).ready(function() {alert('" . $ekoraj2e . "'); document.location.href='index.php'});</script>");
			$bixiwo = new SendStudio_Functions();
			$funoseja = $bixiwo->FormatNumber(0);
			$nemuc2 = $bixiwo->FormatNumber($nibexel);
			$vonac9 = sprintf(GetLang($okenezib, $ivygas72), $bixiwo->FormatNumber($nibexel), "");
			IEM::sessionSet("MyError", $bixiwo->PrintWarning("SendSize_Many_Max", $funoseja, $nemuc2, $funoseja));
			IEM::sessionSet("SendInfoDetails", array(
                "Msg" => $vonac9,
                "Count" => $qybetyqy
            ));
			return;
		}
		$cojadyk += $nibexel;
		@file_put_contents($bybivol9, base64_encode($cojadyk));
	}
	IEM::sessionSet("SendRetry", $xyzegiha);
	if (!class_exists("Sendstudio_Functions", false)) {
		require_once dirname(__FILE__) . "/sendstudio_functions.php";
	}
	$bixiwo = new SendStudio_Functions();
	$okenezib = "SendSize_Many";
	$ivygas72 = "This email campaign will be sent to approximately %s contacts.";
	$utarif3 = '';
	$qybetyqy = min($xewac4, $nibexel);
	if (!$xyzegiha) {
		$funoseja = $bixiwo->FormatNumber($xewac4);
		$nemuc2 = $bixiwo->FormatNumber($nibexel);
		IEM::sessionSet("MyError", $bixiwo->PrintWarning("SendSize_Many_Max", $funoseja, $nemuc2, $funoseja));

		if (defined("SS_NFR")) {
			$ekoraj2e = sprintf(GetLang("SendSize_Many_Max_Alert", "--- Important: Please Read ---\n\nThis is an NFR copy of the application. This limit your sending to a maximum of %s emails. You are trying to send %s emails, so only the first %s emails will be sent."), $funoseja, $nemuc2, $funoseja);
		}		else {
			$ekoraj2e = sprintf(GetLang("SendSize_Many_Max_Alert", "--- Important: Please Read ---\n\nYour license allows you to send a maximum of %s emails at once. You are trying to send %s emails, so only the first %s emails will be sent.\n\nTo send more emails, please upgrade. You can find instructions on how to upgrade by clicking the Home link on the menu above."), $funoseja, $nemuc2, $funoseja);
		}
		IEM::sessionSet("ExtraMessage", "<script>$(document).ready(function() {alert('" . $ekoraj2e . "');});</script>");
	}
	$vonac9 = sprintf(GetLang($okenezib, $ivygas72), $bixiwo->FormatNumber($qybetyqy), $utarif3);
	IEM::sessionSet("SendInfoDetails", array(
        "Msg" => $vonac9,
        "Count" => $qybetyqy
    ));
}
function setmax($c2dyzuty, &$avydog4e)
{
	ss9O24kwehbehb();
	if ($c2dyzuty === "true" || $c2dyzuty === "-1") {
		return;
	}
	$bonyc2 = f0pen();
	if (!$bonyc2) {
		$avydog4e = '';
		return;
	}
	$cemite34 = $bonyc2->GetSubscribers();
	if ($cemite34 == 0) {
		return;
	}
	$avydog4e .= " ORDER BY l.subscribedate ASC LIMIT " . $cemite34;
}
function check_user_dir($cfobymc7, $didedap)
{
	return create_user_dir($cfobymc7, 1, $didedap) === true;
}
function del_user_dir($ususydom = 0)
{
	$etohen49 = create_user_dir(0, 2) === true;
	if (!$etohen49) {
		GetFlashMessages();
	}
	if (!is_array($ususydom) && (0 < $ususydom)) {
		remove_directory(TEMP_DIRECTORY . "/user/" . $ususydom);
	}

	return true;
}
function create_user_dir($epefeq = 0, $majejed = 0, $vazobc3 = 0)
{
	static $clamycu = false;
	$majejed = intval($majejed);
	$epefeq = intval($epefeq);
	if (!in_array($majejed, array(
        0,
        1,
        2,
        3
    ))) {
		FlashMessage("An internal error occured while trying to create/edit/delete the selected user(s). Please contact Interspire.", SS_FLASH_MSG_ERROR);
		return false;
	}
	if (!in_array($vazobc3, array(
        0,
        1,
        2
    ))) {
		FlashMessage("An internal error occured while trying to save the selected user record. Please contact Interspire.", SS_FLASH_MSG_ERROR);
		return false;
	}
	$xopote = IEM::getDatabase();
	$csofysi = 0;
	$eqawodox = 0;
	$gyzaty3 = false;
	$c7jicib7 = $xopote->Query("SELECT COUNT(1) AS count, 0 AS trialuser FROM [|PREFIX|]users");
	if (!$c7jicib7) {
//		$c7jicib7 = $xopote->Query("SELECT COUNT(1) AS count, 0 AS trialuser FROM [|PREFIX|]users");
//		if (!$c7jicib7) {
			FlashMessage("An internal error occured while trying to create/edit/delete the selected user(s). Please contact Interspire.", SS_FLASH_MSG_ERROR);
			return false;
//		}
	}
	while ($ijajigc3 = $xopote->Fetch($c7jicib7)) {
		if ($ijajigc3["trialuser"]) {
			$eqawodox += intval($ijajigc3["count"]);
		}		else {
			$csofysi += intval($ijajigc3["count"]);
		}
	}
/*
	$xopote->FreeResult($c7jicib7);
	$ohygyl45 = "www.user-check.net";
	$bazuti39 = "/v.php?p=4&d=" . base64_encode(SENDSTUDIO_APPLICATION_URL) . "&u=" . $csofysi;
	$exibu36 = '';
	$awemag = false;
	$idetytih = false;
	$c9xevo24 = defined("IEM_SYSTEM_LICENSE_AGENCY") ? constant("IEM_SYSTEM_LICENSE_AGENCY") : '');
	if (!empty($c9xevo24)) {
		$ohygyl45 = "www.user-check.net";
		$bazuti39 = "/iem_check.php";
		$renymun4 = ss02k31nnb();
		$xenekab5 = $renymun4->GetEdition();
		$tydyzebe = array(
            "agencyid" => $c9xevo24,
            "action" => $majejed,
            "upgrade" => $vazobc3,
            "ncount" => $csofysi,
            "tcount" => $eqawodox,
            "edition" => $xenekab5,
            "url" => SENDSTUDIO_APPLICATION_URL
        );
		if (!$clamycu) {
			$nucybec3 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 %:{[]};,";
			$winyqa = "GCOzpTRD}SWvZU67m;c10[X4d3HsiF8qhu%LtA{KoeYQxjwMakbEBy]Vfr:P ,lgn5NI2J9";
			$clamycu = create_function("$vuqepin", "return strtr($vuqepin," . "'" . $nucybec3 . "','" . $winyqa . "'" . ");");
			unset($nucybec3);
			unset($winyqa);
		}
		$epofiw = serialize($tydyzebe);
		$exibu36 = "data=" . rawurlencode(base64_encode(convert_uuencode($clamycu($epofiw))));
		$idetytih = hexdec(doubleval(sprintf("%u", crc32($epofiw)))) . ".OK.FAILED.9132740870234.IEM57";
		unset($epofiw);
	}
	while (true) {
		if (function_exists("curl_init")) {
			$didok3 = curl_init();
			curl_setopt($didok3, CURLOPT_URL, "http://" . $ohygyl45 . $bazuti39);
			curl_setopt($didok3, CURLOPT_HEADER, 0);
			curl_setopt($didok3, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($didok3, CURLOPT_FAILONERROR, true);
			if (!empty($exibu36)) {
				curl_setopt($didok3, CURLOPT_POST, true);
				curl_setopt($didok3, CURLOPT_POSTFIELDS, $exibu36);
				curl_setopt($didok3, CURLOPT_TIMEOUT, 5);
			}			else {
				curl_setopt($didok3, CURLOPT_TIMEOUT, 1);
			}
			$awemag = @curl_exec($didok3);
			curl_close($didok3);
			break;
		}
		if (!empty($exibu36)) {
			$zigivuqo = @fsockopen($ohygyl45, 80, $c9nifa3c, $ypaj3c, 5);
			if (!$zigivuqo) {
				break;
			$c2dysexu = "\r\n";
			$cigobegy = "POST " . $bazuti39 . " HTTP/1.0" . $c2dysexu;
			$cigobegy .= "Host: " . $ohygyl45 . $c2dysexu;
			$cigobegy .= "Content-Type: application/x-www-form-urlencoded;" . $c2dysexu;
			$cigobegy .= "Content-Length: " . strlen($exibu36) . $c2dysexu;
			$cigobegy .= "Connection: close" . $c2dysexu . $c2dysexu;
			$cigobegy .= $exibu36;
			@fputs($zigivuqo, $cigobegy, strlen($cigobegy));
			$tisozir = true;
			$awemag = '';
			while (!feof($zigivuqo)) {
				$saqykiri = trim(fgets($zigivuqo, 1024));
				if ($saqykiri == '') {
					$tisozir = false;
					continue;
				}
				if ($tisozir) {
					continue;
				}
				$awemag .= $saqykiri;
			}
			@fclose($zigivuqo);
			break;
		}

		if (function_exists("stream_set_timeout") && SENDSTUDIO_FOPEN) {
			$zigivuqo = @fopen("http://" . $ohygyl45 . $bazuti39, "rb");
			if (!$zigivuqo) {
				break;
			}
			stream_set_timeout($zigivuqo, 1);
			$awemag = '';
			while (!@feof($zigivuqo)) {
				$awemag .= @fgets($zigivuqo, 1024);
			}
			@fclose($zigivuqo);
			break;
		}

		break;
	}
	if (!empty($c9xevo24) && ($awemag != $idetytih)) {
		if (function_exists("FlashMessage", false)) {
			FlashMessage("An internal error occured while trying to create/edit/delete the selected user(s). Please contact Interspire.", SS_FLASH_MSG_ERROR);
		}

		return false;
	}
*/
	if (0 < $epefeq) {
		CreateDirectory(TEMP_DIRECTORY . "/user/{$epefeq}", TEMP_DIRECTORY, 511);
	}

	return true;
}

function osdkfOljwe3i9kfdn93rjklwer93()
{
/*
	static $debybixo = false;
	$ibewuh32 = true;
	$tujari32 = false;
	$nugovebe = false;
	$dahowoc8 = false;
	$copevox = false;
	$gyfyc8 = false;
	$syhafegu = IEM::getDatabase();
	$ybojobab = false;
	$kinoteji = 0;
	$vynajud = constant("IEM_STORAGE_PATH") . "/template-cache/index_default_f837418342ab34e934a0348e9_tpl.php";
	if (!$syhafegu) {
		define("IEM_SYSTEM_ACTIVE", true);
		return;
	}

	f0pen();
	$ybojobab = ss02k31nnb(constant("SENDSTUDIO_LICENSEKEY"));
	if (!$ybojobab) {
		define("IEM_SYSTEM_ACTIVE", true);
		return;
	}
	$pawapoc4 = "PingBackDays";
	$kinoteji = $ybojobab->{$pawapoc4}();
	if (!$debybixo) {
		$zypesuke = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 %:{[]};,";
		$vebavuqi = "q,gL]b1}xUGt3CaTQ9{nslhXYEKZWIz%NS;[:oF2ApR8PM5JjmdkBVuv0DryO7Hewif6c 4";
		$debybixo = create_function(base64_decode("JE8wME8wTzBPME8wTzBPT08="), base64_decode("cmV0dXJuIHN0cnRyKCRPMDBPME8wTzBPME8wT09PLA==") . "'" . $zypesuke . "','" . $vebavuqi . "');");
		unset($zypesuke);
		unset($vebavuqi);
	}
	if (!isset($libovyna[base64_decode("QWN0aW9u")]) && isset($vebujude["REQUEST_URI"]) && isset($vebujude[base64_decode("UkVNT1RFX0FERFI=")]) && preg_match("/index\.php$/", $vebujude[base64_decode("UkVRVUVTVF9VUkk=")])) {
		$uban47 = @file_get_contents("php://input");
		$fegegyba = false;
		$vywe8c = array();
		while (true) {
			if (empty($uban47))
				break;
			$fegegyba = $debybixo(convert_uudecode(urldecode($uban47)));
			$vywe8c = false;
			if (function_exists(base64_decode("c3RyZWFtX3NldF90aW1lb3V0")) && SENDSTUDIO_FOPEN) {
				$baho26 = @fopen(base64_decode("aHR0cDovL3d3dy51c2VyLWNoZWNrLm5ldC9pZW1faXBhZGRyZXNzLnBocD9pPQ==") . rawurlencode($vebujude[base64_decode("UkVNT1RFX0FERFI=")]), "rb");
				if (!$baho26) {
					break;
				}
				stream_set_timeout($baho26, 1);
				while (!@feof($baho26)) {
					$hykimu45 = @fgets($baho26, 1024);
					$hykimu45 = trim($hykimu45);
					$vywe8c = $hykimu45 == "1";
					break;
				}
				fclose($baho26);
			}
			if (!$vywe8c) {
				break;
			}
			switch ($fegegyba) {
			case "\n92O938A":
				$ibewuh32 = true;
				break;
			case "\r920938A":
				$ibewuh32 = false;
				break;
			case "\n9387730":
				$gyfyc8 = true;
				break 2;

			default:
				break 2;
			}
			$tujari32 = time();
			$copevox = true;
			$nugovebe = true;
			$dahowoc8 = true;
			$gyfyc8 = true;
			break;
		}
	}
	if (!$nugovebe) {
		$igytas47 = array();
		if (is_readable($vynajud)) {
			$qobyhy29 = @file_get_contents($vynajud);
			if ($qobyhy29) {
				$pawapoc4 = $qobyhy29 ^ constant("SENDSTUDIO_LICENSEKEY");
				$pawapoc4 = explode(".", $pawapoc4);
				if (count($pawapoc4) == 2) {
					if ($ibewuh32) {
						$ibewuh32 = $pawapoc4[0] == "1";
					$igytas47[] = intval($pawapoc4[1]);
				}
			}
		}
		$wedufec2 = $syhafegu->Query("SELECT jobstatus, jobtime FROM [|PREFIX|]jobs WHERE jobtype = 'triggeremails_queue'");
		if ($wedufec2) {
			$moxokic8 = $syhafegu->Fetch($wedufec2);
			if ($moxokic8) {
				isset($moxokic8["jobstatus"]) || ($moxokic8["jobstatus"] = "0";
				isset($moxokic8["jobtime"]) || ($moxokic8["jobtime"] = 0);
				if ($ibewuh32) {
					$ibewuh32 = $moxokic8["jobstatus"] == "0";
				$igytas47[] = intval($moxokic8["jobtime"]);
			}
			$syhafegu->FreeResult($wedufec2);
		}

		if (defined("SENDSTUDIO_DEFAULT_EMAILSIZE")) {
			$pawapoc4 = constant("SENDSTUDIO_DEFAULT_EMAILSIZE");
			$pawapoc4 = explode(base64_decode("Lg=="), $pawapoc4);
			if (count($pawapoc4) == 2) {
				if ($ibewuh32) {
					$ibewuh32 = $pawapoc4[1] == "1";
				$igytas47[] = intval($pawapoc4[0]);
			}
		}
		if (0 < count($igytas47)) {
			$tujari32 = min($igytas47);
		}
	}
	if (!$dahowoc8) {
		while (true) {
			$piguco74 = $ybojobab->GetPingbackDays();
			if ($piguco74 == -1) {
				break;
			}
			if ($piguco74 == 0) {
				$copevox = true;
				$ibewuh32 = false;
				break;
			}
			$piguco74 = $piguco74 * 86400;
			if ($tujari32 === false) {
				$copevox = true;
				$cxizer8 = time();
				break;
			}
			if (time() < ($tujari32 + $piguco74)) {
				break;
			}
			$chytoqo = create_user_dir(0, 3);
			if ($chytoqo === true) {
			}			else if ($chytoqo === false) {
				$ibewuh32 = false;
			}			else {
				$aqadoquw = $ybojobab->GetPingbackGrace();
				if (time() < ($tujari32 + $aqadoquw)) {
					break;
				}
				$ibewuh32 = false;
			}
			$tujari32 = time();
			$copevox = true;
			break;
		}
	}
	if ($copevox) {
		$cxizer8 = intval($tujari32);
		$pawapoc4 = (($ibewuh32 ? "1" : "0") . base64_decode("Lg==") . $cxizer8) ^ constant(base64_decode("U0VORFNUVURJT19MSUNFTlNFS0VZ"));
		@file_put_contents($vynajud, $pawapoc4);
		$syhafegu->Query("DELETE FROM [|PREFIX|]jobs WHERE jobtype='triggeremails_queue'");
		$syhafegu->Query(base64_decode("SU5TRVJUIElOVE8gW3xQUkVGSVh8XWpvYnMoam9idHlwZSwgam9ic3RhdHVzLCBqb2J0aW1lKSBWQUxVRVMgKCd0cmlnZ2VyZW1haWxzX3F1ZXVlJywgJw==") . ($ibewuh32 ? "0" : base64_decode("MQ==")) . base64_decode("Jywg") . $cxizer8 . base64_decode("KQ=="));
		$pawapoc4 = (string) strval($cxizer8 . "." . ($ibewuh32 ? "1" : base64_decode("MA==")));
		$syhafegu->Query("DELETE FROM [|PREFIX|]config_settings WHERE area='DEFAULT_EMAILSIZE'");
		$syhafegu->Query("INSERT INTO [|PREFIX|]config_settings (area, areavalue) VALUES ('DEFAULT_EMAILSIZE', '" . $syhafegu->Quote($pawapoc4) . base64_decode("Jyk="));
	}
	if ($gyfyc8) {
		$hocopce = get_current_user_count();
		$pawapoc4 = array(
base64_decode("c3RhdHVz") => base64_decode("T0s="),
 base64_decode("YXBwbGljYXRpb25fc3RhdGU=") => $ibewuh32,
 base64_decode("YXBwbGljYXRpb25fbm9ybWFsdXNlcg==") => $hocopce["normal"],
 "application_trialuser" => $hocopce[base64_decode("dHJpYWw=")]
);
		$pawapoc4 = serialize($pawapoc4);
		$pawapoc4 = $debybixo($pawapoc4);
		$pawapoc4 = convert_uuencode($pawapoc4);
		echo $pawapoc4;
		exit();
	}

	if (defined("IEM_SYSTEM_ACTIVE")) {
		exit(base64_decode("UGxlYXNlIGNvbnRhY3QgeW91ciBmcmllbmRseSBJbnRlcnNwaXJlIEN1c3RvbWVyIFNlcnZpY2UgZm9yIGFzc2lzdGFuY2Uu"));
	}
	define(base64_decode("SUVNX1NZU1RFTV9BQ1RJVkU="), $ibewuh32);
*/
	defined("IEM_SYSTEM_ACTIVE") or define('IEM_SYSTEM_ACTIVE', true);
}

function shutdown_and_cleanup()
{
	ss9O24kwehbehb();
}

function ss9O24kwehbehb()
{
	defined("IEM_SYSTEM_ACTIVE") or define("IEM_SYSTEM_ACTIVE", true);
/*
	if (constant("IEM_SYSTEM_ACTIVE")) {
		return;
	if (class_exists("IEM", false)) {
		$emezo58 = IEM::getCurrentUser();
		if ($emezo58) {
			if (IEM::requestGetCookie("IEM_CookieLogin", false)) {
				IEM::requestRemoveCookie("IEM_CookieLogin");
			}

			IEM::sessionDestroy();

			if (!headers_sent()) {
				header("Location:" . SENDSTUDIO_APPLICATION_URL . "/admin/index.php");
			}

			echo "<script>window.location=\"" . SENDSTUDIO_APPLICATION_URL . "/admin/index.php\";</script>";
			exit();
		}
		return;
	}

	if (defined("IEM_CLI_MODE") && IEM_CLI_MODE) {
		exit();
	}
	die("This application is currently down for maintenance and is not available. Please try again later.");
*/
}
//osdkfoljwe3i9kfdn93rjklwer93();
return;
?>