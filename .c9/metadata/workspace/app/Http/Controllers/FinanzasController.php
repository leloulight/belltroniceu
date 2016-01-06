{"filter":false,"title":"FinanzasController.php","tooltip":"/app/Http/Controllers/FinanzasController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":82,"column":19},"end":{"row":84,"column":18},"action":"remove","lines":["lse{","                     ","                 }"],"id":2756}],[{"start":{"row":82,"column":18},"end":{"row":82,"column":19},"action":"remove","lines":["e"],"id":2757}],[{"start":{"row":64,"column":29},"end":{"row":65,"column":64},"action":"remove","lines":["","            return strrpos($request['distribuidor'],'OFICINA') ;"],"id":2758}],[{"start":{"row":64,"column":29},"end":{"row":64,"column":30},"action":"insert","lines":["s"],"id":2759}],[{"start":{"row":64,"column":29},"end":{"row":64,"column":30},"action":"remove","lines":["s"],"id":2760}],[{"start":{"row":70,"column":55},"end":{"row":71,"column":0},"action":"insert","lines":["",""],"id":2761},{"start":{"row":71,"column":0},"end":{"row":71,"column":21},"action":"insert","lines":["                     "]}],[{"start":{"row":71,"column":21},"end":{"row":71,"column":27},"action":"insert","lines":["$admin"],"id":2762}],[{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"remove","lines":["    "],"id":2763}],[{"start":{"row":71,"column":23},"end":{"row":71,"column":24},"action":"insert","lines":[" "],"id":2764}],[{"start":{"row":71,"column":24},"end":{"row":71,"column":25},"action":"insert","lines":["="],"id":2765}],[{"start":{"row":71,"column":25},"end":{"row":71,"column":26},"action":"insert","lines":[" "],"id":2766}],[{"start":{"row":71,"column":26},"end":{"row":71,"column":27},"action":"insert","lines":["f"],"id":2767}],[{"start":{"row":71,"column":27},"end":{"row":71,"column":28},"action":"insert","lines":["a"],"id":2768}],[{"start":{"row":71,"column":28},"end":{"row":71,"column":29},"action":"insert","lines":["l"],"id":2769}],[{"start":{"row":71,"column":29},"end":{"row":71,"column":30},"action":"insert","lines":["s"],"id":2770}],[{"start":{"row":71,"column":30},"end":{"row":71,"column":31},"action":"insert","lines":["e"],"id":2771}],[{"start":{"row":71,"column":31},"end":{"row":71,"column":32},"action":"insert","lines":[";"],"id":2772}],[{"start":{"row":86,"column":5},"end":{"row":87,"column":0},"action":"insert","lines":["",""],"id":2773},{"start":{"row":87,"column":0},"end":{"row":87,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":87,"column":4},"end":{"row":88,"column":0},"action":"insert","lines":["",""],"id":2774},{"start":{"row":88,"column":0},"end":{"row":88,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":88,"column":4},"end":{"row":128,"column":5},"action":"insert","lines":["public function subirArchivo(Request $request){","        $file = $request->file('image');","        if(!file_exists($file)) {","            die(\"File not found. Make sure you specified the correct path.\");","        }","        try {","            $pdo = \\DB::connection()->getPdo();","        } catch (PDOException $e) {","            die(\"database connection failed: \".$e->getMessage());","        }","        $columns = '(telefono, fecha_recarga, valor_recarga)';","        $pdo->exec('SET foreign_key_checks = 0');","        $affectedRows = $pdo->exec(\"","            LOAD DATA LOCAL INFILE \".$pdo->quote($file).\" INTO TABLE `recargas`","              FIELDS TERMINATED BY \".$pdo->quote(\";\").\"","              LINES TERMINATED BY \".$pdo->quote(\"\\n\").\"","              IGNORE 0 LINES \". $columns.\"","              SET ID = NULL\");","              ","        $huerfanas = \\DB::select(\"select recargas.telefono from simcards RIGHT join recargas on simcards.numero = recargas.telefono where simcards.numero is null\");","        $ICC = \\DB::table('simcards')->select('ICC')->orderBy(\\DB::raw('ICC*1'))->first();","        $ICC = $ICC->ICC;","        $fecha_vencimiento = date_add(new \\DateTime(),date_interval_create_from_date_string(\"6 months\"));","        foreach($huerfanas as $huerfana){","            $ICC = $ICC - 1;","            try{","                \\App\\Simcard::create([","                     'numero' => $huerfana->telefono,","                     'ICC' => $ICC,","                     'fecha_vencimiento' => $fecha_vencimiento,","                     'fecha_activacion' =>  null,","                     'nombreSubdistribuidor' => 'SIN ASIGNAR',","                     'tipo' => 1,","                     'paquete' => 0,","                     'fecha_entrega' => null","                     ]);","            }catch(Exception $e){}","        }","        $pdo->exec('SET foreign_key_checks = 1');","        return \\Redirect::route('recargas')->with('result' ,$affectedRows); ","    }"],"id":2775}],[{"start":{"row":107,"column":41},"end":{"row":107,"column":49},"action":"remove","lines":["recargas"],"id":2776},{"start":{"row":107,"column":41},"end":{"row":107,"column":42},"action":"insert","lines":["c"]}],[{"start":{"row":107,"column":42},"end":{"row":107,"column":43},"action":"insert","lines":["o"],"id":2777}],[{"start":{"row":107,"column":43},"end":{"row":107,"column":44},"action":"insert","lines":["m"],"id":2778}],[{"start":{"row":107,"column":44},"end":{"row":107,"column":45},"action":"insert","lines":["i"],"id":2779}],[{"start":{"row":107,"column":45},"end":{"row":107,"column":46},"action":"insert","lines":["s"],"id":2780}],[{"start":{"row":107,"column":46},"end":{"row":107,"column":47},"action":"insert","lines":["i"],"id":2781}],[{"start":{"row":107,"column":47},"end":{"row":107,"column":48},"action":"insert","lines":["o"],"id":2782}],[{"start":{"row":107,"column":48},"end":{"row":107,"column":49},"action":"insert","lines":["n"],"id":2783}],[{"start":{"row":107,"column":49},"end":{"row":107,"column":50},"action":"insert","lines":["e"],"id":2784}],[{"start":{"row":107,"column":50},"end":{"row":107,"column":51},"action":"insert","lines":["s"],"id":2785}],[{"start":{"row":107,"column":86},"end":{"row":107,"column":94},"action":"remove","lines":["recargas"],"id":2786},{"start":{"row":107,"column":86},"end":{"row":107,"column":96},"action":"insert","lines":["comisiones"]}],[{"start":{"row":107,"column":118},"end":{"row":107,"column":126},"action":"remove","lines":["recargas"],"id":2787},{"start":{"row":107,"column":118},"end":{"row":107,"column":128},"action":"insert","lines":["comisiones"]}],[{"start":{"row":98,"column":31},"end":{"row":98,"column":44},"action":"remove","lines":["fecha_recarga"],"id":2788},{"start":{"row":98,"column":31},"end":{"row":98,"column":32},"action":"insert","lines":["p"]}],[{"start":{"row":98,"column":32},"end":{"row":98,"column":33},"action":"insert","lines":["e"],"id":2789}],[{"start":{"row":98,"column":33},"end":{"row":98,"column":34},"action":"insert","lines":["r"],"id":2790}],[{"start":{"row":98,"column":34},"end":{"row":98,"column":35},"action":"insert","lines":["i"],"id":2791}],[{"start":{"row":98,"column":35},"end":{"row":98,"column":36},"action":"insert","lines":["o"],"id":2792}],[{"start":{"row":98,"column":36},"end":{"row":98,"column":37},"action":"insert","lines":["d"],"id":2793}],[{"start":{"row":98,"column":37},"end":{"row":98,"column":38},"action":"insert","lines":["o"],"id":2794}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["_"],"id":2795}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["r"],"id":2796}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["e"],"id":2797}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["c"],"id":2798}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["a"],"id":2799}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["r"],"id":2800}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["g"],"id":2801}],[{"start":{"row":98,"column":45},"end":{"row":98,"column":46},"action":"remove","lines":["a"],"id":2802}],[{"start":{"row":101,"column":70},"end":{"row":101,"column":78},"action":"remove","lines":["recargas"],"id":2803},{"start":{"row":101,"column":70},"end":{"row":101,"column":71},"action":"insert","lines":["c"]}],[{"start":{"row":101,"column":71},"end":{"row":101,"column":72},"action":"insert","lines":["o"],"id":2804}],[{"start":{"row":101,"column":72},"end":{"row":101,"column":73},"action":"insert","lines":["m"],"id":2805}],[{"start":{"row":101,"column":73},"end":{"row":101,"column":74},"action":"insert","lines":["i"],"id":2806}],[{"start":{"row":101,"column":74},"end":{"row":101,"column":75},"action":"insert","lines":["s"],"id":2807}],[{"start":{"row":101,"column":75},"end":{"row":101,"column":76},"action":"insert","lines":["i"],"id":2808}],[{"start":{"row":101,"column":76},"end":{"row":101,"column":77},"action":"insert","lines":["o"],"id":2809}],[{"start":{"row":101,"column":77},"end":{"row":101,"column":78},"action":"insert","lines":["n"],"id":2810}],[{"start":{"row":101,"column":78},"end":{"row":101,"column":79},"action":"insert","lines":["e"],"id":2811}],[{"start":{"row":101,"column":79},"end":{"row":101,"column":80},"action":"insert","lines":["s"],"id":2812}],[{"start":{"row":127,"column":33},"end":{"row":127,"column":41},"action":"remove","lines":["recargas"],"id":2813},{"start":{"row":127,"column":33},"end":{"row":127,"column":34},"action":"insert","lines":["c"]}],[{"start":{"row":127,"column":34},"end":{"row":127,"column":35},"action":"insert","lines":["o"],"id":2814}],[{"start":{"row":127,"column":35},"end":{"row":127,"column":36},"action":"insert","lines":["m"],"id":2815}],[{"start":{"row":127,"column":36},"end":{"row":127,"column":37},"action":"insert","lines":["i"],"id":2816}],[{"start":{"row":127,"column":37},"end":{"row":127,"column":38},"action":"insert","lines":["s"],"id":2817}],[{"start":{"row":127,"column":38},"end":{"row":127,"column":39},"action":"insert","lines":["i"],"id":2818}],[{"start":{"row":127,"column":39},"end":{"row":127,"column":40},"action":"insert","lines":["o"],"id":2819}],[{"start":{"row":127,"column":40},"end":{"row":127,"column":41},"action":"insert","lines":["n"],"id":2820}],[{"start":{"row":127,"column":41},"end":{"row":127,"column":42},"action":"insert","lines":["e"],"id":2821}],[{"start":{"row":127,"column":42},"end":{"row":127,"column":43},"action":"insert","lines":["s"],"id":2822}],[{"start":{"row":29,"column":55},"end":{"row":29,"column":69},"action":"remove","lines":["comisiones.ICC"],"id":2823},{"start":{"row":29,"column":55},"end":{"row":29,"column":74},"action":"insert","lines":["comisiones.telefono"]},{"start":{"row":34,"column":55},"end":{"row":34,"column":69},"action":"remove","lines":["comisiones.ICC"]},{"start":{"row":34,"column":55},"end":{"row":34,"column":74},"action":"insert","lines":["comisiones.telefono"]},{"start":{"row":69,"column":153},"end":{"row":69,"column":167},"action":"remove","lines":["comisiones.ICC"]},{"start":{"row":69,"column":153},"end":{"row":69,"column":172},"action":"insert","lines":["comisiones.telefono"]},{"start":{"row":73,"column":153},"end":{"row":73,"column":167},"action":"remove","lines":["comisiones.ICC"]},{"start":{"row":73,"column":153},"end":{"row":73,"column":172},"action":"insert","lines":["comisiones.telefono"]},{"start":{"row":80,"column":135},"end":{"row":80,"column":149},"action":"remove","lines":["comisiones.ICC"]},{"start":{"row":80,"column":135},"end":{"row":80,"column":154},"action":"insert","lines":["comisiones.telefono"]}],[{"start":{"row":29,"column":77},"end":{"row":29,"column":89},"action":"remove","lines":["simcards.ICC"],"id":2824},{"start":{"row":29,"column":77},"end":{"row":29,"column":92},"action":"insert","lines":["simcards.numero"]},{"start":{"row":34,"column":77},"end":{"row":34,"column":89},"action":"remove","lines":["simcards.ICC"]},{"start":{"row":34,"column":77},"end":{"row":34,"column":92},"action":"insert","lines":["simcards.numero"]},{"start":{"row":69,"column":175},"end":{"row":69,"column":187},"action":"remove","lines":["simcards.ICC"]},{"start":{"row":69,"column":175},"end":{"row":69,"column":190},"action":"insert","lines":["simcards.numero"]},{"start":{"row":73,"column":175},"end":{"row":73,"column":187},"action":"remove","lines":["simcards.ICC"]},{"start":{"row":73,"column":175},"end":{"row":73,"column":190},"action":"insert","lines":["simcards.numero"]},{"start":{"row":80,"column":157},"end":{"row":80,"column":169},"action":"remove","lines":["simcards.ICC"]},{"start":{"row":80,"column":157},"end":{"row":80,"column":172},"action":"insert","lines":["simcards.numero"]}],[{"start":{"row":107,"column":41},"end":{"row":107,"column":42},"action":"insert","lines":["d"],"id":2825}],[{"start":{"row":107,"column":42},"end":{"row":107,"column":43},"action":"insert","lines":["i"],"id":2826}],[{"start":{"row":107,"column":43},"end":{"row":107,"column":44},"action":"insert","lines":["s"],"id":2827}],[{"start":{"row":107,"column":44},"end":{"row":107,"column":45},"action":"insert","lines":["t"],"id":2828}],[{"start":{"row":107,"column":45},"end":{"row":107,"column":46},"action":"insert","lines":["i"],"id":2829}],[{"start":{"row":107,"column":46},"end":{"row":107,"column":47},"action":"insert","lines":["n"],"id":2830}],[{"start":{"row":107,"column":47},"end":{"row":107,"column":48},"action":"insert","lines":["c"],"id":2831}],[{"start":{"row":107,"column":48},"end":{"row":107,"column":49},"action":"insert","lines":["t"],"id":2832}],[{"start":{"row":107,"column":49},"end":{"row":107,"column":50},"action":"insert","lines":["("],"id":2833}],[{"start":{"row":107,"column":69},"end":{"row":107,"column":70},"action":"insert","lines":[")"],"id":2834}],[{"start":{"row":127,"column":33},"end":{"row":127,"column":43},"action":"remove","lines":["comisiones"],"id":2835},{"start":{"row":127,"column":33},"end":{"row":127,"column":34},"action":"insert","lines":["f"]}],[{"start":{"row":127,"column":34},"end":{"row":127,"column":35},"action":"insert","lines":["i"],"id":2836}],[{"start":{"row":127,"column":35},"end":{"row":127,"column":36},"action":"insert","lines":["n"],"id":2837}],[{"start":{"row":127,"column":36},"end":{"row":127,"column":37},"action":"insert","lines":["a"],"id":2838}],[{"start":{"row":127,"column":37},"end":{"row":127,"column":38},"action":"insert","lines":["n"],"id":2839}],[{"start":{"row":127,"column":38},"end":{"row":127,"column":39},"action":"insert","lines":["z"],"id":2840}],[{"start":{"row":127,"column":39},"end":{"row":127,"column":40},"action":"insert","lines":["a"],"id":2841}],[{"start":{"row":127,"column":40},"end":{"row":127,"column":41},"action":"insert","lines":["s"],"id":2842}],[{"start":{"row":128,"column":5},"end":{"row":129,"column":0},"action":"insert","lines":["",""],"id":2843},{"start":{"row":129,"column":0},"end":{"row":129,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":129,"column":4},"end":{"row":130,"column":0},"action":"insert","lines":["",""],"id":2844},{"start":{"row":130,"column":0},"end":{"row":130,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":130,"column":4},"end":{"row":138,"column":5},"action":"insert","lines":["public function borrar(Request $request){","        if($request->ajax()){","            $user =  \\Auth::User();","            if($user->isAdmin){","                 $simcards = \\DB::select(\"delete from recargas\");","                 return 1;","            }   ","        }","    }"],"id":2845}],[{"start":{"row":134,"column":54},"end":{"row":134,"column":62},"action":"remove","lines":["recargas"],"id":2846},{"start":{"row":134,"column":54},"end":{"row":134,"column":55},"action":"insert","lines":["c"]}],[{"start":{"row":134,"column":55},"end":{"row":134,"column":56},"action":"insert","lines":["o"],"id":2847}],[{"start":{"row":134,"column":56},"end":{"row":134,"column":57},"action":"insert","lines":["m"],"id":2848}],[{"start":{"row":134,"column":57},"end":{"row":134,"column":58},"action":"insert","lines":["i"],"id":2849}],[{"start":{"row":134,"column":58},"end":{"row":134,"column":59},"action":"insert","lines":["s"],"id":2850}],[{"start":{"row":134,"column":59},"end":{"row":134,"column":60},"action":"insert","lines":["i"],"id":2851}],[{"start":{"row":134,"column":60},"end":{"row":134,"column":61},"action":"insert","lines":["o"],"id":2852}],[{"start":{"row":134,"column":61},"end":{"row":134,"column":62},"action":"insert","lines":["n"],"id":2853}],[{"start":{"row":134,"column":62},"end":{"row":134,"column":63},"action":"insert","lines":["e"],"id":2854}],[{"start":{"row":134,"column":63},"end":{"row":134,"column":64},"action":"insert","lines":["s"],"id":2855}],[{"start":{"row":134,"column":17},"end":{"row":134,"column":30},"action":"remove","lines":["$simcards = \\"],"id":2856},{"start":{"row":134,"column":17},"end":{"row":134,"column":18},"action":"insert","lines":["\\"]}]]},"ace":{"folds":[],"scrolltop":1778.5,"scrollleft":0,"selection":{"start":{"row":86,"column":5},"end":{"row":86,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":103,"state":"php-qqstring","mode":"ace/mode/php"}},"timestamp":1451483817000,"hash":"22c27cf5af8886337eeb9778a6b1c3927d3a6bed"}