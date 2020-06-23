<?php include 'function.php'; checkIfLoggedIn(); ?>
<html>
<?php $title = 'Create New Contact'; include 'includes/head.php'; ?>
<body>

<?php include 'includes/header.php'; ?>



<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">Add New Contacts</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-5">
                <div class="card-body">
                    <form action="/process-create-user.php" method="post">
                        <div class="form-group">
                            <label>First Name </label>
                            <input type="text" class="form-control" name="firstName" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control"  name="lastName" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>Number</label>
                            <input type="tel" class="form-control" name="number" placeholder="Add a number">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>

</body>

</html>