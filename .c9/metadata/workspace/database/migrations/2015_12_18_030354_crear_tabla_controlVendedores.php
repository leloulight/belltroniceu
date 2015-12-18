{"filter":false,"title":"2015_12_18_030354_crear_tabla_controlVendedores.php","tooltip":"/database/migrations/2015_12_18_030354_crear_tabla_controlVendedores.php","undoManager":{"mark":46,"position":46,"stack":[[{"start":{"row":14,"column":7},"end":{"row":14,"column":10},"action":"remove","lines":[" //"],"id":2},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":8},"end":{"row":21,"column":11},"action":"insert","lines":["Schema::create('comisiones',function(Blueprint $table){","            $table->increments('id');","            $table->string('ICC');","            $table->integer('valor');","            $table->string('periodo');","            $table->timestamps();","            $table->foreign('ICC')->references('ICC')->on('simcards')->onDelete('cascade')->onUpdate('cascade');","        });"],"id":3}],[{"start":{"row":31,"column":7},"end":{"row":31,"column":10},"action":"remove","lines":[" //"],"id":4},{"start":{"row":31,"column":7},"end":{"row":31,"column":42},"action":"insert","lines":["Schema::dropIfExists('comisiones');"]}],[{"start":{"row":31,"column":7},"end":{"row":31,"column":8},"action":"insert","lines":[" "],"id":5}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":34},"action":"remove","lines":["comisiones"],"id":6},{"start":{"row":14,"column":24},"end":{"row":14,"column":42},"action":"insert","lines":["control_vendedores"]}],[{"start":{"row":31,"column":30},"end":{"row":31,"column":40},"action":"remove","lines":["comisiones"],"id":7},{"start":{"row":31,"column":30},"end":{"row":31,"column":48},"action":"insert","lines":["control_vendedores"]}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":31},"action":"remove","lines":["ICC"],"id":18},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["c"]}],[{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["e"],"id":19}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["d"],"id":20}],[{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"insert","lines":["u"],"id":21}],[{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":["l"],"id":22}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":112},"action":"remove","lines":["","            $table->foreign('ICC')->references('ICC')->on('simcards')->onDelete('cascade')->onUpdate('cascade');"],"id":24}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":34},"action":"remove","lines":["valor"],"id":25},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["a"],"id":26}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["t"],"id":27}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["i"],"id":28}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["t"],"id":29}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["u"],"id":30}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["d"],"id":31}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":26},"action":"remove","lines":["string"],"id":32},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["i"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["n"],"id":33}],[{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["t"],"id":34}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["e"],"id":35}],[{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["g"],"id":36}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["e"],"id":37}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["r"],"id":38}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":36},"action":"remove","lines":["periodo"],"id":39},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["o"],"id":40}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["n"],"id":41}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["g"],"id":42}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["i"],"id":43}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["t"],"id":44}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["u"],"id":45}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["d"],"id":46}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":27},"action":"remove","lines":["integer"],"id":47},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["o"],"id":48}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["u"],"id":49}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["b"],"id":50}],[{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["l"],"id":51}],[{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["e"],"id":52}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":27},"action":"remove","lines":["integer"],"id":53},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["o"],"id":54}],[{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["u"],"id":55}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["b"],"id":56}],[{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["l"],"id":57}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["e"],"id":58}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":17,"column":26},"end":{"row":17,"column":26},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1450404380309,"hash":"3f6b50efb931a28a3bb27e8c0408f2720ad9dcb0"}