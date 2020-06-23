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
                        <table class="table">
                            <thead>
                                <tr class ='table-active'>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($contacts_array as  $key => $contact): ?>
                                <tr>
                                    <td><?php echo $contact['firstname']; ?></td>
                                    <td><?php echo $contact['lastname']; ?></td>
                                    <td><?php echo $contact['email']; ?></td>
                                    <td><?php echo $contact['number']; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="edit_contact.php?id=<?php echo $key; ?>"  >Edit</a>
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $key; ?>"  >Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
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
