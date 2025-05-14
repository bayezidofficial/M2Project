<?php

// Initialize contact variables
$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";

while (true) {
    echo "\n--- Contact Management App ---\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";
    $choice = trim(fgets(STDIN));

    if ($choice === "1") {
        if ($contact1_name !== "" && $contact2_name !== "") {
            echo "\n⚠️ You can only add up to two contacts.\n";
            continue;
        }

        echo "Enter Name: ";
        $name = trim(fgets(STDIN));

        echo "Enter Phone Number: ";
        $phone = trim(fgets(STDIN));

        if ($contact1_name === "") {
            $contact1_name = $name;
            $contact1_phone = $phone;
            echo "\n✅ Contact 1 added successfully.\n";
        } elseif ($contact2_name === "") {
            $contact2_name = $name;
            $contact2_phone = $phone;
            echo "\n✅ Contact 2 added successfully.\n";
        }

    } elseif ($choice === "2") {
        echo "\n--- Saved Contacts ---\n";
        if ($contact1_name !== "") {
            echo "1. $contact1_name - $contact1_phone\n";
        }
        if ($contact2_name !== "") {
            echo "2. $contact2_name - $contact2_phone\n";
        }
        if ($contact1_name === "" && $contact2_name === "") {
            echo "No contacts saved.\n";
        }

    } elseif ($choice === "3") {
        echo "Exiting app. Goodbye!\n";
        break;

    } else {
        echo "Invalid option. Please choose 1, 2, or 3.\n";
    }
}
