<?php
namespace Arnch7\HTMLSourceProtector;
use \Exception;

ini_set('memory_limit', '-1');
set_time_limit(0);


if (version_compare(PHP_VERSION, '7.0.0') < 0 ){
	throw new Exception('PHP 7.0 or greater is required');
}

class Protector {
	public $ver = '1.3.2';
	
	public $variable;
	public $function_name;	
	public $html_tag;
	public $char_per_line = 111;
	public $meta;
	public $head;

	public function __construct(){
		$this->variable  = 'crypt_data';
		$this->function_name  = 'cryptor';
		$this->html_tag  = 'cryptor_div';

		$this->meta = [
			'keywords' => 'website',
			'description' => '',
			'subject' => '',
			'copyright' => '',
			'language' => 'zxx',
			'robots' => 'index, follow',
			'revised' => date("l, M, d\\t\h, Y, g:i a"),
			'abstract' => '',
			'topic' => '',
			'summary' => '',
			'author' => '',
			'designer' => '',
			'reply-to' => '',
			'owner' => '',
			'url' => '',
			'identifier-URL' => '',
			'directory' => '',
			'category' => 'website',
			'coverage' => 'Worldwide',
			'distribution' => 'Global',
			'rating' => 'General',
			'revisit-after' => '7 days'
		];
		 
		if($this->char_per_line % 3 != 0)
		{
		 throw new Exception('Characters per line must be divisible by 3');
		}
	}

	public function Start(){
		ob_start(array($this,'HtmlEncryptor'));
	}
	
	public function End(){
		ob_end_flush();
	}

	public function SetMeta($merge){
		$this->meta = array_merge($this->meta, $merge);
	}	

	public function SetHead($h){
		$this->head = $h;
	}
	
	public function HtmlEncryptor($buffer){
		$code = '<script type="text/javascript" language="Javascript">function ' . $this->function_name . "(s){var i=0,out='';l=s.length;for(;i<l;i+=3){out+=String.fromCharCode(parseInt(s.substr(i,2),16));}document.write(out);}</script>";

		$output  = '
<!-------------------------------------------------------------------------------------------------------->
<!-- HTML SourceProtector V' . $this->ver . '                                                                         -->
<!-- Built by Arnch7 <https://github.com/OmegaLolBro/HTMLSourceProtector>                               -->
<!-- Credits : Arnch7, Arnav Chotkan, AI32767                                                           -->
<!-- This Website is protected against easy code stealing and malicious crawlers                        -->
<!-------------------------------------------------------------------------------------------------------->
'. "\n\n" . '
<!-------------------------------------------------------------------------------------------------------->
<!-- LEGAL NOTICE: The content of this website and all associated program code                          -->
<!-- are protected under the Digital Millennium Copyright Act. Intentionally                            -->
<!-- circumventing this code may constitute a violation of the DMCA.                                    -->
<!-------------------------------------------------------------------------------------------------------->
'. "\n\n" . '
<!-------------------------------------------------------------------------------------------------------->
<!--_______________________________________________&GJJG&_______________________________________________-->
<!--____________________________________________&G5J????J5G&____________________________________________-->
<!--_________________________________________#G5JJJJJJJJJJJJ5G#&________________________________________-->
<!--______________________________________&GYJJJJJJJJJJJJJJJJJJYPB&_____________________________________-->
<!--________________________________&BPB___&B5YJJJJJJJJJJJJYYYYYYYY5PB#&________________________________-->
<!--___________________________&#GY?!~^~?P&___&G5YJYYYYYYYYYYYYYYYYYYY55PB#&____________________________-->
<!--______________________&#GY?7~~~~~~~~~~!JB____#G5YYYYYYYYYYYYY5555555555PPGB#&_______________________-->
<!--________________&#GPY?7!~~~~~~~~~~~~~~~~~75B____#G5YYYYYY555555555555PPPPPPPPG&___&&________________-->
<!--_________&#BG5Y?7!!!!!!!!!!!!!!~~~~~~~~~~~~~?P_____&BP5555555555555PPPPPPPPPPP#___5?Y5PG#&&_________-->
<!--____BG5YJ?777!!!!!!!!!!!!!!!!!!!!!!!~~~~!7J5B&________&#BP5555555PPPPPPPPPPPPP&___5??????JYY5PG#____-->
<!--____J77777777777777!!!!!!!!!!!!!!~~!!?YPB&________________&#BGPPPPPPPPPPPPPGGG&___5??JJJJJJJJJJY____-->
<!--____Y7??7777777777777!!!!!!!!!!!?JPB&__________________________&#BGGPPPPPGGGGG&___5?JJJJJJJJJJJ5____-->
<!--____Y????777777777777!!!!77J5PB&____________________________________&&#BGGGGGG&___PJJJJJJJJJJJJ5____-->
<!--____Y??????777777777?JYPB#&&GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG&_&##B&___PJJJJJJJJYYYY5____-->
<!--____Y???????77777JB#&______&YJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJY__________PJJJJJYYYYYYY5____-->
<!--____Y?????????777Y__________5JYYYYYYYYYYYYYYYYYYYYJJJJJJJJJJJJJJJJJJYYJ5__________PJYYYYYYYYYYY5____-->
<!--____Y???????????7Y__________PJYYYYYYYYYYYYYYYYYYYYJJJJJJJJJJJJJJ???JYYJG__________PYYYYYYYYYYYY5____-->
<!--____Y???????????7Y__________GJYYYYYY??????????????77777777777777?J?JYYJB__________PYYYYYYYYYYYYP____-->
<!--____Y?J??????????5__________#JYYYYYY^............._____________:JJ?JYYY#__________PYYYYYYYYY55YP____-->
<!--____YJJJ?????????5__________&YYYYYYY~............._____________^J??JYYY&__________GYY5555555555P____-->
<!--____5JJJJJJJ?????5___________5YYYYYY!.....!7777777!!!!!!!!!!!!~7J?JJYJ5___________GY55555555555P____-->
<!--____5JJJJJJJJJJ??5___________PJYYYYY?.....?YYYYYYYJJJJJJJJJJJJJJ??JYYJP___________G555555555555P____-->
<!--____5JJJJJJJJJJJ?5___________GJYYYYYJ:....!YJJJJJJ????????????????JYYJB___________G555555555555P____-->
<!--____5JJJJJJJJJJJJ5___________BJYYYYYJ:....::::::::............:JJ?JYYY#___________G555555555555P____-->
<!--____Y?YJJJJJJJJJJY&__________&YYYYYYY^............____________^J??JYYY&___________P5PPPPPPPPPP5P____-->
<!--____P~?YYJJJJJJJJJB___________YYYYYYY7^~~~~~~~~~~^:::::::_____~J??JYY5___________#PPPPPPPPPPP5JG____-->
<!--____&!~7JYYYYJJJJJ5___________5JYYYYYYJJJJJYYYYYYYJJJJJJ!_____7J?JYYJP___________GPPPPPPPPPPYJJ&____-->
<!--_____Y~~!?YYYYYYYYJG__________GJYYYYY?:::::7YYYYYYJ?JJJJ^_____?J?JYYJG__________BPPPPPPPPP5YJJP_____-->
<!--_____&7~~~!?YYYYYYYYB_________BJYYYYYJ:....~YYYYYYJJJJJJ:____.?J?JYYJ#_________#PPPPPPPP5YJJJY&_____-->
<!--______G~!!!!!?JYYYYYYB________#YYYYYYY^....:^~!77?7!~^::_____^J??JYYY&________#PPPPGPP5YYYYYJB______-->
<!--_______5~!!!!!!7?YYYYYP&______&YYYYYYY~...........___________~J??JYY5________BPGGGPP5YYYYYYYG_______-->
<!--________5!!!!!!!!77JYYY5B______5JYYYYYJ?7!~^::....____..:^~!7?J?JYYJP______#GGGPP55YYYYYYYYG________-->
<!--_________P!!!!!!777777?JYP#____PJYYYYYYYYYYYJJ??7~^~!7??JJJJJJ??JYYJG____&BGPP5555555YYYYYB_________-->
<!--__________B7!!77777777777?J5B&_BJYYYYYYYYYYYYYYYYYJJJJJ????JJJJJJYYJB__#GPP555555555555Y5#__________-->
<!--___________&Y!!77777777777777J5PYYYYJJJJYYYYYYYYYYJ?JJJJJJJJJJJJYYYYBBPP555555555555555G&___________-->
<!--_____________G?!77777777777??77??J5PGGGP5YYJJJJJYYJJJJJJJYY5PGGBBGGPPPPPPPPP555555555P#_____________-->
<!--______________&P?77777777???????????J5G#&&&#BGP5YYYY5PGB#&&_&#BGPPPPPPPPPPPPPPP5555PB_______________-->
<!--________________&GJ777?????????????????JYPB&_____&&______&BGGPPPPPPPPPPPPPPPPPP55PB_________________-->
<!--___________________B5?77?????????????JJJJJJJ5G#&______&BGGGGGGGGGGPPPPPPPPPPPPPG#___________________-->
<!--_____________________&GY??????????JJJJJJJJJJJJJY5G#_____&#BGGGGGGGGGPPPPPPPPG#&_____________________-->
<!--________________________&BPY?????JJJJJJJJJJJJJJJJJY5PB&____&#BGGGGGGGPPGGB#&________________________-->
<!--____________________________#G5JJ?JJJJJJJJJJJJYYYYYYYYY5G#&____&#BGGGB#&____________________________-->
<!--_______________________________&#G5JJJJJJJJJYYYYYYYYYYYYYY5PB#&____&________________________________-->
<!--___________________________________&BP5JJJJYYYYYYYYYYYYYYYYYY5B_____________________________________-->
<!--_______________________________________&BPYYJYYYYYYYYYYYY5PB&_______________________________________-->
<!--___________________________________________#BP5YYYYYY5PB#___________________________________________-->
<!--______________________________________________&#G55G#&______________________________________________-->
<!-------------------------------------------------------------------------------------------------------->
'. "\n\n\n\n " . '
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
' . $this->MetaGen() . '
' . $this->HeadGen() . '
		<script type="text/javascript" language="Javascript">
			document.write(unescape("' . $this->JsEscape($code) . '"));
			var ' . $this->variable . '="";
' . $this->Encryptor($buffer) . '
			' . $this->function_name . '(' . $this->variable . ');
		</script>
	</head>
	<body>
		<noscript>
			<div style="color:white;background:red;padding:20px;text-align:center">
				<tt>
					<strong>
						<big>
							For functionality of this site it is necessary to enable JavaScript. &nbsp; &nbsp;
							Here are the <a target="_blank"href="http://www.enable-javascript.com/" style="color:white">instructions how to enable JavaScript in your web browser</a>.
						</big>
					</strong>
				</tt>
			</div>
		</noscript>
		<div name="backlinks" style="display:none;">
' . $this->FindBL($buffer) . '
		</div>
	</body>
</html>';

		return($output);
	}
	
	public function Encryptor( $in ) {
		$out = '';
		$in = utf8_decode($in);
		$in = htmlentities($in);
		$in = $this->HTMLSpecialCharsDecode($in);
		for ( $i = 0; $i < strlen( $in ); $i++)
		{
			$hex = dechex( ord($in[$i]) );
			if ( $hex == '' )
			{
				$temp = urlencode( $in[$i] );
				$temp = str_replace('%', '', $temp);
				$out = $out.$temp.'.';
			} else {
				$out = $out.((strlen($hex)==1) ? ( '0'.strtoupper( $hex ) ):( strtoupper( $hex ) ) ).'.';
			}
		}
		$out = str_replace('+', '20.', $out);
		$out = str_replace('_', '5F.', $out);
		$out = str_replace('-', '2D.', $out);
		$out = $this->variable."+='".chunk_split($out,$this->char_per_line, "';\n".$this->variable."+='")."';\n";
		$out = str_replace("cryptor_data+='';\n", '', $out);

		return $out;
	}
	
	public function HTMLSpecialCharsDecode($str, $quote_style = ENT_COMPAT){
		return strtr($str, array_flip(get_html_translation_table(HTML_SPECIALCHARS, $quote_style)));
	}
	
	public function JsEscape($in){
		$out = '';
		for ($i=0;$i<strlen($in);$i++)
		{
			$hex = dechex(ord($in[$i]));
			if ($hex=='')
				$out = $out.urlencode($in[$i]);
		    else
			$out = $out .'%'.((strlen($hex)==1) ? ('0'.strtoupper($hex)):(strtoupper($hex)));
		}
		
		return $out;
    }
	
	public function FindBL($buffer){
		$l = '';
		$ln = 1;
		$data = $buffer;

		$data = strip_tags($data,"<a>");
		$d = preg_split("/<\/a>/",$data);
		foreach ( $d as $k=>$u ){
			if( strpos($u, "<a href=") !== FALSE ){
				$u = preg_replace("/.*<a\s+href=\"/sm","",$u);
				$u = preg_replace("/\".*/","",$u);

				if(filter_var($u, FILTER_VALIDATE_URL)) {
					$l .= '            <a rel="noreferrer" title="HTML5 Hyperlink" href="' . $u . '"></a>' . "\n";
				}
			}
		}
		return $l;
	}

	public function MetaGen(){
		$out = '';

		foreach($this->meta as $t=>$val){
			$out .= '        <meta name="' . $t . '" content="' . $val . '">' . "\n";
		}

		return $out;
	}

	public function HeadGen(){
		if(!empty($this->head)){
			$out = '';
			foreach($this->head as $h){
				$out .= '        ' . $h . "\n";
			}

			return $out;
		}else{
			return '        <!-- No custom Head -->' . "\n";
		}
	}
}
