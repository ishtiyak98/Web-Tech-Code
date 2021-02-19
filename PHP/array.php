<?php 
    $student=array("abc", 'def', 'xyx');
    $student2=["abc", 'def', 'xyx'];       #using index
    
    //echo ($student[2]."\n");

    foreach ($student as $value) {
        echo $value."\n";
    }

    $student3=[
                ['18-37927-2', 'Rifat Ishtiyak', 'CSE'],
                ['17-34544-1', 'Nafisa Kamal', 'BBA'],        #2D array
                ['19-23456-3', 'Tony Stark', 'SE']  
            ];
    
    $age=[
        'Peter' => '23',
        'Ben'   => '34',      #associative array
        'Smith' => '26'
        ];

    foreach($age as $v=>$v_value){
        echo"Key : ".$v." Value : ".$v_value."\n";
    }

    $student4=[
                'std1'=>[
                        'ID'=>1,
                        'name'=>'Rifat Ishtiyak',
                        'email'=>'rifat@gmail.com',
                        'dept'=>'CSE'
                ],
                'std2'=>[
                        'ID'=>2,
                        'name'=>'Nafisa Kamal',
                        'email'=>'nafisa@gmail.com',
                        'dept'=>'BBA'
                ],
                'std3'=>[
                        'ID'=>3,
                        'name'=>'Tony Stark',
                        'email'=>'stark@gmail.com',
                        'dept'=>'SE'
                ]
            ];

    echo $student4['std3']['name'];
?>