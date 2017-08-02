<?php

class Conection
{
   private $db;
   private $total_consultas;
   
   public function Conection()
   {
       $this->db = mysqli_connect('localhost', 'solar','solar', 'solar')
               or die(mysqli_connect_error());
       return $this->db;
   }
   
    public function consulta($consulta)
    { 
        $this->total_consultas++; 
        $resultado = mysqli_query($this->db, $consulta);
        if(!$resultado)
        { 
          die ('MySQL Error: ' . mysqli_error($this->db));
        }
        return $resultado;
    }
    
    public function fetch_array($consulta)
    {
      return mysqli_fetch_array($consulta);
    }
    
    public function num_rows($consulta){
        return mysqli_num_rows($consulta);
    }

    public function getTotalConsultas(){
        return $this->total_consultas; 
    }
}

?>
