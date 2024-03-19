<?php
$loremIpsum = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    Repellendus excepturi, exercitationem dolorum eum nihil,
    aliquid aut placeat saepe qui necessitatibus nesciunt
    voluptates libero unde numquam beatae dicta pariatur enim!
    Aliquam?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>