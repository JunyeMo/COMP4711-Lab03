<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   

        <?php
       include('Student.php');
       $students = array();
         $first = new Student(); 
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65); 
        $first->add_grade(75);
        $first->add_grade(55);
        $first->add_status('status','Freshman');
        $students['j123'] = $first;
        
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert"; 
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->add_status('status','Junior');
        $students['a456'] = $second;
                
        
        $third = new Student();
        $third->surname = "Mo"; 
        $third->first_name = "Junye"; 
        $third->add_email('home','958840639@qq.com');
        $third->add_email('work1','a_einstein@bcit.ca');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_status('status','Senior');
        $students['c963'] = $third;
        
        
          $fourth = new Student();
        $fourth->surname = "Curry"; 
        $fourth->first_name = "Stephen"; 
        $fourth->add_email('home','qq@qq.com');
        $fourth->add_email('work1','a_einstein@bcit.ca');
        $fourth->add_grade(60);
        $fourth->add_grade(60);
        $fourth->add_grade(60);
        $fourth->add_status('status','Senior');
        $students['d369'] = $fourth;
        
     
        ksort($students);

       foreach($students as $student) echo $student->toString(); 
       
        ?>
    </body>
</html>
