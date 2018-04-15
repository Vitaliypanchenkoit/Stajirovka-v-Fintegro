<?php

//Функция возвращает многомерный вложенный список заданного массива в формате json
$nav = array(0 => array('id' => '0', 'id_ref' => '0', 'title' => 'root',),
1 => array('id' => '1', 'id_ref' => '0', 'title' => 'Main Item 1',),
2 => array('id' => '2', 'id_ref' => '0', 'title' => 'Main Item 2',),
3 => array('id' => '3', 'id_ref' => '0', 'title' => 'Main Item 3',),
4 => array('id' => '4', 'id_ref' => '0', 'title' => 'Main Item 4',),
5 => array('id' => '5', 'id_ref' => '1', 'title' => 'Sub Item 1',),
6 => array('id' => '6', 'id_ref' => '1', 'title' => 'Sub Item 2',),
7 => array('id' => '7', 'id_ref' => '1', 'title' => 'Sub Item 3',),
8 => array('id' => '8', 'id_ref' => '2', 'title' => 'Sub Item 1',),
9 => array('id' => '9', 'id_ref' => '2', 'title' => 'Sub Item 2',),
10 => array('id' => '10', 'id_ref' => '3', 'title' => 'Sub Item 1',),
11 => array('id' => '11', 'id_ref' => '10', 'title' => 'Sub Item 1',),
12 => array('id' => '12', 'id_ref' => '11', 'title' => 'Sub Item 1',),);


function get_list(int $id_ref, array $nav){
	$list = [];
    foreach ($nav as $item){
        $sub_menu = [];
        if ($item['id_ref'] == $id_ref && $item['id']){
            $sub_menu = get_list ($item['id'], $nav);
            $list[] = ['id' => $item['id'],
				       'title' => $item['title'],
                       'value' => $sub_menu,
                      ];
        }
    }
    return $list;
}

$j = json_encode(get_list(0, $nav));

echo ($j);

//test
$nav = array(0 => array('id' => '0', 'id_ref' => '0', 'title' => 'root',),
1 => array('id' => '1', 'id_ref' => '0', 'title' => 'Main Item 1',),
2 => array('id' => '2', 'id_ref' => '0', 'title' => 'Main Item 2',),
3 => array('id' => '3', 'id_ref' => '0', 'title' => 'Main Item 3',),
4 => array('id' => '4', 'id_ref' => '0', 'title' => 'Main Item 4',),
5 => array('id' => '5', 'id_ref' => '1', 'title' => 'Sub Item 1',),
6 => array('id' => '6', 'id_ref' => '1', 'title' => 'Sub Item 2',),
7 => array('id' => '7', 'id_ref' => '1', 'title' => 'Sub Item 3',),
8 => array('id' => '8', 'id_ref' => '2', 'title' => 'Sub Item 1',),
9 => array('id' => '9', 'id_ref' => '2', 'title' => 'Sub Item 2',),
10 => array('id' => '10', 'id_ref' => '3', 'title' => 'Sub Item 1',),
11 => array('id' => '11', 'id_ref' => '10', 'title' => 'Sub Item 1',),
12 => array('id' => '12', 'id_ref' => '11', 'title' => 'Sub Item 1',),);

function get_menu($item){
	return $item['id_ref'] == 0 && $item['id'] > 0;
}

function get_list_1(int $id_ref, array $nav){
	$list = array_filter($nav, 'get_menu');
    return $list;
}

$j = json_encode(get_list_1(0, $nav));

echo ($j);
