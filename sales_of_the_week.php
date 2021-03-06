<!DOCTYPE html>
<html long="en">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <SCRIPT languaje="JavaScript">
    function pulsar() {
      alert("Hola!!");
    }
    </SCRIPT>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Inventory Income</h1>
      </div>
    </header>
      <div class="container">
        <section class="main row">
          <div class="col-xs-12 col-md-10">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Avios</th>
                  <th scope="col">Fabricks</th>
                  <th scope="col">Existence</th>
                  <th scope="col">Tickets</th>
                  <th scope="col">Departures</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $db = new mysqli('127.0.0.1', 'root', 'codigo', 'lavanderia');
                  $sql = "SELECT * FROM manual_inventary";
                  $datos = $db->query($sql);
                  while($dato = $datos->fetch_array()){
                    ?>
                <tr>
                  <th scope="row">
                    <?php echo $dato["id"]; ?>
                    <input type="hidden" name="id" value="<?php echo $dato['id'] ?>"/>
                  </th>
                  <td><?php echo $dato["avios"]; ?></td>
                  <td><?php echo $dato["fabrics"]; ?></td>
                  <td><?php echo $dato["existence"]; ?></td>
                  <td><?php echo $dato["tickets"]; ?></td>
                  <td><?php echo $dato["departures"]; ?></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        <aside class="col-sx-12 col-md-2">
          <h1>Options</h1>
          <div class="form-group">
            <a class="btn btn-primary" href="report_for_manual_inventary.php" role="button">
              To Return
            </a>
          </div>
          <div class="form-group">
            <a href="eliminar.php?id=<?php echo $dato["id"]?>" class="btn btn-primary" role="button">
              Delete Inventory
            </a>
          </div>
        </aside>
        </section>
      </div>
      <div class="row">
        <div class="container">
          <div class="form-group">
            <input type="button" name="button1" value="Total inventory" onclick="pulsar()" class="btn btn-primary" role="button">
          </div>
        </div>
      </div>
  </body>
</html>
