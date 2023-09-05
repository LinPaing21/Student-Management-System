<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="column-8 mt-2">
                <h1 class="h3 text-center">Edit Student Data</h1>
                <hr>

                <?php if($student): ?>
                    <!--form for data to create-->
                    <form action="/students/update" method="POST">
                        <input type="hidden" value="<?php echo $student->id ?>" name="id">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo $student->name ?>" name="name" class="form-control" placeholder="Enter student name">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $student->email ?>" name="email" class="form-control" placeholder="Enter student's email address">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                                <option value="" disabled>Choose student's gender</option>
                                <option value="male" <?php if($student->gender == "male") echo "selected" ?>>Male</option>
                                <option value="female" <?php if($student->gender == "female") echo "selected" ?>>Female</option>
                                <option value="other" <?php if($student->gender == "other") echo "selected" ?>>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" value="<?php echo $student->dob ?>" name="dob" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" value="<?php echo $student->age ?>" name="age" class="form-control" placeholder="Enter student's age">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                        <a href="/student/<?php echo $student->id ?>" class="btn btn-danger mt-3">Cancel</a>

                    </form>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <p class="h3">:-( Student NOT FOUND!!!</p>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>
