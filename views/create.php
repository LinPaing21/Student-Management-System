<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="column-8 mt-2">
                <h1 class="h3 text-center">Create New Student</h1>

                <!--form for data to create-->
                <form action="/students/store" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter student name">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter student's email address">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="" selected disabled>Choose student's gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter student's age">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                    <a href="/students" class="btn btn-danger mt-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>