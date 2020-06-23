<?php include 'function.php'; checkIfLoggedIn(); ?>
<html>
<?php
$string_contacts = file_get_contents('contacts.json');
$contacts_array = json_decode($string_contacts, true);
$contact = $contacts_array[$_GET['id']];

?>
<?php $title = 'Create New Contact'; include 'includes/head.php'; ?>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">Edit New Contacts</h1>
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-5">
            <div class="card-body">
<form action="/remove_replace.php" method="post">
    <div class="form-group">
        <label>First Name </label>
        <input type="text" class="form-control" name="firstName" placeholder="Enter Name" value="<?php echo $contact['firstname']?>">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control"  name="lastName" placeholder="Enter Last Name" value="<?php echo $contact['lastname']?>">
    </div>
    <div class="form-group">
             <label>Gender</label><br>
             <input type="radio" id="male" name="gender" value="male" <?php if($contact['gender'] == 'male'): ?> checked<?php endif; ?>>
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender" value="female" <?php if($contact['gender'] == 'female'): ?> checked<?php endif; ?>>
             <label for="female">Female</label><br>

    </div>
    <div class="form-group">
             <label>Email</label>
             <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $contact['email']?>">
    </div>
    <div class="form-group">
        <label>Number</label>
        <input type="number" class="form-control" name="number" placeholder="Add a number" value="<?php echo $contact['number']?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
</form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>

</html>