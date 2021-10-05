<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 20/09/2021
 * Time: 9:34 CH
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
    </style>
    <title>Giải phương trình bậc 2</title>
</head>
<body>
<form method="post" action="index.php">
    <h3>Giải phương trình bậc 2: ax<sup>2</sup> + bx + c = 0</h3>
    Nhập các hệ số:
    a = <input type="number" name="a" size="5" placeholder="Nhập a" >
    b = <input type="number" name="b" size="5" placeholder="Nhập b" >
    c = <input type="number" name="c" size="5" placeholder="Nhập c" >
    <input type="submit" name="solve" value="Giải phương trình" >

</form>
<br/> <br/>
<?php

    $a = 0;
    $b = 0;
    $c = 0;
    $result ="";
   if(isset($_POST['solve'])){
       //lấy tham số a, b, c
       $a = isset($_POST['a']) ? $_POST['a'] : '';
       $b = isset($_POST['b']) ? $_POST['b'] : '';
       $c = isset($_POST['c']) ? $_POST['c'] : '';
   }
    if($a==0){
        if ($b==0){
            //phương trình vô nghiệm;
            $result = "Phương trình vô nghiệm !!!";
        }else{
            //phương trình có nghiệm
            $result = "Phương trình có nghiệm x= ".(-$c/$b);
        }
    }else{
        $detal = pow($b,2) - 4*$a*$c;
        if($detal>0){
            $x1 = (-$b -sqrt($detal))/(2*$a);
            $x2 = (-$b +sqrt($detal))/(2*$a);
            $result = "Phương trình có 2 nghiệm phân biệt x1 = $x1, x2 = $x2 ";
        }
        elseif ($detal == 0){
            $x = (-$b)/(2*$a);
            $result = "Phương trình có nghiệm kép x1 = x2 = $x";
        }
        else{
            $result = "Phương trình vô nghiệm";
        }
    }

?>
<h3>Kết quả: <?php echo $result ?></h3>
</body>
</html>
