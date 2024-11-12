<?php

if( PHP_OS_FAMILY == "Linux" ){
	define("n","\n");define("d","\033[0m");define("m","\033[1;31m");define("h","\033[1;32m");define("k","\033[1;33m");define("b","\033[1;34m");define("u","\033[1;35m");define("c","\033[1;36m");define("p","\033[1;37m");define("mp","\033[101m\033[1;37m");define("hp","\033[102m\033[1;30m");define("kp","\033[103m\033[1;37m");define("bp","\033[104m\033[1;37m");define("up","\033[105m\033[1;37m");define("cp","\033[106m\033[1;37m");define("pm","\033[107m\033[1;31m");define("ph","\033[107m\033[1;32m");define("pk","\033[107m\033[1;33m");define("pb","\033[107m\033[1;34m");define("pu","\033[107m\033[1;35m");define("pc","\033[107m\033[1;36m");
}else{
	define("n","\n");define("d","\033[0m");define("m","");define("h","");define("k","");define("b","");define("u","");define("c","");define("p","");define("mp","");define("hp","");define("kp","");define("bp","");define("up","");define("cp","");define("pm","");define("ph","");define("pk","");define("pb","");define("pu","");define("pc","");
}

class Display {
	static function Menu($no, $title){print h."---[".p."$no".h."] ".k."$title\n";}
	static function Error($except){return m."---[".p."!".m."] ".p.$except;}
	static function Sukses($msg){return h."---[".p."✓".h."] ".p.$msg.n;}
	static function Cetak($label, $msg = "[No Content]"){$len = 9;$lenstr = $len-strlen($label);print h."[".p.$label.h.str_repeat(" ",$lenstr)."]─> ".p.$msg.n;}
	static function Isi($msg){return m."╭[".p."Input ".$msg.m."]".n.m."╰> ".h;}
	static function Title($activitas){print bp.str_pad(strtoupper($activitas),44, " ", STR_PAD_BOTH).d.n;}
	static function authBan($title, $str){$title_len_s = 8;$strlen_s = 19;$title_len = $title_len_s - strlen($title);$strlen = $strlen_s - strlen($str);return bp." ".$title.str_repeat(" ",$title_len).d.pb." ".$str.str_repeat(" ",$strlen).d.n;}
	static function Ban(){system("clear");
		print n.pm.str_pad(strtoupper("V ".versi),44, " ", STR_PAD_BOTH).d.n;
		print c."──────────────┬".str_repeat("─",29).n;
		print m."<?╔╦╗╔═╗╔═╗".p."╦  ".$line."│".self::authBan("Author", "@fat9ght");
		print m."   ║ ║ ║║ ".p."║║  ".$line."│".self::authBan("Channel", "t.me/MaksaJoin");
		print m."   ╩ ╚═╝╚".p."═╝╩═╝".$line."│".self::authBan("Youtube", "youtube.com/@iewil");
		print m."  ╔═╗╦ ".p."╦╔═╗   ".$line."│".mp.str_pad("!--- 2022 REBORN >", 29, " ", STR_PAD_BOTH).d.n;
		print m."  ╠═╝╠".p."═╣╠═╝   ".$line."│".up.str_pad("@PetapaGenit2, @Zhy_08", 29, " ", STR_PAD_BOTH).d.n;
		print m."  ╩  ".p."╩ ╩╩  ?> ".$line."│".up.str_pad("@IPeop, @MetalFrogs", 29, " ", STR_PAD_BOTH).d.n;
		print c."──────────────┴".str_repeat("─",29).n;
		print hp.str_pad(title,44, " ", STR_PAD_BOTH).d.n;
		print c.str_repeat('─',44).n;
		if(update > null){
			print m."---[".p."^".m."]".h." Update sc Detect\n";
			print m."---[".p."version ".m."] ".p.server['data']['version'].n;
			print m."---[".p."download".m."] ".p.server['data']['link'].n;
			print c.str_repeat('─',44).n;
		}
	}
	static function check($activitas){print k."--[".p."?".k."] ".p."check $activitas";}
	static function detected($activitas){print "\r                                   \r";print h."[".p."√".h."] $activitas detected";sleep(2);print "\r                              \r";}
	static function undetected($activitas){print "\r                              \r";print m."[".p."!".m."] $activitas not detected";sleep(2);print "\r                              \r";}
}
class Functions {
	public $configFile = "config.json";
	public function Clear(){if( PHP_OS_FAMILY == "Linux" ){system('clear');}else{system('cls');}} 
	public function Curl($u, $h = 0, $p = 0,$cookie = 0, $lewat = 0) {while(true){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $u);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);if($cookie) {curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");}if($p) {curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $p);}if($h) {curl_setopt($ch, CURLOPT_HTTPHEADER, $h);}curl_setopt($ch, CURLOPT_HEADER, true);$r = curl_exec($ch);if($lewat){return 0;}$c = curl_getinfo($ch);if(!$c) return "Curl Error : ".curl_error($ch); else{$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);if(!$bd){print m."Check your Connection!";sleep(2);print "\r                         \r";continue;}return array($hd,$bd);}}}
	public function Auth($w){$lo[] = $w."L".p."oading....";$lo[] = p."L".$w."o".p."ading....";$lo[] = p."Lo".$w."a".p."ding....";$lo[] = p."Loa".$w."d".p."ing....";$lo[] = p."Load".$w."i".p."ng....";$lo[] = p."Loadi".$w."n".p."g....";$lo[] = p."Loadin".$w."g".p."....";$lo[] = p."Loading".$w.".".p."...";$lo[] = p."Loading.".$w.".".p."..";$lo[] = p."Loading..".$w.".".p.".";return $lo;}
	public function Tmr($tmr){date_default_timezone_set("UTC");$col = [b,c,d,h,k,m,u];$sym = [' ─ ',' / ',' │ ',' \ ',];$timr = time()+$tmr+rand(5,10);$a = 0;while(true){$a +=1;$x = $col[array_rand($col)];$nic = $this->Auth($x);$res=$timr-time();if($res < 1) {break;}print "         ".$x.$sym[$a % 4].p.date('H',$res).$x.":".p.date('i',$res).$x.":".p.date('s',$res)." ".$nic[$a % count($nic)]."\r";usleep(100000);}print "\r                                   \r";}
	public function Line(){return c.str_repeat('─',44).n;}
	public function Save($nama_data){if(file_exists($nama_data)){$data = file_get_contents($nama_data);}else{$data = readline(Display::Isi($nama_data));echo "\n";file_put_contents($nama_data,$data);}return $data;}
	public function setConfig($key){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}if(isset($config[$key])){return $config[$key];}else{$data = readline(Display::isi($key));print n;$config[$key] = $data;file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));return $data;}}
	public function getConfig($key){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}return $config[$key];}
	public function removeConfig($key){$config = json_decode(file_get_contents($this->configFile),1);unset($config[$key]);file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}
	public function HiddenConfig($key, $data){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}if(!$config[$key]){$config[$key] = $data;file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}return $config[$key];}
	public function view($youtube){$tanggal = date("dmy");if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}$view = $this->getConfig('view');if($tanggal == $view){return 0;}else{$config['view'] = $tanggal;system("termux-open-url ".$youtube);file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}}
	public function temporary($newdata,$data=0){if(!$data){$data = [];}return array_merge($data,$newdata);}
	public function Server(){$url = "https://iewilbot.my.id/List/server.php";$param = "title=".title;$r = file_get_contents($url."?".$param);return json_decode($r,1);}
	public function getData($r) {
		(preg_match('/Just a moment.../',$r))? $data['cloudflare']=true:$data['cloudflare']=false;
		(preg_match('/Firewall/',$r))? $data['firewall']=true:$data['firewall']=false;
		(preg_match('/Locked/',$r))? $data['locked']=true:$data['locked']=false;
		
		//timer
		$tmr1 = explode('-',explode('var wait = ',$r)[1])[0];
		$tmr2 = explode('-',explode('let wait = ',$r)[1])[0];
		$tmr3 = explode(';',explode("var time =",$r)[1])[0];
		$tmr4 = explode(';',explode("var timer =",$r)[1])[0];
		if($tmr1) {
			$data['tmr'] = $tmr1;
		}
		elseif($tmr2) {
			$data['tmr'] = $tmr2;
		}
		elseif($tmr3) {
			$data['tmr'] = $tmr3;
		}
		elseif($tmr4) {
			$data['tmr'] = $tmr4;
		}
		else{
			$data['tmr'] = "";
		}
		
		//limit
		preg_match('/(\d{1,})\/(\d{1,})/',$r,$limit);
		if($limit[2]){
			$data['sisa'] = $limit[1];
			$data['limit'] = $limit[2];
		}
		return $data;
	}
}

class Bot extends Functions{
	public $cookie,$uagent;
	public function __construct(){
		
		$this->server = $this->Server();
		if($this->server['data']['version'] == versi){
			define("update", false);
		}else{
			define("server", $this->server);
			define("update", true);
		}
		Display::Ban();
		cookie:
		if(empty($this->getConfig('cookie'))){
			Display::Cetak("Register",refflink);
			print $this->Line();
		}
		$this->cookie = $this->setConfig("cookie");
		$this->uagent = $this->setConfig("user_agent");
		$this->view(youtube);
		
		Display::Ban();
		$r = $this->Dashboard();
		if(!$r["user"]){
			$this->removeConfig("cookie");
			print Display::Error("Cookie Expired!\n");
			goto cookie;
		}
		Display::Cetak("Username",$r["user"]);
		Display::Cetak("Balance",$r["balance"]);
		print $this->line();
		
		$this->Claim();
	}
	public function headers($xml = 0){
		$h[] = "Host: ".parse_url(host)['host'];
		$h[] = "Upgrade-Insecure-Requests: 1";
		$h[] = "Connection: keep-alive";
		$h[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
		$h[] = "user-agent: ".$this->uagent;
		$h[] = "Referer: https://adbch.top/";
		$h[] = "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
		$h[] = "cookie: ".$this->cookie;
		return $h;
	}
	public function Dashboard(){
		$r = $this->curl(host."dashboard",$this->headers())[1];
		$user = explode('</b></span>',explode('<span class="white-text">Ваш id: <b>',$r)[1])[0];
		$bal = explode('</b>',explode('Balance<br><b>',$r)[1])[0];
		return ["user"=>$user,"balance"=>$bal];
	}
	public function Claim(){
		while(true){
			$data = [];
			$r = $this->curl(host."surf/browse/",$this->headers())[1];
			if(!preg_match("/Skip/",$r)){
				print Display::Error("Ads habis".n);
				print $this->line();
				break;
			}
			preg_match_all('#<input type="hidden" name="(.*?)" value="(.*?)">#',$r,$x);
			foreach($x[1] as $a => $label){
				$data[$label] = $x[2][$a];
			}
			$data = http_build_query($data);
			$tmr = explode("'",explode("let duration = '",$r)[1])[0];
			if($tmr){$this->tmr($tmr);}
			
			$r = $this->curl(host."surf/browse/",$this->headers(),$data)[1];
			$ss = explode('BCH',explode('You earned ',$r)[1])[0];
			$bal = explode('</b>',explode('class="white-text bal">Баланс: <b>',$r)[1])[0];
			Display::Cetak("Success",$ss);
			$r = $this->curl(host."dashboard",$this->headers())[1];
			$bal = explode('</b>',explode('Balance<br><b>',$r)[1])[0];
			Display::Cetak("Balance",$bal);
			print $this->line();
		}
	}
}

const
title = "adbch",
versi = "1.0.0",
host = "https://adbch.top/",
refflink = "https://adbch.top/r/110267",
youtube = "https://youtube.com/@iewil";

error_reporting(0);
new Bot();