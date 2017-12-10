
<?php
  class Person {

    function __construct ( $s, $m, $r, $a ) {
      $this->FirstName = $s;
      $this->LastName = $m;
      $this->Birthday = $r;
      $this->Active = $a;
    }
  }

  $students = array (
    new Person(
      "Anne",
      "Appleton",
      "1978/02/04",
      1
    ),
    new Person(
      "Bobbie",
      "Bradshaw",
      "1988/07/14",
      0
    ),
    new Person(
      "Carrie",
      "Cooper",
      "1996/02/04",
      1
    ),
    new Person(
      "Derek",
      "Dickinson",
      "1984/09/02",
      1
    ),
    new Person(
      "Ethel",
      "Erikson",
      "1971/01/04",
      1
    ),
    new Person(
      "Francis",
      "Foster",
      "1983/04/01",
      1
    ),
    new Person(
      "Gary",
      "Gaines",
      "1968/07/01",
      1
    ),
    new Person(
      "Howard",
      "Harrison",
      "1973/08/02",
      1
    ),
    new Person(
      "Ingrid",
      "Ibanez",
      "1991/01/08",
      1
    ),
    new Person(
      "Jacob",
      "Jiminez",
      "1984/05/02",
      1
    ),
    new Person(
      "Kate",
      "Kristov",
      "1987/08/01",
      0
    ),
    new Person(
      "Louis",
      "Lancaster",
      "1978/03/02",
      0
    ),
    new Person(
      "Matt",
      "Michaelson",
      "1972/01/04",
      1
    ),
    new Person(
      "Nancy",
      "Newton",
      "1976/07/03",
      1
    ),
    new Person(
      "Ophelia",
      "Otterson",
      "1984/01/04",
      1
    ),
    new Person(
      "Paul",
      "Pritchard",
      "1989/01/02",
      1
    ),
    new Person(
      "Quincy",
      "Queensland",
      "1958/08/03",
      0
    ),
    new Person(
      "Richard",
      "Ridley",
      "1948/01/01",
      1
    ),
    new Person(
      "Steve",
      "Southard",
      "1965/07/08",
      1
    ),
    new Person(
      "Terrence",
      "Thompson",
      "1989/01/09",
      1
    )
  );

  $instructors = array (
    new Person
    (
      "Kate",
      "Kitty",
      "1987/08/13",
      1
    ),
    new Person
    (
      "Jurnell",
      "Jasmine",
      "1983/01/05",
      1
    ),
    new Person
    (
      "Blaise",
      "Boy",
      "1989/03/02",
      1
    ),
    new Person
    (
      "Terry",
      "TerriblePerson",
      "1975/09/02",
      0
    ),
    new Person
    (
      "Jason",
      "JavaFanBoy",
      "1986/06/16",
      1
    ),
    new Person
    (
      "Zachary",
      "Zohan",
      "2298/01/01",
      1
    )
  );

  function builtSql($table, $arr){
    $str = "DELETE FROM $table;";
    for ($i = 1; $i <= sizeof($arr); $i++)
    {
      $aa = $arr[$i-1]->FirstName;
      $bb = $arr[$i-1]->LastName;
      $cc = $arr[$i-1]->Birthday;
      $dd = $arr[$i-1]->Active;

      $str .= "INSERT INTO $table
        (id, firstname, lastname, birthday, active)
         VALUES ('$i', '$aa', '$bb', '$cc', '$dd');";
    }
    return $str;
  }

  $sql = builtSql("students", $students).builtSql("instructors", $instructors);
  $result = mysqli_multi_query($link, $sql);

  if ($result) {
    echo "Defalut student data created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }

  $link->close();
?>