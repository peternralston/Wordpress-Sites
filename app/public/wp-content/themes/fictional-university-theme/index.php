<?php
  function greet($name, $color) {
    echo "<p>Hi, my name is $name and my favorite color is $color.</P>";
  }

  greet('John', 'green');
  greet('Jane', 'black');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>