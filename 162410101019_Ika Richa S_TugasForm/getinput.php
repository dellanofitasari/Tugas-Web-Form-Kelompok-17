<!DOCTYPE html>
<html lang= "en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tugas Form Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <?php
        include('koneksi.php');
        $query = mysqli_query($db,"SELECT * FROM user");
    ?>

    <br>
<div class="container">
    <table class="table table-dark">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>

            
        </tr>

       <?php 
        if (mysqli_num_rows($query)>0) {?> 
        <?php
            while ($data = mysqli_fetch_array($query)){
       ?> 

       <tr>
            <td scope="row"> <?php echo $data ["Nama"];?> </td>
            <td scope="row"> <?php echo $data ["Tempat Tanggal Lahir"];?> </td>
            <td scope="row"> <?php echo $data ["Jenis Kelamin"];?> </td>
            <td scope="row"> <?php echo $data ["Alamat"];?> </td>
       </tr>
                <?php }} ?>
    </table>
</div>
</body>
</html>