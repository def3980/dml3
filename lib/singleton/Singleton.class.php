<?php

/**
 * Clase global al cual se puede acceder dentro de cualquier modulo, modelo de clase,
 * modelo de formularios, modelo de filtros y de mas configuraciones del proyecto
 * en Symfony. La clase se autoinstancia gracias al metodo singleton y derivando
 * el acceso a los metodos de esta clase de manera facil y limpia.
 * 
 * Sirvete de agregar, modificar o mejorar los metodos que encuentres en esta clase.
 */

/**
 * Descripcion de la clase Singleton
 *
 * @author Oswaldo Rojas <def.3980@gmail.com>
 * @copyright (c) Viernes, 31 Octubre 2014 10:56:45
 */
class Singleton {

    private static
        $_singleton = NULL
        , $_urlBase = "http://localhost/III_WAP2_DmlServices/api/";

    /**
     * Retorna una instacia de esta clase
     *
     * @return Singleton
     */    
    public static function getInstance() {
        if (!isset(self::$_singleton)):
            self::$_singleton = new Singleton();
        endif;
        return self::$_singleton;
    }

    /**
     * csv_to_array, permite pasar de un archivo a un arreglo asociativo
     * 
     * @param type $filename Ruta y nombre del archivo *.csv Default ''
     * @param type $delimiter Delimitador de cada campo dentro del archivo *.csv
     * 
     * @return array Arreglo asociativo de campos equivalente a su valor
     */
    public function csv_to_array($filename = '', $delimiter = ',') {
        if (!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function consume_post_web_services($str_data) {
        //$resp = file_get_contents(sfConfig::get('sf_docs_dir').'/banking_transactions.json');
        $curl = curl_init();
        curl_setopt_array(
            $curl
            , array(
                CURLOPT_HTTPHEADER => array("Content-type: application/json", "Accept: application/json")
            , CURLOPT_POSTFIELDS => $str_data
            , CURLOPT_RETURNTRANSFER => 1
            , CURLOPT_URL => self::$_urlBase . 'bankingTransactions'
            , CURLOPT_POST => 1
            )
        );
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        $obj = json_decode($resp);

        if ($obj->status == 200) {
            $obj = $obj->wa2;
        }

        return $obj;
    }
}