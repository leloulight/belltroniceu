{"filter":false,"title":"FrontController.php","tooltip":"/app/Http/Controllers/FrontController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":29,"column":70},"end":{"row":29,"column":71},"action":"insert","lines":["r"],"id":221}],[{"start":{"row":29,"column":71},"end":{"row":29,"column":72},"action":"insert","lines":["_"],"id":222}],[{"start":{"row":29,"column":72},"end":{"row":29,"column":73},"action":"insert","lines":["m"],"id":223}],[{"start":{"row":29,"column":73},"end":{"row":29,"column":74},"action":"insert","lines":["o"],"id":224}],[{"start":{"row":29,"column":74},"end":{"row":29,"column":75},"action":"insert","lines":["n"],"id":225}],[{"start":{"row":29,"column":75},"end":{"row":29,"column":76},"action":"insert","lines":["t"],"id":226}],[{"start":{"row":29,"column":76},"end":{"row":29,"column":77},"action":"insert","lines":["h"],"id":227}],[{"start":{"row":29,"column":77},"end":{"row":29,"column":78},"action":"insert","lines":[" "],"id":228}],[{"start":{"row":29,"column":78},"end":{"row":29,"column":79},"action":"insert","lines":["f"],"id":229}],[{"start":{"row":29,"column":79},"end":{"row":29,"column":80},"action":"insert","lines":["r"],"id":230}],[{"start":{"row":29,"column":80},"end":{"row":29,"column":81},"action":"insert","lines":["o"],"id":231}],[{"start":{"row":29,"column":81},"end":{"row":29,"column":82},"action":"insert","lines":["m"],"id":232}],[{"start":{"row":29,"column":82},"end":{"row":29,"column":83},"action":"insert","lines":[" "],"id":233}],[{"start":{"row":29,"column":83},"end":{"row":29,"column":84},"action":"insert","lines":["?"],"id":234}],[{"start":{"row":29,"column":85},"end":{"row":29,"column":86},"action":"insert","lines":[" "],"id":235}],[{"start":{"row":29,"column":86},"end":{"row":29,"column":87},"action":"insert","lines":["o"],"id":236}],[{"start":{"row":29,"column":87},"end":{"row":29,"column":88},"action":"insert","lines":["r"],"id":237}],[{"start":{"row":29,"column":88},"end":{"row":29,"column":89},"action":"insert","lines":[" "],"id":238}],[{"start":{"row":29,"column":89},"end":{"row":29,"column":125},"action":"insert","lines":["periodo = extract(year_month from ?)"],"id":239}],[{"start":{"row":29,"column":126},"end":{"row":29,"column":127},"action":"insert","lines":[","],"id":240}],[{"start":{"row":29,"column":127},"end":{"row":29,"column":128},"action":"insert","lines":[" "],"id":241}],[{"start":{"row":29,"column":128},"end":{"row":29,"column":130},"action":"insert","lines":["[]"],"id":242}],[{"start":{"row":29,"column":129},"end":{"row":29,"column":130},"action":"insert","lines":["$"],"id":243}],[{"start":{"row":29,"column":130},"end":{"row":29,"column":131},"action":"insert","lines":["n"],"id":244}],[{"start":{"row":29,"column":131},"end":{"row":29,"column":132},"action":"insert","lines":["o"],"id":245}],[{"start":{"row":29,"column":132},"end":{"row":29,"column":133},"action":"insert","lines":["w"],"id":246}],[{"start":{"row":29,"column":133},"end":{"row":29,"column":134},"action":"insert","lines":[","],"id":247}],[{"start":{"row":29,"column":134},"end":{"row":29,"column":135},"action":"insert","lines":[" "],"id":248}],[{"start":{"row":29,"column":135},"end":{"row":29,"column":136},"action":"insert","lines":["$"],"id":249}],[{"start":{"row":29,"column":136},"end":{"row":29,"column":137},"action":"insert","lines":["l"],"id":250}],[{"start":{"row":29,"column":137},"end":{"row":29,"column":138},"action":"insert","lines":["a"],"id":251}],[{"start":{"row":29,"column":138},"end":{"row":29,"column":139},"action":"insert","lines":["s"],"id":252}],[{"start":{"row":29,"column":135},"end":{"row":29,"column":139},"action":"remove","lines":["$las"],"id":253},{"start":{"row":29,"column":135},"end":{"row":29,"column":147},"action":"insert","lines":["$lasth_month"]}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["\\"],"id":254}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["\\"],"id":255}],[{"start":{"row":26,"column":7},"end":{"row":29,"column":150},"action":"remove","lines":["$now = new \\DateTime();","       $lasth_month = date_add($now,date_interval_create_from_date_string(\"-1 months\"));","       $now = new \\DateTime();","       \\DB::select(\"delete from comisiones where periodo = extract(year_month from ?) or periodo = extract(year_month from ?)\", [$now, $lasth_month]);"],"id":256}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"remove","lines":[" "],"id":257}],[{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"remove","lines":[" "],"id":258}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":[" "],"id":259}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "],"id":260}],[{"start":{"row":25,"column":30},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":261}],[{"start":{"row":47,"column":31},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":262},{"start":{"row":48,"column":0},"end":{"row":48,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":48,"column":8},"end":{"row":51,"column":150},"action":"insert","lines":["$now = new \\DateTime();","       $lasth_month = date_add($now,date_interval_create_from_date_string(\"-1 months\"));","       $now = new \\DateTime();","       \\DB::select(\"delete from comisiones where periodo = extract(year_month from ?) or periodo = extract(year_month from ?)\", [$now, $lasth_month]);"],"id":263}],[{"start":{"row":51,"column":7},"end":{"row":51,"column":8},"action":"insert","lines":[" "],"id":264}],[{"start":{"row":50,"column":7},"end":{"row":50,"column":8},"action":"insert","lines":[" "],"id":265}],[{"start":{"row":49,"column":7},"end":{"row":49,"column":8},"action":"insert","lines":[" "],"id":266}],[{"start":{"row":49,"column":89},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":267},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":9},"action":"insert","lines":["$"],"id":268}],[{"start":{"row":50,"column":9},"end":{"row":50,"column":10},"action":"insert","lines":["l"],"id":269}],[{"start":{"row":50,"column":10},"end":{"row":50,"column":11},"action":"insert","lines":["a"],"id":270}],[{"start":{"row":50,"column":11},"end":{"row":50,"column":12},"action":"insert","lines":["s"],"id":271}],[{"start":{"row":50,"column":12},"end":{"row":50,"column":13},"action":"insert","lines":["t"],"id":272}],[{"start":{"row":50,"column":13},"end":{"row":50,"column":14},"action":"insert","lines":["_"],"id":273}],[{"start":{"row":50,"column":14},"end":{"row":50,"column":15},"action":"insert","lines":["l"],"id":274}],[{"start":{"row":50,"column":15},"end":{"row":50,"column":16},"action":"insert","lines":["a"],"id":275}],[{"start":{"row":50,"column":16},"end":{"row":50,"column":17},"action":"insert","lines":["s"],"id":276}],[{"start":{"row":50,"column":17},"end":{"row":50,"column":18},"action":"insert","lines":["t"],"id":277}],[{"start":{"row":50,"column":18},"end":{"row":50,"column":19},"action":"insert","lines":["_"],"id":278}],[{"start":{"row":50,"column":19},"end":{"row":50,"column":20},"action":"insert","lines":["m"],"id":279}],[{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"insert","lines":["o"],"id":280}],[{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"insert","lines":["n"],"id":281}],[{"start":{"row":50,"column":22},"end":{"row":50,"column":23},"action":"insert","lines":["t"],"id":282}],[{"start":{"row":50,"column":23},"end":{"row":50,"column":24},"action":"insert","lines":["h"],"id":283}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"insert","lines":[" "],"id":284}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["="],"id":285}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":[" "],"id":286}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":93},"action":"insert","lines":["date_add($now,date_interval_create_from_date_string(\"-1 months\"));"],"id":287}],[{"start":{"row":52,"column":126},"end":{"row":52,"column":127},"action":"insert","lines":[" "],"id":288}],[{"start":{"row":52,"column":127},"end":{"row":52,"column":166},"action":"insert","lines":["or periodo = extract(year_month from ?)"],"id":289}],[{"start":{"row":52,"column":188},"end":{"row":52,"column":189},"action":"insert","lines":[","],"id":290}],[{"start":{"row":52,"column":189},"end":{"row":52,"column":190},"action":"insert","lines":[" "],"id":291}],[{"start":{"row":52,"column":190},"end":{"row":52,"column":191},"action":"insert","lines":["$"],"id":292}],[{"start":{"row":52,"column":191},"end":{"row":52,"column":192},"action":"insert","lines":["l"],"id":293}],[{"start":{"row":52,"column":192},"end":{"row":52,"column":193},"action":"insert","lines":["a"],"id":294}],[{"start":{"row":52,"column":193},"end":{"row":52,"column":194},"action":"insert","lines":["s"],"id":295}],[{"start":{"row":52,"column":190},"end":{"row":52,"column":194},"action":"remove","lines":["$las"],"id":296},{"start":{"row":52,"column":190},"end":{"row":52,"column":206},"action":"insert","lines":["$last_last_month"]}],[{"start":{"row":50,"column":82},"end":{"row":50,"column":83},"action":"insert","lines":["2"],"id":297}],[{"start":{"row":50,"column":82},"end":{"row":50,"column":83},"action":"remove","lines":["2"],"id":298}],[{"start":{"row":50,"column":81},"end":{"row":50,"column":82},"action":"remove","lines":["1"],"id":299}],[{"start":{"row":50,"column":81},"end":{"row":50,"column":82},"action":"insert","lines":["2"],"id":300}],[{"start":{"row":52,"column":58},"end":{"row":52,"column":59},"action":"remove","lines":["="],"id":301}],[{"start":{"row":52,"column":58},"end":{"row":52,"column":59},"action":"insert","lines":["<"],"id":302}],[{"start":{"row":52,"column":59},"end":{"row":52,"column":60},"action":"insert","lines":[">"],"id":303}],[{"start":{"row":52,"column":99},"end":{"row":52,"column":100},"action":"remove","lines":["="],"id":304}],[{"start":{"row":52,"column":99},"end":{"row":52,"column":100},"action":"insert","lines":["<"],"id":305}],[{"start":{"row":52,"column":100},"end":{"row":52,"column":101},"action":"insert","lines":[">"],"id":306}],[{"start":{"row":52,"column":89},"end":{"row":52,"column":90},"action":"remove","lines":["r"],"id":307}],[{"start":{"row":52,"column":88},"end":{"row":52,"column":89},"action":"remove","lines":["o"],"id":308}],[{"start":{"row":52,"column":88},"end":{"row":52,"column":89},"action":"insert","lines":["a"],"id":309}],[{"start":{"row":52,"column":89},"end":{"row":52,"column":90},"action":"insert","lines":["n"],"id":310}],[{"start":{"row":52,"column":90},"end":{"row":52,"column":91},"action":"insert","lines":["d"],"id":311}],[{"start":{"row":50,"column":81},"end":{"row":50,"column":82},"action":"remove","lines":["2"],"id":312}],[{"start":{"row":50,"column":81},"end":{"row":50,"column":82},"action":"insert","lines":["1"],"id":313}],[{"start":{"row":52,"column":141},"end":{"row":52,"column":142},"action":"remove","lines":["="],"id":314}],[{"start":{"row":52,"column":141},"end":{"row":52,"column":142},"action":"insert","lines":["<"],"id":315}],[{"start":{"row":52,"column":142},"end":{"row":52,"column":143},"action":"insert","lines":[">"],"id":316}],[{"start":{"row":52,"column":131},"end":{"row":52,"column":132},"action":"remove","lines":["r"],"id":317}],[{"start":{"row":52,"column":130},"end":{"row":52,"column":131},"action":"remove","lines":["o"],"id":318}],[{"start":{"row":52,"column":130},"end":{"row":52,"column":131},"action":"insert","lines":["a"],"id":319}],[{"start":{"row":52,"column":131},"end":{"row":52,"column":132},"action":"insert","lines":["n"],"id":320}],[{"start":{"row":52,"column":132},"end":{"row":52,"column":133},"action":"insert","lines":["d"],"id":321}]]},"ace":{"folds":[],"scrolltop":864,"scrollleft":0,"selection":{"start":{"row":55,"column":36},"end":{"row":55,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":42,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1451880684221,"hash":"ba67dae82985e8697cab4c43b1e5b2a27e762e90"}