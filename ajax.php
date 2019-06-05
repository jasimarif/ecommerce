<?php

$con=mysqli_connect("localhost","root","","ecommerce");

if(country!="")
{
              $get_type= "Select * FROM `types`";

    $run_type = mysqli_query($con, $get_type);
    while ($row_type=mysqli_fetch_array($run_type))
    {
        $type_id= $row_type['type_id'];
        $type_title= $row_type['type_title'];
        
            echo "<option value='$type_id'> $type_title </option> ";
        
        
    }   
}

?>