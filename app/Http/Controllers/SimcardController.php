<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SimcardController extends Controller
{
     public function descargarProximasVencer(Request $request)
    {
        if($request->ajax()){
            $user =  \Auth::User();
            $distribuidor = $request['distribuidor'];
            if($distribuidor == null)
                $distribuidor = $user->name;
            if(strpos($distribuidor, 'TODOS') === false){
                 $datos = \DB::select("select users.name, simcards.numero, simcards.fecha_vencimiento, datediff(simcards.fecha_vencimiento,curdate()) diferencia, simcards.tipo from simcards inner join subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre inner join users on subdistribuidores.emailDistribuidor = users.email where simcards.fecha_vencimiento >= ? and simcards.fecha_vencimiento < ? and simcards.fecha_activacion is null and users.name = ? order by simcards.tipo,datediff(simcards.fecha_vencimiento,curdate())",[$request['fecha_inicial'], $request['fecha_final'],$distribuidor]);
            }else{
                $datos = \DB::select("select users.name, simcards.numero, simcards.fecha_vencimiento, datediff(simcards.fecha_vencimiento,curdate()) diferencia, simcards.tipo from simcards inner join subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre inner join users on subdistribuidores.emailDistribuidor = users.email where simcards.fecha_vencimiento >= ? and simcards.fecha_vencimiento < ? and simcards.fecha_activacion is null order by simcards.tipo,datediff(simcards.fecha_vencimiento,curdate())",[$request['fecha_inicial'], $request['fecha_final']]);
            }
            $myfile = fopen("temp/simcardsVencer.csv", "w");
            fwrite($myfile, "DISTRIBUIDOR;TIPO;NUMERO;FECHA VENCIMIENTO;DIAS PARA VENCER\n");
            foreach($datos as $registro){
                fwrite($myfile, utf8_decode($registro->name) . ";" . $registro->tipo . ";" . $registro->numero . ";" . $registro->fecha_vencimiento . ";" . $registro->diferencia . "\n");
            }
            fclose($myfile);
            return 1;
        }
    }
    
    public function descargarLibres(Request $request)
    {
        
        if($request->ajax()){
            $user =  \Auth::User();
            $distribuidor = $request['distribuidor'];
            if($distribuidor == null)
                $distribuidor = $user->name;
            if(strpos($distribuidor, 'TODOS') === false){
                 $datos = \DB::select("select users.name, simcards.numero, simcards.fecha_vencimiento,nombre_empresa,NIT,direccion_empresa,cod_scl,cod_punto,valor,plan,responsable,libres.cedula,libres.fecha_entrega,direccion_responsable,ciudad_responsable,barrio_responsable,libres.telefono,detalle_llamada,fecha_llamada from simcards inner join subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre inner join users on subdistribuidores.emailDistribuidor = users.email inner join libres on simcards.numero = libres.numero where users.name = ? order by simcards.fecha_vencimiento",[$distribuidor]);
            }else{
                $datos = \DB::select("select users.name, simcards.numero, simcards.fecha_vencimiento,nombre_empresa,NIT,direccion_empresa,cod_scl,cod_punto,valor,plan,responsable,libres.cedula,libres.fecha_entrega,direccion_responsable,ciudad_responsable,barrio_responsable,libres.telefono,detalle_llamada,fecha_llamada from simcards inner join subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre inner join users on subdistribuidores.emailDistribuidor = users.email inner join libres on simcards.numero = libres.numero order by users.name,simcards.fecha_vencimiento");
            }
            
            $myfile = fopen("temp/simcardsLibres.csv", "w");
            fwrite($myfile, "DISTRIBUIDOR; NUMERO; FECHA VENCIMIENTO;EMPRESA;NIT;DIRECCION;COD_SCL;COD_PUNTO;VALOR;PLAN;RESPONSABLE;CEDULA;FECHA ENTREGA;DIRECCION RESPONSABLE;CIUDAD RESPONSABLE;BARRIO RESPONSABLE;TELEFONO;DETALLE LLAMADA;FECHA LLAMADA\n");
            foreach($datos as $registro){
                    fwrite($myfile, utf8_decode($registro->name) . ";" . $registro->numero . ";" . $registro->fecha_vencimiento . ";" . utf8_decode($registro->nombre_empresa) . ";" . $registro->NIT . ";" . $registro->direccion_empresa . ";" . $registro->cod_scl . ";" . $registro->cod_punto . ";" . $registro->valor . ";" . preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $registro->plan) . ";" . utf8_decode($registro->responsable) . ";" . $registro->cedula . ";" . $registro->fecha_entrega . ";" . $registro->direccion_responsable. ";" . $registro->ciudad_responsable . ";" . utf8_decode($registro->barrio_responsable) . ";" . $registro->telefono . ";" . $registro->detalle_llamada . ";" . $registro->fecha_llamada  . "\n");
            }
            fclose($myfile);
            return 1;
        }
    }
    public function subirArchivo(Request $request){
        $action = $request['accion'];
        if($action == "ADD"){
            $file = $request->file('image');
            if(!file_exists($file)) {
                die("File not found. Make sure you specified the correct path.");
            }
            try {
                $pdo = \DB::connection()->getPdo();
            } catch (PDOException $e) {
                die("database connection failed: ".$e->getMessage());
            }
            $columns = '(numero,ICC,fecha_vencimiento,tipo,nombreSubdistribuidor)';
            $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." IGNORE INTO TABLE `simcards`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES ". $columns);
            $pdo->exec("delete from simcards_temp");      
            $affectedRows = $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." REPLACE INTO TABLE `simcards_temp`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES ". $columns);
            $pdo->exec("UPDATE simcards_temp SET nombreSubdistribuidor = REPLACE(REPLACE(nombreSubdistribuidor, '\r', ''), '\n', '');");
            $pdo->exec("update simcards inner join simcards_temp on simcards.numero = simcards_temp.numero set simcards.fecha_vencimiento=simcards_temp.fecha_vencimiento,simcards.nombreSubdistribuidor = simcards_temp.nombreSubdistribuidor, simcards.tipo = simcards_temp.tipo, simcards.fecha_activacion = null");                  
            return \Redirect::route('simcard')->with('result' ,$affectedRows); 
        }else if($action == "UPLOAD"){
            $file = $request->file('image');
            if(!file_exists($file)) {
                die("File not found. Make sure you specified the correct path.");
            }
            try {
                $pdo = \DB::connection()->getPdo();
            } catch (PDOException $e) {
                die("database connection failed: ".$e->getMessage());
            }
            $pdo->exec("delete from simcards_temp");
            $columns = '(ICC,numero, fecha_activacion)';
            $affectedRows = $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." REPLACE INTO TABLE `simcards_temp`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES ". $columns);
            $pdo->exec("update simcards inner join simcards_temp on simcards.numero = simcards_temp.numero set simcards.fecha_activacion=simcards_temp.fecha_activacion ");
            $pdo->exec("UPDATE simcards SET fecha_vencimiento =  DATE_ADD(fecha_activacion, INTERVAL 6 MONTH) where fecha_activacion is not null and tipo = 1");
            $pdo->exec("UPDATE simcards SET fecha_vencimiento =  DATE_ADD(fecha_activacion, INTERVAL 1 YEAR) where fecha_activacion is not null and tipo = 2");
            return \Redirect::route('simcard')->with('result' ,$affectedRows); 
        }else if($action == "ADDL"){
            $file = $request->file('image');
            if(!file_exists($file)) {
                die("File not found. Make sure you specified the correct path.");
            }
            try {
                $pdo = \DB::connection()->getPdo();
            } catch (PDOException $e) {
                die("database connection failed: ".$e->getMessage());
            }
            $columns = '(nombreSubdistribuidor,numero, ICC,fecha_activacion, @dummy, @dummy, @dummy,@dummy,@dummy,@dummy,@dummy)';
            $pdo->exec("delete from simcards_temp");
            $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." IGNORE INTO TABLE `simcards`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES". $columns . "
                  SET tipo = 2");
            $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." REPLACE INTO TABLE `simcards_temp`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES". $columns . "
                  SET tipo = 2");
            $pdo->exec("update simcards inner join simcards_temp on simcards.numero = simcards_temp.numero set simcards.fecha_activacion=simcards_temp.fecha_activacion, simcards.nombreSubdistribuidor = simcards_temp.nombreSubdistribuidor");      
            
            $columns = '(@dummy,numero, @dummy,fecha_activacion,NIT, nombre_empresa, direccion_empresa,cod_scl,cod_punto,valor,plan)';
            $affectedRows = $pdo->exec("
                LOAD DATA LOCAL INFILE ".$pdo->quote($file)." REPLACE INTO TABLE `libres`
                  FIELDS TERMINATED BY ".$pdo->quote(";")."
                  LINES TERMINATED BY ".$pdo->quote("\n")."
                  IGNORE 0 LINES ". $columns);
            $pdo->exec("UPDATE simcards SET fecha_vencimiento =  DATE_ADD(fecha_activacion, INTERVAL 1 YEAR) where fecha_activacion is not null and tipo = 2");
            return \Redirect::route('simcard')->with('result' ,$affectedRows); 
        }
        return \Redirect::route('simcard', ['result' => []]);
    }
       
    public function getId(Request $request)
    {
        if($request->ajax()){
            $ICC = \DB::table('simcards')->select('ICC')->orderBy(\DB::raw('ICC*1'))->first();
            $ICC = $ICC->ICC - 1;
            return $ICC;
        }
    }
   public function buscarSimcard(Request $request)
    {
        if($request->ajax()){
            if($request['dato'] != null){
                $simcard = \DB::table('simcards')->join('subdistribuidores','simcards.nombreSubdistribuidor','=','subdistribuidores.nombre')->join('users','subdistribuidores.emailDistribuidor','=','users.email')->where('numero', '=', $request['dato'])->orWhere('ICC', '=', $request['dato'])->get();
            }else{
                $simcard = [];
            }
            return $simcard;
        }
    }
    
    public function asignarPaquete(Request $request)
    {
        if($request->ajax()){
           $sim = \DB::table('simcards')->where('numero', '=', $request['dato'])->orWhere('ICC', '=', $request['dato'])->get();
           if($sim != null){
               if($sim[0]->paquete != 0){
                   $fecha_entrega = date('Y-m-d H:i:s');
                   $sims = \DB::table('simcards')->where('paquete', '=', $sim[0]->paquete)->get();
                   foreach($sims as $simcard){
                       $toModify = $simcard = \App\Simcard::find($simcard->ICC);
                       $toModify->nombreSubdistribuidor = $request['sub'];
                       $toModify->fecha_entrega = $fecha_entrega;
                       $toModify->save();
                   }
                   return 1;
               }else{
                   return -2;
               }
           }else{
               return -1;
           }
        }
    }
    
    public function asignarUnidad(Request $request)
    {
        if($request->ajax()){
           try{
                $sim = \App\Simcard::find($request['ICC']);
                if($sim != null){
                    $fecha_entrega = date('Y-m-d H:i:s');
                    $sim->nombreSubdistribuidor = $request['sub'];
                    $sim->fecha_entrega = $fecha_entrega;
                    $sim->save();
                    return 1;
                }else{
                    return "Sim no encontrada.";
                }
           }catch(Exception $e){
               return $e;
           }
        }
    }
    
    public function buscarSimcardLibre(Request $request)
    {
        if($request->ajax()){
            if($request['dato'] != null){
                $simcard = \DB::table('libres')->where('numero', '=', $request['dato'])->get();
            }else{
                $simcard = [];
            }
            return $simcard;
        }
    }
    
    public function actualizarLibre(Request $request)
    {
        if($request->ajax()){
            if($request['dato'] != null){
                $dato = $request['dato']; 
                $simcard = \App\Libre::find($dato[0]);
                $simcard->responsable = $dato[1];
                $simcard->cedula = $dato[2];
                $simcard->telefono = $dato[3];
                $simcard->ciudad_responsable = $dato[4];
                $simcard->barrio_responsable = $dato[5];
                $simcard->fecha_entrega = $dato[6];
                $simcard->fecha_llamada = $dato[7];
                $simcard->detalle_llamada = $dato[8];
                $simcard->direccion_responsable = $dato[9];
                $simcard->save();
                return 1;
            }else{
                $simcard = [];
            }
            return $simcard;
        }
    }
    public function empaquetar(Request $request){
        if($request->ajax()){
            $datos = $request['datos'];
            $paquete = \DB::table('simcards')->select(\DB::raw('max(paquete) as paquete'))->first();
            foreach($datos as $dato){
                $simcard = \DB::table('simcards')->where('numero', '=',$dato)->first();
                $sim = \App\Simcard::find($simcard->ICC);
                $sim->paquete = $paquete->paquete+1;
                $sim->save();
            }
            return '1';
        }
    }
    
    public function datosSimcard(Request $request){
        if($request->ajax()){
            $user =  \Auth::User();
            $year =  date('Y', time());
            $mesActualLabel = date('M', time());
            $mesAnteriorLabel = date('M', strtotime(date('Y-m')." -1 month"));
            $mes2AnteriorLabel = date('M', strtotime(date('Y-m')." -2month"));
            $mes3AnteriorLabel = date('M', strtotime(date('Y-m')." -3month"));
            $mes4AnteriorLabel = date('M', strtotime(date('Y-m')." -4month"));
            $mesActual = date('m', time());
            $mesAnterior = date('m', strtotime(date('Y-m')." -1 month"));
            $mes2Anterior = date('m', strtotime(date('Y-m')." -2month"));
            $mes3Anterior = date('m', strtotime(date('Y-m')." -3month"));
            $mes4Anterior = date('m', strtotime(date('Y-m')." -4month"));
            
            $labelMeses = [$mes4AnteriorLabel,$mes3AnteriorLabel,$mes2AnteriorLabel, $mesAnteriorLabel,$mesActualLabel];
            $sims = \DB::select("SELECT 
                count(case when Month(sim.fecha_activacion) = ? and Year(sim.fecha_activacion) = ? then numero end) hoyActivas, 
                count( case when Month(sim.fecha_activacion) = ? and Year(sim.fecha_activacion) = ? then numero end) mesAntesActivas, 
                count( case when Month(sim.fecha_activacion) = ? and Year(sim.fecha_activacion) = ? then numero end) mes2AntesActivas, 
                count( case when Month(sim.fecha_activacion) = ? and Year(sim.fecha_activacion) = ? then numero end) mes3AntesActivas, 
                count( case when Month(sim.fecha_activacion) = ? and Year(sim.fecha_activacion) = ? then numero end) mes4AntesActivas, 
                count(case when Month(sim.fecha_vencimiento) = ? and Year(sim.fecha_vencimiento) = ? then numero end) hoyVencidas, 
                count(case when Month(sim.fecha_vencimiento) = ? and Year(sim.fecha_vencimiento) = ? then numero end) mesAntesVencidas,
                count(case when Month(sim.fecha_vencimiento) = ? and Year(sim.fecha_vencimiento) = ? then numero end) mes2AntesVencidas,
                count(case when Month(sim.fecha_vencimiento) = ? and Year(sim.fecha_vencimiento) = ? then numero end) mes3AntesVencidas,
                count(case when Month(sim.fecha_vencimiento) = ? and Year(sim.fecha_vencimiento) = ? then numero end) mes4AntesVencidas
                FROM simcards sim inner join subdistribuidores sub on sim.nombreSubdistribuidor = sub.nombre inner join users u on sub.emailDistribuidor = u.email where u.email = ? and sim.tipo=1",[$mesActual,$year,$mesAnterior,$year,$mes2Anterior,$year,$mes3Anterior,$year,$mes4Anterior,$year,$mesActual,$year,$mesAnterior,$year,$mes2Anterior,$year,$mes3Anterior,$year,$mes4Anterior,$year,$user->email]);
            
            $simsPrepago = [$sims[0]->mes4AntesActivas,$sims[0]->mes3AntesActivas,$sims[0]->mes2AntesActivas,$sims[0]->mesAntesActivas,$sims[0]->hoyActivas,$sims[0]->mes4AntesVencidas,$sims[0]->mes3AntesVencidas,$sims[0]->mes2AntesVencidas,$sims[0]->mesAntesVencidas,$sims[0]->hoyVencidas];
            
            
            
            //*/
            $response = array($simsPrepago, $labelMeses);
            return $response;;
        }
    }
    
    public function buscarPaquete(Request $request)
    {
        if($request->ajax()){
            $colors = [];
            if($request['dato_paquete'] != null){
                $sim = \DB::table('simcards')->where('numero', '=', $request['dato_paquete'])->orWhere('ICC', '=', $request['dato_paquete'])->get();
                if($sim != null){
                    if($sim[0]->paquete != 0){
                        $simcard = \DB::table('simcards')->select(\DB::raw('DATEDIFF(CURDATE(),fecha_vencimiento) as month'),'numero','fecha_activacion')->where('paquete',$sim[0]->paquete)->get();
                    }else{
                        $simcard = [];
                        $months= [];
                    }
                }else{
                    $simcard = [];
                    $months= [];
                }
            }else{
                $simcard = [];
            }
            
            return view('/simcardsPaquete', array('simcards'=>$simcard));
        }
    }
    
    public function datosAsignaciones(Request $request){
        if($request->ajax()){
            $user =  \Auth::User();
            $fecha_inicial = date_create_from_format("Y-m-d",$request['fecha_inicial']);
            $fecha_final = date_create_from_format("Y-m-d", $request['fecha_final']);
            
            if($request['distribuidor'] == null){
                $datos = \DB::select("select simcards.fecha_entrega,subdistribuidores.nombre, simcards.tipo, count(simcards.numero) cantidad from simcards INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = ? and simcards.fecha_entrega > ? and simcards.fecha_entrega < ? group by simcards.fecha_entrega,subdistribuidores.nombre, simcards.tipo",
                     [$user->name, $fecha_inicial, $fecha_final]);
            }else{
                $datos = \DB::select("select simcards.fecha_entrega,subdistribuidores.nombre, simcards.tipo, count(simcards.numero) cantidad from simcards INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = ? and simcards.fecha_entrega > ? and simcards.fecha_entrega < ? group by simcards.fecha_entrega,subdistribuidores.nombre, simcards.tipo",
                     [$request['distribuidor'], $fecha_inicial, $fecha_final]);
            }
            return $datos;
        }
    }
    
    public function asignaciones(Request $request){
        if($request->ajax()){
            $user =  \Auth::User();
            $fecha_inicial = date_create_from_format("Y-m-d",$request['fecha_inicial']);
            $fecha_final = date_create_from_format("Y-m-d", $request['fecha_final']);
            if($user->isAdmin){
                $datos = \DB::select("select simcards.fecha_entrega,subdistribuidores.nombre, simcards.tipo, simcards.numero,simcards.ICC, users.name from simcards INNER JOIN subdistribuidores on simcards.nombreSubdistribuidor = subdistribuidores.nombre INNER JOIN users on subdistribuidores.emailDistribuidor = users.email where users.name = ? and simcards.fecha_entrega >= ? and simcards.fecha_entrega <= ?",
                     [$request['distribuidor'],$fecha_inicial,$fecha_final]);
                $myfile = fopen("temp/asignacionesSimcards.csv", "w");
                $totalPrepago = 0;
                $totalLibre = 0;
                fwrite($myfile, "FECHA ENTREGA;DISTRIBUIDOR;SUBDISTRIBUIDOR;NUMERO;ICC;TIPO\n");
                foreach($datos as $dato){
                    fwrite($myfile, $dato->fecha_entrega . ";" . utf8_decode($dato->name) . ";" . utf8_decode($dato->nombre) . ";" . $dato->numero . ";" . $dato->ICC . ";" . $dato->tipo . "\n");
                    if($dato->tipo == 1){
                        $totalPrepago++;
                    }else{
                        $totalLibre++;
                    }
                }
                fwrite($myfile, "TOTAL LINEAS:," . ($totalPrepago+$totalLibre) . ",\n");
                fwrite($myfile, "TOTAL PREPAGO:," . $totalPrepago . ",\n");
                fwrite($myfile, "TOTAL LIBRE:," . $totalLibre . ",\n");
                fclose($myfile);
                return 1;
            }
        }
    }
}
