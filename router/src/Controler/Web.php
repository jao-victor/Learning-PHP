<?php

namespace Source\Controler;


class Web
{

  public function home($data)
      {
          echo "<h1>Home</h1>";
          var_dump($data);
      }

  public function contato($data)
      {
          echo "<h1>Contato</h1>";

      }
  public function blog($data){

    echo "<h1>BLOG</h1>";

  }

  public function post($data){

    echo "<h1>ARTICLE</h1>";

  }

  public function category($data){

    echo "<h1>Categoria</h1>";

  }



   public function error($data){

     echo "<h1>ERRO {$data["errcode"]}</h1>";

   }


}

?>
