{"filter":false,"title":"simcard.blade.php","tooltip":"/resources/views/simcard.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":304,"column":107},"end":{"row":304,"column":108},"action":"insert","lines":["n"],"id":855}],[{"start":{"row":304,"column":108},"end":{"row":304,"column":109},"action":"insert","lines":["u"],"id":856}],[{"start":{"row":304,"column":109},"end":{"row":304,"column":110},"action":"insert","lines":["t"],"id":857}],[{"start":{"row":304,"column":110},"end":{"row":304,"column":111},"action":"insert","lines":["o"],"id":858}],[{"start":{"row":304,"column":111},"end":{"row":304,"column":112},"action":"insert","lines":["s"],"id":859}],[{"start":{"row":304,"column":137},"end":{"row":304,"column":142},"action":"remove","lines":["Valor"],"id":860},{"start":{"row":304,"column":137},"end":{"row":304,"column":138},"action":"insert","lines":["M"]}],[{"start":{"row":304,"column":138},"end":{"row":304,"column":139},"action":"insert","lines":["i"],"id":861}],[{"start":{"row":304,"column":139},"end":{"row":304,"column":140},"action":"insert","lines":["n"],"id":862}],[{"start":{"row":304,"column":140},"end":{"row":304,"column":141},"action":"insert","lines":["s"],"id":863}],[{"start":{"row":304,"column":140},"end":{"row":304,"column":141},"action":"remove","lines":["s"],"id":864}],[{"start":{"row":59,"column":59},"end":{"row":59,"column":63},"action":"remove","lines":["page"],"id":865}],[{"start":{"row":59,"column":58},"end":{"row":59,"column":59},"action":"remove","lines":["#"],"id":866}],[{"start":{"row":59,"column":58},"end":{"row":59,"column":59},"action":"insert","lines":["/"],"id":867}],[{"start":{"row":59,"column":59},"end":{"row":59,"column":60},"action":"remove","lines":["-"],"id":868}],[{"start":{"row":59,"column":59},"end":{"row":59,"column":60},"action":"remove","lines":["t"],"id":869}],[{"start":{"row":59,"column":59},"end":{"row":59,"column":60},"action":"remove","lines":["o"],"id":870}],[{"start":{"row":59,"column":59},"end":{"row":59,"column":60},"action":"remove","lines":["p"],"id":871}],[{"start":{"row":29,"column":4},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":872},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":4},"end":{"row":31,"column":62},"action":"insert","lines":["<!-- Loading Animation CSS -->","    <link href=\"css/utilities/utilities.css\" rel=\"stylesheet\">"],"id":873}],[{"start":{"row":31,"column":62},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":874},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":114,"column":0},"end":{"row":118,"column":10},"action":"remove","lines":["","    <!-- CARGAR ARCHIVO -->","    <div class=\"hiddenfile\">","      <input name=\"upload\" type=\"file\" accept=\".csv\" id=\"fileinput\"/>","    </div>"],"id":875}],[{"start":{"row":483,"column":10},"end":{"row":484,"column":0},"action":"insert","lines":["",""],"id":876},{"start":{"row":484,"column":0},"end":{"row":484,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":484,"column":4},"end":{"row":485,"column":0},"action":"insert","lines":["",""],"id":877},{"start":{"row":485,"column":0},"end":{"row":485,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":485,"column":4},"end":{"row":514,"column":10},"action":"insert","lines":["<!-- CARGAR ARCHIVO -->","    <div id=\"modal_upload\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">","        <div class=\"modal-dialog\">","            <div class=\"modal-content\">","                <div class=\"modal-header\">","                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>","                    <h3 id =\"modal-tittle\">Subir Comisiones</h3>","                </div>","                <div class=\"modal-body\">","                    <p>Al presionar SUBIR se debe esperar que se recarge la página.</p>","                    {!! Form::open(","                    array(","                        'route' => 'agregarComisiones', ","                        'class' => 'form', ","                        'novalidate' => 'novalidate', ","                        'files' => true)) !!}","                    <input name=\"_token\" hidden value=\"{!! csrf_token() !!}\" />","                    <div class=\"form-group\">","                        {!! Form::label('Product Image') !!}","                        {!! Form::file('image', null) !!}","                    </div>","                    ","                    <div class=\"form-group\">","                        {!! Form::submit('Subir') !!}","                    </div>","                    {!! Form::close() !!}        ","                </div>","            </div>","        </div>","    </div>"],"id":878}],[{"start":{"row":491,"column":49},"end":{"row":491,"column":59},"action":"remove","lines":["Comisiones"],"id":879},{"start":{"row":491,"column":49},"end":{"row":491,"column":50},"action":"insert","lines":["o"]}],[{"start":{"row":491,"column":50},"end":{"row":491,"column":51},"action":"insert","lines":[" "],"id":880}],[{"start":{"row":491,"column":51},"end":{"row":491,"column":52},"action":"insert","lines":["a"],"id":881}],[{"start":{"row":491,"column":51},"end":{"row":491,"column":52},"action":"remove","lines":["a"],"id":882}],[{"start":{"row":491,"column":51},"end":{"row":491,"column":52},"action":"insert","lines":["A"],"id":883}],[{"start":{"row":491,"column":52},"end":{"row":491,"column":53},"action":"insert","lines":["c"],"id":884}],[{"start":{"row":491,"column":53},"end":{"row":491,"column":54},"action":"insert","lines":["t"],"id":885}],[{"start":{"row":491,"column":54},"end":{"row":491,"column":55},"action":"insert","lines":["i"],"id":886}],[{"start":{"row":491,"column":55},"end":{"row":491,"column":56},"action":"insert","lines":["v"],"id":887}],[{"start":{"row":491,"column":56},"end":{"row":491,"column":57},"action":"insert","lines":["a"],"id":888}],[{"start":{"row":491,"column":57},"end":{"row":491,"column":58},"action":"insert","lines":["r"],"id":889}],[{"start":{"row":491,"column":58},"end":{"row":491,"column":59},"action":"insert","lines":[" "],"id":890}],[{"start":{"row":491,"column":59},"end":{"row":491,"column":60},"action":"insert","lines":["S"],"id":891}],[{"start":{"row":491,"column":60},"end":{"row":491,"column":61},"action":"insert","lines":["i"],"id":892}],[{"start":{"row":491,"column":61},"end":{"row":491,"column":62},"action":"insert","lines":["m"],"id":893}],[{"start":{"row":491,"column":62},"end":{"row":491,"column":63},"action":"insert","lines":["c"],"id":894}],[{"start":{"row":491,"column":63},"end":{"row":491,"column":64},"action":"insert","lines":["a"],"id":895}],[{"start":{"row":491,"column":64},"end":{"row":491,"column":65},"action":"insert","lines":["r"],"id":896}],[{"start":{"row":491,"column":65},"end":{"row":491,"column":66},"action":"insert","lines":["d"],"id":897}],[{"start":{"row":491,"column":66},"end":{"row":491,"column":67},"action":"insert","lines":["s"],"id":898}],[{"start":{"row":491,"column":49},"end":{"row":491,"column":58},"action":"remove","lines":["o Activar"],"id":899},{"start":{"row":491,"column":49},"end":{"row":491,"column":50},"action":"insert","lines":["a"]}],[{"start":{"row":491,"column":50},"end":{"row":491,"column":51},"action":"insert","lines":["r"],"id":900}],[{"start":{"row":491,"column":51},"end":{"row":491,"column":52},"action":"insert","lines":["c"],"id":901}],[{"start":{"row":491,"column":52},"end":{"row":491,"column":53},"action":"insert","lines":["h"],"id":902}],[{"start":{"row":491,"column":53},"end":{"row":491,"column":54},"action":"insert","lines":["v"],"id":903}],[{"start":{"row":491,"column":53},"end":{"row":491,"column":54},"action":"remove","lines":["v"],"id":904}],[{"start":{"row":491,"column":53},"end":{"row":491,"column":54},"action":"insert","lines":["i"],"id":905}],[{"start":{"row":491,"column":54},"end":{"row":491,"column":55},"action":"insert","lines":["v"],"id":906}],[{"start":{"row":491,"column":55},"end":{"row":491,"column":56},"action":"insert","lines":["o"],"id":907}],[{"start":{"row":88,"column":47},"end":{"row":88,"column":81},"action":"remove","lines":["onClick=\"subir_archivo()\" href=\"#\""],"id":908},{"start":{"row":88,"column":47},"end":{"row":88,"column":115},"action":"insert","lines":["data-target=\"#modal_upload\" data-toggle=\"modal\" href=\"#modal_upload\""]}],[{"start":{"row":497,"column":36},"end":{"row":497,"column":53},"action":"remove","lines":["agregarComisiones"],"id":909},{"start":{"row":497,"column":36},"end":{"row":497,"column":37},"action":"insert","lines":["s"]}],[{"start":{"row":497,"column":37},"end":{"row":497,"column":38},"action":"insert","lines":["u"],"id":910}],[{"start":{"row":497,"column":38},"end":{"row":497,"column":39},"action":"insert","lines":["b"],"id":911}],[{"start":{"row":497,"column":39},"end":{"row":497,"column":40},"action":"insert","lines":["i"],"id":912}],[{"start":{"row":497,"column":40},"end":{"row":497,"column":41},"action":"insert","lines":["r"],"id":913}],[{"start":{"row":497,"column":41},"end":{"row":497,"column":42},"action":"insert","lines":["A"],"id":914}],[{"start":{"row":497,"column":42},"end":{"row":497,"column":43},"action":"insert","lines":["r"],"id":915}],[{"start":{"row":497,"column":43},"end":{"row":497,"column":44},"action":"insert","lines":["c"],"id":916}],[{"start":{"row":497,"column":44},"end":{"row":497,"column":45},"action":"insert","lines":["h"],"id":917}],[{"start":{"row":497,"column":45},"end":{"row":497,"column":46},"action":"insert","lines":["i"],"id":918}],[{"start":{"row":497,"column":46},"end":{"row":497,"column":47},"action":"insert","lines":["v"],"id":919}],[{"start":{"row":497,"column":47},"end":{"row":497,"column":48},"action":"insert","lines":["o"],"id":920}],[{"start":{"row":497,"column":48},"end":{"row":497,"column":49},"action":"insert","lines":["i"],"id":921}],[{"start":{"row":497,"column":48},"end":{"row":497,"column":49},"action":"remove","lines":["i"],"id":922}],[{"start":{"row":497,"column":48},"end":{"row":497,"column":49},"action":"insert","lines":["S"],"id":923}],[{"start":{"row":497,"column":49},"end":{"row":497,"column":50},"action":"insert","lines":["i"],"id":924}],[{"start":{"row":497,"column":50},"end":{"row":497,"column":51},"action":"insert","lines":["m"],"id":925}],[{"start":{"row":497,"column":51},"end":{"row":497,"column":52},"action":"insert","lines":["c"],"id":926}],[{"start":{"row":497,"column":52},"end":{"row":497,"column":53},"action":"insert","lines":["a"],"id":927}],[{"start":{"row":497,"column":53},"end":{"row":497,"column":54},"action":"insert","lines":["r"],"id":928}],[{"start":{"row":497,"column":54},"end":{"row":497,"column":55},"action":"insert","lines":["d"],"id":929}],[{"start":{"row":497,"column":55},"end":{"row":497,"column":56},"action":"insert","lines":["s"],"id":930}],[{"start":{"row":226,"column":151},"end":{"row":226,"column":152},"action":"insert","lines":[";"],"id":931}],[{"start":{"row":226,"column":151},"end":{"row":226,"column":152},"action":"remove","lines":[";"],"id":932}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"insert","lines":["c"],"id":933}],[{"start":{"row":226,"column":58},"end":{"row":226,"column":59},"action":"insert","lines":["n"],"id":934}],[{"start":{"row":226,"column":59},"end":{"row":226,"column":60},"action":"insert","lines":["o"],"id":935}],[{"start":{"row":226,"column":59},"end":{"row":226,"column":60},"action":"remove","lines":["o"],"id":936}],[{"start":{"row":226,"column":58},"end":{"row":226,"column":59},"action":"remove","lines":["n"],"id":937}],[{"start":{"row":226,"column":58},"end":{"row":226,"column":59},"action":"insert","lines":["o"],"id":938}],[{"start":{"row":226,"column":59},"end":{"row":226,"column":60},"action":"insert","lines":["n"],"id":939}],[{"start":{"row":226,"column":60},"end":{"row":226,"column":61},"action":"insert","lines":["f"],"id":940}],[{"start":{"row":226,"column":61},"end":{"row":226,"column":62},"action":"insert","lines":["i"],"id":941}],[{"start":{"row":226,"column":62},"end":{"row":226,"column":63},"action":"insert","lines":["r"],"id":942}],[{"start":{"row":226,"column":63},"end":{"row":226,"column":64},"action":"insert","lines":["m"],"id":943}],[{"start":{"row":226,"column":64},"end":{"row":226,"column":65},"action":"insert","lines":["_"],"id":944}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["c"],"id":945}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["o"],"id":946}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["n"],"id":947}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["f"],"id":948}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["i"],"id":949}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["r"],"id":950}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["m"],"id":951}],[{"start":{"row":226,"column":57},"end":{"row":226,"column":58},"action":"remove","lines":["_"],"id":952}],[{"start":{"row":425,"column":42},"end":{"row":425,"column":55},"action":"remove","lines":["button_assign"],"id":953}],[{"start":{"row":425,"column":41},"end":{"row":425,"column":42},"action":"remove","lines":[" "],"id":954}],[{"start":{"row":502,"column":44},"end":{"row":503,"column":60},"action":"remove","lines":["","                        {!! Form::label('Product Image') !!}"],"id":955}]]},"ace":{"folds":[],"scrolltop":4350,"scrollleft":0,"selection":{"start":{"row":229,"column":34},"end":{"row":229,"column":58},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":212,"state":"start","mode":"ace/mode/php"}},"timestamp":1450152731218,"hash":"f13c5a103d71f9f1d676498f4c04ed6a7217a9d6"}