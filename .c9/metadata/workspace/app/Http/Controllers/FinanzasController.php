{"filter":false,"title":"FinanzasController.php","tooltip":"/app/Http/Controllers/FinanzasController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":68,"column":51},"end":{"row":70,"column":50},"action":"remove","lines":["","            $datosLibre = \\DB::select(\"SELECT subdistribuidores.nombre nombre,sum(valor) valor from comisiones inner join simcards on comisiones.ICC = simcards.ICC INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = ? and comisiones.periodo = ? and simcards.tipo = '2' group by subdistribuidores.nombre\",","                [$user->name, $periodo->periodo]);"],"id":2343}],[{"start":{"row":69,"column":19},"end":{"row":69,"column":47},"action":"remove","lines":["[$datosPrepago, $datosLibre]"],"id":2344},{"start":{"row":69,"column":19},"end":{"row":69,"column":20},"action":"insert","lines":["$"]}],[{"start":{"row":69,"column":20},"end":{"row":69,"column":21},"action":"insert","lines":["d"],"id":2345}],[{"start":{"row":69,"column":21},"end":{"row":69,"column":22},"action":"insert","lines":["a"],"id":2346}],[{"start":{"row":69,"column":22},"end":{"row":69,"column":23},"action":"insert","lines":["t"],"id":2347}],[{"start":{"row":69,"column":23},"end":{"row":69,"column":24},"action":"insert","lines":["o"],"id":2348}],[{"start":{"row":69,"column":24},"end":{"row":69,"column":25},"action":"insert","lines":["s"],"id":2349}],[{"start":{"row":73,"column":0},"end":{"row":74,"column":365},"action":"remove","lines":["","SELECT sum(case when simcards.tipo = 1 then comisiones.valor end) prepago from comisiones inner join simcards on comisiones.ICC = simcards.ICC INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = 'OFICINA' and comisiones.periodo = '201508'"],"id":2350}],[{"start":{"row":67,"column":103},"end":{"row":67,"column":104},"action":"insert","lines":[" "],"id":2351}],[{"start":{"row":67,"column":104},"end":{"row":67,"column":105},"action":"insert","lines":["v"],"id":2352}],[{"start":{"row":67,"column":105},"end":{"row":67,"column":106},"action":"insert","lines":["a"],"id":2353}],[{"start":{"row":67,"column":106},"end":{"row":67,"column":107},"action":"insert","lines":["l"],"id":2354}],[{"start":{"row":67,"column":107},"end":{"row":67,"column":108},"action":"insert","lines":["r"],"id":2355}],[{"start":{"row":67,"column":107},"end":{"row":67,"column":108},"action":"remove","lines":["r"],"id":2356}],[{"start":{"row":67,"column":107},"end":{"row":67,"column":108},"action":"insert","lines":["o"],"id":2357}],[{"start":{"row":67,"column":108},"end":{"row":67,"column":109},"action":"insert","lines":["r"],"id":2358}],[{"start":{"row":65,"column":35},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":2359},{"start":{"row":66,"column":0},"end":{"row":66,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":66,"column":12},"end":{"row":66,"column":13},"action":"insert","lines":["i"],"id":2360}],[{"start":{"row":66,"column":13},"end":{"row":66,"column":14},"action":"insert","lines":["f"],"id":2361}],[{"start":{"row":66,"column":14},"end":{"row":66,"column":16},"action":"insert","lines":["()"],"id":2362}],[{"start":{"row":66,"column":15},"end":{"row":66,"column":16},"action":"insert","lines":["$"],"id":2363}],[{"start":{"row":66,"column":16},"end":{"row":66,"column":17},"action":"insert","lines":["r"],"id":2364}],[{"start":{"row":66,"column":17},"end":{"row":66,"column":18},"action":"insert","lines":["e"],"id":2365}],[{"start":{"row":66,"column":18},"end":{"row":66,"column":19},"action":"insert","lines":["q"],"id":2366}],[{"start":{"row":66,"column":19},"end":{"row":66,"column":20},"action":"insert","lines":["u"],"id":2367}],[{"start":{"row":66,"column":20},"end":{"row":66,"column":21},"action":"insert","lines":["e"],"id":2368}],[{"start":{"row":66,"column":15},"end":{"row":66,"column":21},"action":"remove","lines":["$reque"],"id":2369},{"start":{"row":66,"column":15},"end":{"row":66,"column":23},"action":"insert","lines":["$request"]}],[{"start":{"row":66,"column":23},"end":{"row":66,"column":25},"action":"insert","lines":["[]"],"id":2370}],[{"start":{"row":66,"column":24},"end":{"row":66,"column":26},"action":"insert","lines":["''"],"id":2371}],[{"start":{"row":66,"column":25},"end":{"row":66,"column":26},"action":"insert","lines":["d"],"id":2372}],[{"start":{"row":66,"column":26},"end":{"row":66,"column":27},"action":"insert","lines":["i"],"id":2373}],[{"start":{"row":66,"column":27},"end":{"row":66,"column":28},"action":"insert","lines":["s"],"id":2374}],[{"start":{"row":66,"column":25},"end":{"row":66,"column":28},"action":"remove","lines":["dis"],"id":2375},{"start":{"row":66,"column":25},"end":{"row":66,"column":37},"action":"insert","lines":["distribuidor"]}],[{"start":{"row":66,"column":39},"end":{"row":66,"column":40},"action":"insert","lines":[" "],"id":2376}],[{"start":{"row":66,"column":40},"end":{"row":66,"column":41},"action":"insert","lines":["="],"id":2377}],[{"start":{"row":66,"column":41},"end":{"row":66,"column":42},"action":"insert","lines":["="],"id":2378}],[{"start":{"row":66,"column":42},"end":{"row":66,"column":43},"action":"insert","lines":[" "],"id":2379}],[{"start":{"row":66,"column":43},"end":{"row":66,"column":44},"action":"insert","lines":["n"],"id":2380}],[{"start":{"row":66,"column":44},"end":{"row":66,"column":45},"action":"insert","lines":["u"],"id":2381}],[{"start":{"row":66,"column":45},"end":{"row":66,"column":46},"action":"insert","lines":["l"],"id":2382}],[{"start":{"row":66,"column":46},"end":{"row":66,"column":47},"action":"insert","lines":["l"],"id":2383}],[{"start":{"row":66,"column":48},"end":{"row":66,"column":49},"action":"insert","lines":["{"],"id":2384}],[{"start":{"row":69,"column":51},"end":{"row":70,"column":0},"action":"insert","lines":["",""],"id":2385},{"start":{"row":70,"column":0},"end":{"row":70,"column":17},"action":"insert","lines":["                 "]}],[{"start":{"row":70,"column":17},"end":{"row":70,"column":18},"action":"insert","lines":["}"],"id":2386},{"start":{"row":70,"column":0},"end":{"row":70,"column":17},"action":"remove","lines":["                 "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":67,"column":23},"end":{"row":67,"column":114},"action":"remove","lines":["\\DB::table('comisiones')->select('periodo')->orderBy(\\DB::raw('periodo*1'),'desc')->first()"],"id":2387},{"start":{"row":67,"column":23},"end":{"row":67,"column":24},"action":"insert","lines":["$"]}],[{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":["r"],"id":2388}],[{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"insert","lines":["e"],"id":2389}],[{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"insert","lines":["q"],"id":2390}],[{"start":{"row":67,"column":23},"end":{"row":67,"column":27},"action":"remove","lines":["$req"],"id":2391},{"start":{"row":67,"column":23},"end":{"row":67,"column":31},"action":"insert","lines":["$request"]}],[{"start":{"row":67,"column":31},"end":{"row":67,"column":33},"action":"insert","lines":["[]"],"id":2392}],[{"start":{"row":67,"column":32},"end":{"row":67,"column":34},"action":"insert","lines":["''"],"id":2393}],[{"start":{"row":67,"column":33},"end":{"row":67,"column":34},"action":"insert","lines":["p"],"id":2394}],[{"start":{"row":67,"column":34},"end":{"row":67,"column":35},"action":"insert","lines":["e"],"id":2395}],[{"start":{"row":67,"column":35},"end":{"row":67,"column":36},"action":"insert","lines":["r"],"id":2396}],[{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["i"],"id":2397}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["o"],"id":2398}],[{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"insert","lines":["d"],"id":2399}],[{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"insert","lines":["o"],"id":2400}],[{"start":{"row":67,"column":12},"end":{"row":67,"column":43},"action":"remove","lines":["$periodo = $request['periodo'];"],"id":2401}],[{"start":{"row":66,"column":12},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":2402},{"start":{"row":67,"column":0},"end":{"row":67,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":66,"column":12},"end":{"row":66,"column":43},"action":"insert","lines":["$periodo = $request['periodo'];"],"id":2403}],[{"start":{"row":67,"column":49},"end":{"row":68,"column":12},"action":"remove","lines":["","            "],"id":2404}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "],"id":2405},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":70,"column":13},"end":{"row":70,"column":14},"action":"insert","lines":["e"],"id":2406}],[{"start":{"row":70,"column":14},"end":{"row":70,"column":15},"action":"insert","lines":["l"],"id":2407}],[{"start":{"row":70,"column":15},"end":{"row":70,"column":16},"action":"insert","lines":["s"],"id":2408}],[{"start":{"row":70,"column":16},"end":{"row":70,"column":17},"action":"insert","lines":["e"],"id":2409}],[{"start":{"row":70,"column":17},"end":{"row":70,"column":18},"action":"insert","lines":["{"],"id":2410}],[{"start":{"row":70,"column":18},"end":{"row":72,"column":13},"action":"insert","lines":["","                ","            }"],"id":2411}],[{"start":{"row":71,"column":16},"end":{"row":72,"column":55},"action":"insert","lines":["$datos = \\DB::select(\"select subdistribuidores.nombre, simcards.tipo, sum(comisiones.valor) valor from comisiones inner join simcards on comisiones.ICC = simcards.ICC INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = ? and comisiones.periodo = ? group by subdistribuidores.nombre, simcards.tipo\",","                     [$user->name, $periodo->periodo]);"],"id":2412}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":33},"action":"remove","lines":["$user->name"],"id":2413},{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":["$"]}],[{"start":{"row":72,"column":23},"end":{"row":72,"column":24},"action":"insert","lines":["r"],"id":2414}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":25},"action":"insert","lines":["e"],"id":2415}],[{"start":{"row":72,"column":25},"end":{"row":72,"column":26},"action":"insert","lines":["q"],"id":2416}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":26},"action":"remove","lines":["$req"],"id":2417},{"start":{"row":72,"column":22},"end":{"row":72,"column":30},"action":"insert","lines":["$request"]}],[{"start":{"row":72,"column":30},"end":{"row":72,"column":32},"action":"insert","lines":["[]"],"id":2418}],[{"start":{"row":72,"column":31},"end":{"row":72,"column":33},"action":"insert","lines":["''"],"id":2419}],[{"start":{"row":72,"column":32},"end":{"row":72,"column":33},"action":"insert","lines":["d"],"id":2420}],[{"start":{"row":72,"column":33},"end":{"row":72,"column":34},"action":"insert","lines":["s"],"id":2421}],[{"start":{"row":72,"column":33},"end":{"row":72,"column":34},"action":"remove","lines":["s"],"id":2422}],[{"start":{"row":72,"column":33},"end":{"row":72,"column":34},"action":"insert","lines":["i"],"id":2423}],[{"start":{"row":72,"column":34},"end":{"row":72,"column":35},"action":"insert","lines":["s"],"id":2424}],[{"start":{"row":72,"column":35},"end":{"row":72,"column":36},"action":"insert","lines":["i"],"id":2425}],[{"start":{"row":72,"column":36},"end":{"row":72,"column":37},"action":"insert","lines":["t"],"id":2426}],[{"start":{"row":72,"column":37},"end":{"row":72,"column":38},"action":"insert","lines":["r"],"id":2427}],[{"start":{"row":72,"column":38},"end":{"row":72,"column":39},"action":"insert","lines":["i"],"id":2428}],[{"start":{"row":72,"column":39},"end":{"row":72,"column":40},"action":"insert","lines":["b"],"id":2429}],[{"start":{"row":72,"column":40},"end":{"row":72,"column":41},"action":"insert","lines":["u"],"id":2430}],[{"start":{"row":72,"column":41},"end":{"row":72,"column":42},"action":"insert","lines":["i"],"id":2431}],[{"start":{"row":72,"column":42},"end":{"row":72,"column":43},"action":"insert","lines":["d"],"id":2432}],[{"start":{"row":72,"column":43},"end":{"row":72,"column":44},"action":"insert","lines":["o"],"id":2433}],[{"start":{"row":72,"column":44},"end":{"row":72,"column":45},"action":"insert","lines":["r"],"id":2434}],[{"start":{"row":69,"column":45},"end":{"row":69,"column":52},"action":"remove","lines":["periodo"],"id":2435}],[{"start":{"row":69,"column":44},"end":{"row":69,"column":45},"action":"remove","lines":[">"],"id":2436}],[{"start":{"row":69,"column":43},"end":{"row":69,"column":44},"action":"remove","lines":["-"],"id":2437}],[{"start":{"row":72,"column":59},"end":{"row":72,"column":66},"action":"remove","lines":["periodo"],"id":2438}],[{"start":{"row":72,"column":58},"end":{"row":72,"column":59},"action":"remove","lines":[">"],"id":2439}],[{"start":{"row":72,"column":57},"end":{"row":72,"column":58},"action":"remove","lines":["-"],"id":2440}],[{"start":{"row":72,"column":35},"end":{"row":72,"column":36},"action":"remove","lines":["i"],"id":2441}],[{"start":{"row":72,"column":32},"end":{"row":72,"column":44},"action":"remove","lines":["distribuidor"],"id":2442},{"start":{"row":72,"column":32},"end":{"row":72,"column":44},"action":"insert","lines":["distribuidor"]}],[{"start":{"row":67,"column":25},"end":{"row":67,"column":37},"action":"remove","lines":["distribuidor"],"id":2443},{"start":{"row":67,"column":25},"end":{"row":67,"column":37},"action":"insert","lines":["distribuidor"]}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":24,"column":11},"end":{"row":24,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1450215573868,"hash":"5b8c32bd0e2a069ab6f84ac2fca97a5ff88b5a1f"}