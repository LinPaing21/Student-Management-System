<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center-">
                <div class="col-9 mt-2">
                    <?php if($students): ?>
                        <table class="table table-striped">
                            <tbody>
                                <?php foreach ($students as $student): ?>
                                    <tr>
                                        <td><a href="/student/<?php echo $student->id ?>"><?php echo $student->name ?></a> </td>
                                        <td>age: <?php echo $student->age ?></td>
                                        <td><?php echo $student->gender ?></td>
                                        <td class="btn-group" role="group">
                                            <a href="/student/<?php echo $student->id ?>" class="btn btn-success btn-sm">Details</a>
                                            <a href="/students/destroy/<?php echo $student->id ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-secondary">There is no students. Create new students!</div>
                    <?php endif ?>
                    <hr>
                    <div>
                        <a href="/students/create" class="btn btn-primary">Create New Student</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>