<?php
$data = json_decode(file_get_contents("dataset.json"), true);

echo "Graduates from Ateneo de Naga:\n\n";
//find everyone who graduated from ateneo de naga 

foreach ($data as $person) {
    if (strtolower(trim($person["hoapt"])) == "ateneo de naga") {

        $full_name = $person["first_name"] . " " .
                     $person["middle_name"] . " " .
                     $person["last_name"];

        echo "Full Name : " . $full_name . "\n";
        echo "Gender    : " . $person["gender"] . "\n";
        echo "DOB       : " . $person["dob"] . "\n";
        echo "Age       : " . $person["age"] . "\n";
        echo "Company   : " . $person["company"] . "\n";
        echo "School    : " . $person["school"] . "\n";
        echo "------------------------------------\n";
    }
}
?>