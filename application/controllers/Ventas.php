<?php
class Ventas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("VentaModel");
        $this->load->library("session");
    }
    public function index(){
        $ventasRealizadas = $this->VentaModel->todas();
        $datos = array("ventas" => $ventasRealizadas);

        $this->load->view("encabezado");
        $this->load->view("ventas/todas", $datos);
        $this->load->view("pie");
    }

    public function detalle($id){
        $detallesDeVenta = $this->VentaModel->porId($id);
        # Por si no existe la venta...
        if($detallesDeVenta->detalles === null){
            $this->session->set_flashdata(array(
                "mensaje" => "Los detalles de la venta no se pueden ver porque no existe una venta con ese ID",
                "clase" => "warning",
            ));
            redirect("ventas/");
        }
        $datos = array("venta" => $detallesDeVenta);
        $this->load->view("encabezado");
        $this->load->view("ventas/detalle", $datos);
        $this->load->view("pie");
    }

    public function eliminar($id){
        $resultado = $this->VentaModel->eliminar($id);
        if($resultado){
            $mensaje = "Venta eliminada";
            $clase = "success";
        }else{
            $mensaje = "Error al eliminar la venta";
            $clase = "warning";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("ventas/");
    }
}
?>