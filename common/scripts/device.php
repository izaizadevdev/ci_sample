<?php
 function isMobile() {
    // Check the server headers to see if they're mobile friendly
    if(isset($_SERVER["HTTP_X_WAP_PROFILE"])) {
        return true;
    }
    // If the http_accept header supports wap then it's a mobile too
    if(preg_match("/wap\.|\.wap/i",$_SERVER["HTTP_ACCEPT"])) {
        return true;
    }
    // Still no luck? Let's have a look at the user agent on the browser. If it contains
    // any of the following, it's probably a mobile device. Kappow!
    if(isset($_SERVER["HTTP_USER_AGENT"])){
        $user_agents = array("midp", "j2me", "avantg", "docomo", "novarra", "palmos", "palmsource", "240x320", "opwv", "chtml", "pda", "windows\ ce", "mmp\/", "blackberry", "mib\/", "symbian", "wireless", "nokia", "hand", "mobi", "phone", "cdm", "up\.b", "audio", "SIE\-", "SEC\-", "samsung", "HTC", "mot\-", "mitsu", "sagem", "sony", "alcatel", "lg", "erics", "vx", "NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch", "rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi", "bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo", "sgh", "gradi", "jb", "\d\d\di", "moto");
        foreach($user_agents as $user_string){
            if(preg_match("/".$user_string."/i",$_SERVER["HTTP_USER_AGENT"])) {
                return true;
            }
        }
    }
    // Let's NOT return "mobile" if it's an iPhone, because the iPhone can render normal pages quite well.
    if(preg_match("/iphone/i",$_SERVER["HTTP_USER_AGENT"])) {
        return false;
    }
    // None of the above? Then it's probably not a mobile device.
    return false;
}
	if(isMobile()){header("location: http://m.monoqlo.co.th/jp/");}
?>