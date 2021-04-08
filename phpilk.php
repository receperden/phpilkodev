<!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
  #tablo td, #tablo th {
  border: 1px solid rgb(235, 222, 222);
  padding: 6px;}
  #tablo th {
  padding-bottom: 12px;
  text-align: left;
  background-color: #5ad2f7;
  color: white;
}
     </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $isim1="Recep Erden";
        $uni="Aydın Adnan Menderes" ;
        $no="206001046";
        




        ?>
        <table id="tablo">
            <tr>
              <th>Üniversite</th>
              <th>İsim</th>
              <th>No</th>
            </tr>
            <tr>
              <td><?php echo $uni; ?></td>
              <td><?php echo $isim1; ?></td>
              <td><?php echo $no; ?></td>
            </tr>
          </table>
        
    </body>
    </html>