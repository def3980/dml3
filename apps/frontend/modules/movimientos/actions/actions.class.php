<?php

/**
 * movimientos actions.
 * 
 * Ejecutado y creado ~ Martes, 13 Diciembre 2016 17:36:32
 *
 * @package    dml3
 * @subpackage movimientos
 * @author     Oswaldo Rojas <def.3980@gmail.com>
 * @version    Symfony 1.4.20
 */
class movimientosActions extends sfActions {

    /**
     * Ejecuta una accion en el indice(nombre) del controlador
     *
     * @param sfWebRequest $request Recibe un objecto de la peticion
     */
    public function executeIndex(sfWebRequest $request) {
        $str_data = '{"company_token":"ce42ff876a32ed82c338a1e9301e539fa84f7c0d","type_request":"masive","data":[{"id_number":"593998453098","message":"Sr(a). Oswaldo Rojas realizo una compra el dia 16/dic/2016 a las 09:32 por $ 14.85 en SUKASA QUITO. Muchas gracias por su compra."}]}';
        $msg_ws = Singleton::getInstance()->consume_post_web_services($str_data);
        $this->obj = json_decode($msg_ws);
    }

}