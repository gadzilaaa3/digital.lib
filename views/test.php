<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 id="test">Бам</h1>
    <button onclick="test()">Сюда</button>
</body>
</html>

<script>
    function test(){
        let teachers = <?php echo \App\Requests\Teachers::getForSelector(); ?>;
        let h1 = document.getElementById('test');
        h1.innerText = teachers;
    }
</script>