<?php

//array to do works
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



//change status for show the complete the works complete
$status = 'all';//complete, all none
$field = 'complete';//order of fields
$action = 'sort';

if($status != 'complete' && $status != 'all') return ;
//array order
$order = array();

if($status == 'all'){
    $order = array_keys($list);
}else{
    foreach ($list as $key => $item) {
        if($item['complete'] == $status){
            $order[] =  $key;
        }
    }  
}
/*$order2 = [1, 4];
var_dump($order2);
var_dump($order);*/
echo strtotime('07/30/2016');
switch ($action) {
    case 'sort':
       if($field){
            $sort= array();
            foreach ($order as $id ) {
                $sort[$id] = $list[$id][$field];
                // echo "sort[".$id."] = [".$list[$id][$field];
            }
            asort($sort);
            $order = array_keys($sort);
        }
        break;
     case 'week':
        foreach ($order as $key) {
            if(strtotime($list[$key]['due'])> strtotime('+1 week')) {
                // echo implode($order[$key]);
                unset($order[$key]);
            
            }  
        }
        break;
}
    

//show the table

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($order as $id) {
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>';
    if ($list[$id]['complete']) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';
}
echo '</table>';


?>