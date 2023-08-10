<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center-">
            <div class="col-8 mt-2">
                <?php if($student): ?>
                    <ul class="list-group">
                        <li class="list-group-item">ID: <?php echo $student->id ?></li>
                        <li class="list-group-item">Name: <?php echo $student->name ?></li>
                        <li class="list-group-item">Email: <?php echo $student->email ?></li>
                        <li class="list-group-item">Email: <?php echo $student->gender ?></li>
                        <li class="list-group-item">Email: <?php echo $student->dob ?></li>
                        <li class="list-group-item">Age: <?php echo $student->age?></li>
                    </ul>
                    <div class="btn-group mt-3" role="group" aria-label="Basic mixed styles example">
                        <a href="/students" class="btn btn-success">Home</a>
                        <a href="/students/edit/<?php echo $student->id ?>" class="btn btn-warning">Edit</a>
                        <a href="/students/destroy/<?php echo $student->id ?>" class="btn btn-danger">Delete</a>
                    </div>
                <?php else: ?>
                    <tr class="bg-warning">
                        <td>Student NOT FOUND!!</td>
                    </tr>
                <?php endif ?>
                
            </div>
        </div>
    </div>
</body>
</html>