{"filter":false,"title":"RecargasController.php","tooltip":"/app/Http/Controllers/RecargasController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":34,"column":52},"end":{"row":34,"column":53},"action":"insert","lines":["R"],"id":2587}],[{"start":{"row":107,"column":4},"end":{"row":113,"column":1},"action":"insert","lines":["function days_in_month($month, $year) { ","if(checkdate($month, 31, $year)) return 31; ","if(checkdate($month, 30, $year)) return 30; ","if(checkdate($month, 29, $year)) return 29; ","if(checkdate($month, 28, $year)) return 28; ","return 0; // error ","}"],"id":2588}],[{"start":{"row":108,"column":0},"end":{"row":108,"column":4},"action":"insert","lines":["    "],"id":2589},{"start":{"row":109,"column":0},"end":{"row":109,"column":4},"action":"insert","lines":["    "]},{"start":{"row":110,"column":0},"end":{"row":110,"column":4},"action":"insert","lines":["    "]},{"start":{"row":111,"column":0},"end":{"row":111,"column":4},"action":"insert","lines":["    "]},{"start":{"row":112,"column":0},"end":{"row":112,"column":4},"action":"insert","lines":["    "]},{"start":{"row":113,"column":0},"end":{"row":113,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":108,"column":0},"end":{"row":108,"column":4},"action":"insert","lines":["    "],"id":2590},{"start":{"row":109,"column":0},"end":{"row":109,"column":4},"action":"insert","lines":["    "]},{"start":{"row":110,"column":0},"end":{"row":110,"column":4},"action":"insert","lines":["    "]},{"start":{"row":111,"column":0},"end":{"row":111,"column":4},"action":"insert","lines":["    "]},{"start":{"row":112,"column":0},"end":{"row":112,"column":4},"action":"insert","lines":["    "]},{"start":{"row":113,"column":0},"end":{"row":113,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":113,"column":0},"end":{"row":113,"column":4},"action":"remove","lines":["    "],"id":2591}],[{"start":{"row":33,"column":25},"end":{"row":33,"column":42},"action":"remove","lines":["cal_days_in_month"],"id":2592},{"start":{"row":33,"column":25},"end":{"row":33,"column":38},"action":"insert","lines":["days_in_month"]}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["C"],"id":2593}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["A"],"id":2594}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["L"],"id":2595}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["_"],"id":2596}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["G"],"id":2597}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["R"],"id":2598}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["E"],"id":2599}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["G"],"id":2600}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["O"],"id":2601}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["R"],"id":2602}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["I"],"id":2603}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["A"],"id":2604}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":["N"],"id":2605}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"remove","lines":[","],"id":2606}],[{"start":{"row":107,"column":4},"end":{"row":113,"column":5},"action":"remove","lines":["function days_in_month($month, $year) { ","        if(checkdate($month, 31, $year)) return 31; ","        if(checkdate($month, 30, $year)) return 30; ","        if(checkdate($month, 29, $year)) return 29; ","        if(checkdate($month, 28, $year)) return 28; ","        return 0; // error ","    }"],"id":2607}],[{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":2608},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":4},"end":{"row":32,"column":5},"action":"insert","lines":["function days_in_month($month, $year) { ","        if(checkdate($month, 31, $year)) return 31; ","        if(checkdate($month, 30, $year)) return 30; ","        if(checkdate($month, 29, $year)) return 29; ","        if(checkdate($month, 28, $year)) return 28; ","        return 0; // error ","    }"],"id":2609}],[{"start":{"row":32,"column":5},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":2610},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":41,"column":12},"end":{"row":41,"column":51},"action":"remove","lines":["$totalDias = days_in_month($mes,$anho);"],"id":2611},{"start":{"row":41,"column":12},"end":{"row":45,"column":27},"action":"insert","lines":["if(checkdate($month, 31, $year)) return 31; ","        if(checkdate($month, 30, $year)) return 30; ","        if(checkdate($month, 29, $year)) return 29; ","        if(checkdate($month, 28, $year)) return 28; ","        return 0; // error "]}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "],"id":2612},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":4},"end":{"row":33,"column":4},"action":"remove","lines":["","    function days_in_month($month, $year) { ","        if(checkdate($month, 31, $year)) return 31; ","        if(checkdate($month, 30, $year)) return 30; ","        if(checkdate($month, 29, $year)) return 29; ","        if(checkdate($month, 28, $year)) return 28; ","        return 0; // error ","    }","    "],"id":2613}],[{"start":{"row":33,"column":45},"end":{"row":33,"column":51},"action":"remove","lines":["return"],"id":2614},{"start":{"row":33,"column":45},"end":{"row":33,"column":46},"action":"insert","lines":["$"]}],[{"start":{"row":33,"column":46},"end":{"row":33,"column":47},"action":"insert","lines":["t"],"id":2615}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":["o"],"id":2616}],[{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["t"],"id":2617}],[{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["a"],"id":2618}],[{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["l"],"id":2619}],[{"start":{"row":33,"column":45},"end":{"row":33,"column":51},"action":"remove","lines":["$total"],"id":2620},{"start":{"row":33,"column":45},"end":{"row":33,"column":55},"action":"insert","lines":["$totalDias"]}],[{"start":{"row":33,"column":55},"end":{"row":33,"column":56},"action":"insert","lines":[" "],"id":2621}],[{"start":{"row":33,"column":56},"end":{"row":33,"column":57},"action":"insert","lines":["="],"id":2622}],[{"start":{"row":33,"column":44},"end":{"row":33,"column":45},"action":"insert","lines":["{"],"id":2623}],[{"start":{"row":34,"column":12},"end":{"row":34,"column":13},"action":"insert","lines":["e"],"id":2624}],[{"start":{"row":34,"column":13},"end":{"row":34,"column":14},"action":"insert","lines":["l"],"id":2625}],[{"start":{"row":34,"column":14},"end":{"row":34,"column":15},"action":"insert","lines":["s"],"id":2626}],[{"start":{"row":34,"column":15},"end":{"row":34,"column":16},"action":"insert","lines":["e"],"id":2627}],[{"start":{"row":34,"column":16},"end":{"row":34,"column":17},"action":"insert","lines":[" "],"id":2628}],[{"start":{"row":34,"column":12},"end":{"row":34,"column":13},"action":"insert","lines":["}"],"id":2629}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":57},"action":"remove","lines":["return"],"id":2631}],[{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"remove","lines":[" "],"id":2632}],[{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"insert","lines":[" "],"id":2633}],[{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"remove","lines":[" "],"id":2634}],[{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"insert","lines":["{"],"id":2635}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":52},"action":"insert","lines":[" "],"id":2636}],[{"start":{"row":34,"column":52},"end":{"row":34,"column":64},"action":"insert","lines":["$totalDias ="],"id":2637}],[{"start":{"row":35,"column":12},"end":{"row":35,"column":13},"action":"insert","lines":["}"],"id":2638}],[{"start":{"row":35,"column":13},"end":{"row":35,"column":14},"action":"insert","lines":["e"],"id":2639}],[{"start":{"row":35,"column":14},"end":{"row":35,"column":15},"action":"insert","lines":["l"],"id":2640}],[{"start":{"row":35,"column":15},"end":{"row":35,"column":16},"action":"insert","lines":["s"],"id":2641}],[{"start":{"row":35,"column":16},"end":{"row":35,"column":17},"action":"insert","lines":["e"],"id":2642}],[{"start":{"row":35,"column":17},"end":{"row":35,"column":18},"action":"insert","lines":[" "],"id":2643}],[{"start":{"row":35,"column":50},"end":{"row":35,"column":57},"action":"remove","lines":[" return"],"id":2644},{"start":{"row":35,"column":50},"end":{"row":35,"column":62},"action":"insert","lines":["$totalDias ="]}],[{"start":{"row":36,"column":12},"end":{"row":36,"column":13},"action":"remove","lines":["i"],"id":2645}],[{"start":{"row":36,"column":12},"end":{"row":36,"column":13},"action":"remove","lines":["f"],"id":2646}],[{"start":{"row":36,"column":12},"end":{"row":36,"column":13},"action":"insert","lines":["}"],"id":2647}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["e"],"id":2648}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["l"],"id":2649}],[{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["s"],"id":2650}],[{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":["e"],"id":2651}],[{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"insert","lines":[" "],"id":2652}],[{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"insert","lines":["i"],"id":2653}],[{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"insert","lines":["f"],"id":2654}],[{"start":{"row":36,"column":20},"end":{"row":36,"column":21},"action":"insert","lines":[" "],"id":2655}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":59},"action":"remove","lines":["return "],"id":2657}],[{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"remove","lines":[" "],"id":2658}],[{"start":{"row":36,"column":51},"end":{"row":36,"column":63},"action":"insert","lines":["$totalDias ="],"id":2659}],[{"start":{"row":36,"column":63},"end":{"row":36,"column":64},"action":"insert","lines":[" "],"id":2660}],[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"insert","lines":["}"],"id":2661}],[{"start":{"row":37,"column":13},"end":{"row":37,"column":14},"action":"insert","lines":["e"],"id":2662}],[{"start":{"row":37,"column":14},"end":{"row":37,"column":15},"action":"insert","lines":["l"],"id":2663}],[{"start":{"row":37,"column":15},"end":{"row":37,"column":16},"action":"insert","lines":["s"],"id":2664}],[{"start":{"row":37,"column":16},"end":{"row":37,"column":17},"action":"insert","lines":["e"],"id":2665}],[{"start":{"row":37,"column":17},"end":{"row":37,"column":18},"action":"insert","lines":["{"],"id":2666}],[{"start":{"row":37,"column":18},"end":{"row":37,"column":19},"action":"insert","lines":[" "],"id":2667}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["r"],"id":2668}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["e"],"id":2669}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["t"],"id":2670}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["u"],"id":2671}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["r"],"id":2672}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"remove","lines":["n"],"id":2673}],[{"start":{"row":37,"column":18},"end":{"row":37,"column":19},"action":"remove","lines":[" "],"id":2674}],[{"start":{"row":37,"column":18},"end":{"row":37,"column":30},"action":"insert","lines":["$totalDias ="],"id":2677}],[{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"insert","lines":["}"],"id":2678}],[{"start":{"row":37,"column":34},"end":{"row":37,"column":44},"action":"remove","lines":[" // error "],"id":2679}],[{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"insert","lines":["{"],"id":2680}],[{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"insert","lines":["{"],"id":2681}],[{"start":{"row":33,"column":25},"end":{"row":33,"column":31},"action":"remove","lines":["$month"],"id":2682},{"start":{"row":33,"column":25},"end":{"row":33,"column":29},"action":"insert","lines":["$mes"]}],[{"start":{"row":34,"column":31},"end":{"row":34,"column":37},"action":"remove","lines":["$month"],"id":2683},{"start":{"row":34,"column":31},"end":{"row":34,"column":35},"action":"insert","lines":["$mes"]}],[{"start":{"row":35,"column":31},"end":{"row":35,"column":37},"action":"remove","lines":["$month"],"id":2684},{"start":{"row":35,"column":31},"end":{"row":35,"column":35},"action":"insert","lines":["$mes"]}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":38},"action":"remove","lines":["$month"],"id":2685},{"start":{"row":36,"column":32},"end":{"row":36,"column":36},"action":"insert","lines":["$mes"]}],[{"start":{"row":33,"column":35},"end":{"row":33,"column":40},"action":"remove","lines":["$year"],"id":2686},{"start":{"row":33,"column":35},"end":{"row":33,"column":40},"action":"insert","lines":["$anho"]}],[{"start":{"row":34,"column":41},"end":{"row":34,"column":46},"action":"remove","lines":["$year"],"id":2687},{"start":{"row":34,"column":41},"end":{"row":34,"column":46},"action":"insert","lines":["$anho"]}],[{"start":{"row":35,"column":41},"end":{"row":35,"column":46},"action":"remove","lines":["$year"],"id":2688},{"start":{"row":35,"column":41},"end":{"row":35,"column":46},"action":"insert","lines":["$anho"]}],[{"start":{"row":36,"column":42},"end":{"row":36,"column":47},"action":"remove","lines":["$year"],"id":2689},{"start":{"row":36,"column":42},"end":{"row":36,"column":47},"action":"insert","lines":["$anho"]}],[{"start":{"row":51,"column":76},"end":{"row":51,"column":98},"action":"remove","lines":["-$datos_libre[0]->dias"],"id":2721}],[{"start":{"row":52,"column":80},"end":{"row":52,"column":104},"action":"remove","lines":["-$datos_prepago[0]->dias"],"id":2722}]]},"ace":{"folds":[],"scrolltop":756,"scrollleft":0,"selection":{"start":{"row":54,"column":200},"end":{"row":54,"column":226},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":43,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1450573064210,"hash":"31201660e9399645001eb5155e6a9efbd7aefff7"}