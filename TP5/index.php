<?php
     include('header.php');
     require_once("config\constants.php");
     require_once("config\autoload.php");

     use Models\Cruiser as Cruiser;
     use Models\Battleship as Battleship;
     use Models\Airplane as Airplane;

     $cruiser = new Cruiser(55);
     echo "DONE";
     $battleship = new Battleship(23);
     $airplane = new Airplane(98);

     echo $cruiser->toString();
     //$arr = array();
     /*for($i=0; $i<3; $i++){
          echo $arr[i]->toString();
     }
     */
     
  ?>

     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Title</h2>
               </header>
               <form action="" method="" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">User Name</label>
                         <input type="text" name="" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Password</label>
                         <input type="text" name="" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>
          </div>
     </main>

<?php
     include('footer.php');
?>
