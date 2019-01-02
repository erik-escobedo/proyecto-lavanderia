<!DOCTYPE html>
<html long="en">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Inventory Control</h1>
      </div>
    </header>
    <div class="container">
      <section class="main row">
        <div class="col-xs-12 col-md-9">
          <form action="crear.php" method="post">
            <?php $suma = 0 ?>
            <div class="form-group">
              <label for="exampleInputCode1">CODE</label>
              <input type="number" class="form-control" id="exampleInputCode1" name="code" placeholder="Insert Code" required>
              <small id="codeHelp" class="form-text text-muted">insert the corresponding code</small>
            </div>
            <div class="form-group">
              <label for="exampleInputDesciption1">DESCRIPTION</label>
              <input type="text" class="form-control" id="exampleInputDescription1" name="description" placeholder="insert description" required>
            </div>
            <div class="form-group">
              <label for="exampleInputInventory1">INITIAL INVENTORY PIECES</label>
              <input type="number" class="form-control" id="exampleInputInventory1" name="inventory" placeholder="insert inventory" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPrice1">PIECES PRICE</label>
              <input type="number" class="form-control" id="exampleInputPrice1" name="price" placeholder="insert pieces price" required>
            </div>
            <div class="form-group">
              <label for="exampleInputTickets1">TICKETS</label>
              <input type="number" class="form-control" id="exampleInputTickets1" name="tickets" placeholder="insert tickets" required>
            </div>
            <div class="form-group">
              <label for="exampleInputDepartures1">DEPARTURES</label>
              <input type="number" class="form-control" id="exampleInputDepartures1" name="departures" placeholder="insert departures" required>
            </div>
            <div class="form-group">
              <label for="exampleInputAvailable1">AVAILABLE PIECES</label>
              <input type="number" class="form-control" id="exampleInputAvailable1" name="available" placeholder="available" required>
            </div>
            <div class="form-group">
              <label for="exampleInputTotal1">TOTAL PRICE</label>
              <input type="number" class="form-control" id="exampleInputTotal1" name="total" placeholder="insert total price" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>

        <aside class="col-sx-12 col-md-3">
          <h1>Tools</h1>
          <h3>Where one door closes, Another opens.</h3>
          <div class="form-group">
            <a class="btn btn-primary" href="index3.php" role="button">
              Sales of the week
            </a>
          </div>
          <div class="form-group">
            <a class="btn btn-primary" href="report_for_manual_inventary.php" role="button">
              Report for manual inventory
            </a>
          </div>
          <div class="form-gorup">
            <iframe name="Iframe" src="https://www.yucatan.com.mx/seccion/merida" width="255" height="405"marginwidth="13" marginheight="15" scrolling="yes" align="middle">
            </iframe>
          </div>
        </aside>
      </section>
    </div>

    <!--<footer>
      <div class="container">
        <h1>Alexis cauich</h1>
        <div class="row">
          <div class="color1 col-xs-12 col-sm-6 col-md-3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="color1 col-xs-12 col-sm-6 col-md-3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>

      </div>
    </div>
  </footer>-->


    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
