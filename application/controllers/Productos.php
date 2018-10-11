<?php
class Productos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("ProductoModel");
        $this->load->library('session');
    }

    public function agregar(){
        $this->load->view("encabezado");
        $this->load->view("productos/agregar");
        $this->load->view("pie");
    }

    public function guardarCambios(){
        $resultado = $this->ProductoModel->guardarCambios(
            $this->input->post("id"),
            $this->input->post("codigo"),
            $this->input->post("descripcion"),
            $this->input->post("precioVenta"),
            $this->input->post("precioCompra"),
            $this->input->post("existencia")
        );
        if($resultado){
            $mensaje = "Producto actualizado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al actualizar el producto";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("productos/");
    }

    public function editar($id){
        $producto = $this->ProductoModel->uno($id);
        if(null === $producto){
            $this->session->set_flashdata(array(
                "mensaje" => "El producto que quieres editar no existe",
                "clase" => "danger",
            ));
            redirect("productos/");
        }
        $this->load->view("encabezado");
        $this->load->view("productos/editar", array("producto" => $producto));
        $this->load->view("pie");
    }

    public function eliminar($id){
        $resultado = $this->ProductoModel->eliminar($id);
        if($resultado){
            $mensaje = "Producto eliminado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al eliminar el producto";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("productos/");
    }

    public function index(){
        
        $this->load->view("encabezado");
        $this->load->view("productos/listar", array(
            "productos" => $this->ProductoModel->todos()
        ));
        $this->load->view("pie");
    }

    public function guardar(){
        $resultado = $this->ProductoModel->nuevo(
                $this->input->post("codigo"),
                $this->input->post("descripcion"),
                $this->input->post("precioVenta"),
                $this->input->post("precioCompra"),
                $this->input->post("existencia")
            );
        if($resultado){
            $mensaje = "Producto guardado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al guardar el producto";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("productos/agregar");
    }
}
?>