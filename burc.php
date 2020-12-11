<?php

function find($first, $last, $text)
{
    @preg_match_all('/' . preg_quote($first, '/') .
    '(.*?)'. preg_quote($last, '/').'/i', $text, $m);
    return @$m[1];
}

class zodiacSign{
	function yengec(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/yengec-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function kova(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/kova-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function koc(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/koc-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function oglak(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/oglak-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function aslan(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/aslan-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function akrep(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/akrep-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function yay(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/yay-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function ikizler(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/ikizler-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function boga(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/boga-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function basak(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/basak-burcu-gunluk-yorumu.html/");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function balik(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/balik-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
	function terazi(){
		$a = file_get_contents("https://www.mynet.com/kadin/burclar-astroloji/terazi-burcu-gunluk-yorumu.html");
		$b = find("<p>","</p>",$a);
		$result = $b[0];
		return $result;
	}
}


$zodiacSign = new zodiacSign();

if (isset($_GET['burc']))
{
    $sign = $_GET['burc'];
    if ($sign == "yengec")
    {
        echo $zodiacSign->yengec();
    }
    else if ($sign == "kova")
    {
        echo $zodiacSign->kova();
    }
    else if ($sign == "boga")
    {
        echo $zodiacSign->boga();
    }
    else if ($sign == "yay")
    {
        echo $zodiacSign->yay();
    }
    else if ($sign == "ikizler")
    {
        echo $zodiacSign->ikizler();
    }
    else if ($sign == "terazi")
    {
        echo $zodiacSign->terazi();
    }
    else if ($sign == "basak")
    {
        echo $zodiacSign->basak();
    }
    else if ($sign == "balik")
    {
        echo $zodiacSign->balik();
    }
    else if ($sign == "oglak")
    {
        echo $zodiacSign->oglak();
    }
    else if ($sign == "aslan")
    {
        echo $zodiacSign->aslan();
    }
    else if ($sign == "akrep")
    {
        echo $zodiacSign->akrep();
    }
    else if ($sign == "koc")
    {
        echo $zodiacSign->koc();
    }
}




?>
