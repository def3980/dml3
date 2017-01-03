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

    protected
        $data_request = Array();

    /**
     * Ejecuta una accion en el indice(nombre) del controlador
     *
     * @param sfWebRequest $request Recibe un objecto de la peticion
     */
    public function executeIndex(sfWebRequest $request) {
        $this->data_request["email"] = "def.3980@gmail.com";

        $ba_ws = Singleton::getInstance()->consume_post_web_services(json_encode($this->data_request), "bankAccounts");

        $this->obj_ba = $ba_ws;

        $this->data_request["page"] = $request->getParameter('page', 1);
        $this->data_request["maxPerPage"] = 10;

        $bt_ws = Singleton::getInstance()->consume_post_web_services(json_encode($this->data_request), "bankingTransactions");

        $this->obj_bt = $bt_ws;
    }

}