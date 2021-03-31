<?php
include("navbar.html");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/calendar.css">
  </head>
  <body>
    <div class="calendar">
      <table class="table">
        <thead>
          <tr>
            <th>Calendario</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Solicitante</th>
            <th scope="col">fecha programada</th>
            <th scope="col">Servicio</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>51</td>
            <td>Otto Martinez</td>
            <td>11/04/2021</td>
            <td>Poda en propiedad privada</td>
            <td><span class="espera">En espera</span></td>
            <td>Modificar</td>
          </tr>
          <tr>
            <td>51</td>
            <td>Otto Martinez</td>
            <td>11/04/2021</td>
            <td>Poda en propiedad privada</td>
            <td><span class="proceso">En proceso</span></td>
            <td>Modificar</td>
          </tr>
          <tr>
            <td>51</td>
            <td>Otto Martinez</td>
            <td>11/04/2021</td>
            <td>Poda en propiedad privada</td>
            <td><span class="terminado">Terminado</span></td>
            <td>Modificar</td>
          </tr>
        </tbody>
    </table>
    </div>
  </body>
</html>
