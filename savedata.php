
<?php
            class Student {

                function __construct ( $s, $m, $r, $a ) {
                    $this->FirstName = $s;
                    $this->LastName = $m;
                    $this->Birthday = $r;
                    $this->Active = $a;
                }
            }
echo 'save data now';
            $students = array (
            new Student(
            "Anne",
            "Appleton",
            "1978/02/04",
            1
            ),
            new Student(
            "Bobbie",
                "Bradshaw",
                "1988/07/14",
                0
            ),
            new Student(
              "Carrie",
              "Cooper",
              "1996/02/04",
              1
            ),
            new Student(
              "Derek",
              "Dickinson",
              "1984/09/02",
              1
            ),
            new Student(
              "Ethel",
              "Erikson",
              "1971/01/04",
              1
            ),
            new Student(
              "Francis",
              "Foster",
              "1983/04/01",
              1
            ),
            new Student(
              "Gary",
              "Gaines",
              "1968/07/01",
              1
            ),
            new Student(
              "Howard",
              "Harrison",
              "1973/08/02",
              1
            ),
            new Student(
              "Ingrid",
              "Ibanez",
              "1991/01/08",
              1
            ),
            new Student(
              "Jacob",
              "Jiminez",
              "1984/05/02",
              1
            ),
            new Student(
              "Kate",
              "Kristov",
              "1987/08/01",
              0
            ),
            new Student(
              "Louis",
              "Lancaster",
              "1978/03/02",
              0
            ),
            new Student(
              "Matt",
              "Michaelson",
              "1972/01/04",
              1
            ),
            new Student(
              "Nancy",
              "Newton",
              "1976/07/03",
              1
            ),
            new Student(
              "Ophelia",
              "Otterson",
              "1984/01/04",
              1
            ),
            new Student(
              "Paul",
              "Pritchard",
              "1989/01/02",
              1
            ),
            new Student(
              "Quincy",
              "Queensland",
              "1958/08/03",
              0
            ),
            new Student(
              "Richard",
              "Ridley",
              "1948/01/01",
              1
            ),
            new Student(
              "Steve",
               "Southard",
               "1965/07/08",
               1
            ),
            new Student(
              "Terrence",
              "Thompson",
              "1989/01/09",
              1
           )
            );

            for ($i = 1; $i <= 20; $i++)
            {
            echo $students[$i-1]->Birthday;
            $aa = $students[$i-1]->FirstName;
            $bb = $students[$i-1]->LastName;
            $cc = $students[$i-1]->Birthday;
            $dd = $students[$i-1]->Active;

            $qadd = "INSERT INTO students
                (st_id, st_firstname, st_lastname, st_birthday, st_active)
              
         VALUES ('$i',
              '$aa',
              '$bb',
              '$cc',
              '$dd') ";
            $result = mysqli_query($link, $qadd);
            }
$qadd = "INSERT INTO members
                (id, password, username)
         VALUES ('1', 'test', 'test') ";
$qupdate = "UPDATE members
            SET password =:password,
                username =:username WHERE id = '1'";
$dbc = dbc::instance();
$result = $dbc->prepare("SELECT * from members where id = '1' ");
$rows = $dbc->executeGetRows($result);
if(count($rows))// check the single record exists
{    
 $result = $dbc->prepare($qupdate); // set to update original record
 $result->bindParam(':username', $username, PDO::PARAM_STR);
 $result->bindParam(':password', $password, PDO::PARAM_STR);
}
else $result = $dbc->prepare($qadd); // if not set to add an initial record
$result = $dbc->execute($result); 
include("index.php");
?>