<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projeto php | Fundamentos</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><strong>VB</strong> - <i>Coding</i></span>
    </div>
</nav>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome do Curso</th>
            <th scope="col">Carga Horária</th>
            <th scope="col">Versão</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (courses() as $course) : ?>
        <?php if (!$course["status"]){
            continue;
            }?>
        <tr>
            <td><?= $course[Course_name]?></td>
            <td><?= workload($course[Workload])?></td>
            <td><?= $course[Tool_version]?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>