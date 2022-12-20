<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Digital Library</title>
</head>
<body>
    <div class="container p-3">
        <h2 class="mb-3">Диски преподавателя</h2>
        <h2> <?php echo $_SESSION['']; ?> </h2>
        <table class="table mt-3">
            <tr class="table-dark">
                <th>Name</th>
                <th>Token</th>
                <th>Path</th>
                <th>Link</th>
            </tr>
            <?php $disks = $_SESSION['catalog']->disks; ?>
            <?php foreach($disks as $disk)
            { ?>
                <tr class="table-hover" id="<?php echo $disk->name?>">
                    <td><?php echo $disk->name ?></td>
                    <td><?php echo $disk->token ?></td>
                    <td><?php echo $disk->path ?></td>
                    <td>
                        <a onclick="openResource()">Перейти</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>  
</body>
</html>

<script>
    function openResource(){
        window.open('/user/dashboard', '_self');
    }
</script>