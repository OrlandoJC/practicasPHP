<?php
$list = array();
$list[] = array(
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '06/09/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dishes',
    'priority' => 2,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dust',
    'priority' => 3,
    'due' => null,
    'day' => 5,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Vacuum',
    'priority' => 1,
    'due' => '06/09/2016',
    'day' => 1,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Make Dinner',
    'priority' => 1,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Clean Out Fridge',
    'priority' => 2,
    'due' => '07/30/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => true,
);







$order = array();
foreach ($list as $key => $item) {
    echo $key . '=' . $item['title'] . "<br />\n";
}

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($list as $item) {
    echo '<tr>';
    echo '<td>' . $item['title'] . "</td>\n";
    echo '<td>' . $item['priority'] . "</td>\n";
    echo '<td>' . $item['due'] . "</td>\n";
    echo '<td>';
    if ($item['complete']) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';
}
echo '</table>';


?>