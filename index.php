<?php include 'function.php'; checkIfLoggedIn(); ?>
<html lang="en">
<?php $title = 'Contacts Home'; include 'includes/head.php'; ?>
    <body>

        <?php include 'includes/header.php'; ?>
        
        <main>
            <div class="container">
                <div class = "row ">
                    <div class="col">
                        <h1 class="title mb-5 mt-5">Contacts</h1>

                        <button type="button" class="btn btn-success mb-3"  id="btn"><a href="new_contact.php" class="new_cnt">New Contact</a></button>
<?php
$string_contacts = file_get_contents('contacts.json');
$contacts_array = json_decode($string_contacts, true);
?>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card-deck">
                    <?php foreach($contacts_array as $key => $contact): ?>
                        <div class="card mb-4 shadow" >
                            <div class="card-body">
                           <h4 class="mb-1">
                                 <?php echo $contact['firstname']; ?>
                                 <?php echo $contact['lastname'];?>
                           </h4>
                               <img src="<?php echo $contact['gender'];?>.jpg" style="max-width: 45px; max-height: 45px; float:right;"><br>
                                <i class="fas fa-at mr-1"></i><?php echo $contact['email'];?><br>
                                <i class="fas fa-phone mr-1"></i><?php echo $contact['number'];?>

                            </div>
                            <div class="card-footer">
                                <a href="edit_contact.php?id=<?php echo $key;?>" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
                                <a href="delete.php?id=<?php echo $key;?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
