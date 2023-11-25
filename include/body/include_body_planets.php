 <!-- disegno la tabella dentro al container -->

  <div class="container">
  <br><hr> 
  <div class="row">
   
      <div class="col-md-10 tabellone">
        <table class="table table-fixed table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">PlayerID</th>
              <th scope="col">Name</th>
              <th scope="col">Cords</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <!-- ciclo gli elementi -->
            <?php require_once ('./include/draw_row_table.php');?>
            <!-- fine script php for cicle -->

          </tbody>
        </table>
      </div>  <!--chiude il div col-9 tabellone-->

    </div>  <!---chiude il row--->
    
  </div> <!---chiude il container -->




  <script src="jquery/jquery-1.4.2.js"></script>
  <script src="jquery/ui/jquery.ui.core.js"></script>
  <script src="jquery/ui/jquery.ui.widget.js"></script>
  <script src="jquery/ui/jquery.ui.position.js"></script>
  <script src="jquery/ui/jquery.ui.autocomplete.js"></script>