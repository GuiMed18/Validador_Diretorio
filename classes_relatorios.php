<?php
include('conexao.php');

class VerifArqDisponivel{
    public $diretorio_arquivo;

    function VerificaArquivo($diretorio_arquivo){
        
        $dir = substr($diretorio_arquivo,-4);

        if(file_exists($diretorio_arquivo)){     
            
            if($dir == ".pdf"){
            
           echo "<a href='$diretorio_arquivo' target='_blank'  class='btn font-weight-bold'> <i style='font-size:1.5em;' class='far fa-file-pdf'></i>  <span class='float-right'></a>";
           

            }elseif($dir == ".csv"){
            echo "<a href='$diretorio_arquivo' target='_blank'  class='btn font-weight-bold'> <i style='font-size:1.5em;' class='fas fa-file-csv'></i> <span class='float-right'></a>";
            }

        }else{
            
            if($dir == ".pdf"){
            
                echo "<a href='$diretorio_arquivo' target='_blank'  class='btn font-weight-bold disabled'> <i style='font-size:1.5em;' class='far fa-file-pdf'></i> <span class='float-right'></a>";
               
     
                 }elseif($dir == ".csv"){
                 echo "<a href='$diretorio_arquivo' target='_blank'  class='btn font-weight-bold disabled'> <i style='font-size:1.5em;' class='fas fa-file-csv'></i>  <span class='float-right'></a>";
                 }

        }
    }

}


       





?>