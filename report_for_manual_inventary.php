<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
      <header>
        <div class="container">
          <h1>Report For Manual Inventary</h1>
        </div>
      </header>
      <div class="container">
        <section class="main row">
          <div class="col-xs-12 col-md-9">
            <form action="create.php" method="post">
              <div class="form-group">
                <label for="exampleInputdato1">AVIOS</label>
                <input type="text" class="form-control" id="exampleInputDate1" name="avios" placeholder="insert avios (text)">
              </div>
              <div class="form-group">
                <label for="exampleInputFabrics1">FABRICS</label>
                <input type="text" class="form-control" id="exampleInputFabrics1" name="fabrics" placeholder="fabricks (text)">
              </div>
              <div class="form-group">
                <label for="exampleInputExistence1">EXISTENCE</label>
                <input type="text" class="form-control" id="exampleInputExistence1" name="existence" placeholder="existence (number)">
              </div>
              <div class="form-group">
                <label for="exampleInputTickets1">TICKETS</label>
                <input type="text" class="form-control" id="exampleInputTickets1" name="tickets" placeholder="tickets (number)">
              </div>
              <div class="form-group">
                <label for="exampleInputDepartures1">DEPARTURES</label>
                <input type="text" class="form-control" id="exampleInputDepartures1" name="departures" placeholder="departures (number)">
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
          <aside class="col-xs-12 col-md-3">
            <div class="form-group">
              <h1>Tools</h1>
              <h3>Where one door closes, Another opens.</h3>
            </div>
            <div class="form-group">
              <a class="btn btn-primary" href="sales_of_the_week.php" role="button">
                Sales of the week
              </a>
            </div>
            <div class="form-group">
              <a class="btn btn-primary" href="index2.php" role="button">
                To Return
              </a>
            </div>
          </aside>
        </section>
      </div>
  </body>
</html>
