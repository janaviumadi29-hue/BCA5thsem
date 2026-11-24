<html>
    <body>
    <h2>Student Form</h2>

    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $con = mysqli_connect("localhost", "root", "", "college1");

        $name = $_POST['name'];
        $age = $_POST['age'];

        $sql = "INSERT INTO student(name, age)
                VALUES('$name', '$age')";

        if(mysqli_query($con, $sql))
            echo "Record inserted successfully";
        else
            echo "Error inserting record";

        mysqli_close($con);
    }
    ?>
    </body>
    </html>
