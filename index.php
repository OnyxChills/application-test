<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<?php
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
 );
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Test</title>
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Alert</th>
        </tr>
        <?php
        foreach($people as $person) {
        ?>
        <tr>
            <td><?=$person['first_name']?></td>
            <td><?=$person['last_name']?></td>
            <td><?=$person['email']?></td>
            <td><button class="person_alert">Alert</button></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <script type="text/javascript">
        let buttons = document.getElementsByClassName('person_alert');
        for (let button of buttons) {
            button.addEventListener('click', function() {
                let row = button.parentElement.parentElement;

                let first_name = row.children[0].innerText;
                let last_name = row.children[1].innerText;
                let email = row.children[2].innerText;

                alert(`Name: ${first_name} ${last_name}\nEmail: ${email}`);
            });
        }
    </script>
</body>
</html>
