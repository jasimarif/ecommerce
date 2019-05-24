<html>
    
    <?php

   include("db.php");
        
?>
    
<head>
    
    <title> Insert products</title>
    
    </head>
<body>
    
    
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
    
    <table align="center" width=750px border="2" bgcolor="skyblue" >
        
        <tr align="center" > 
            <td colspan="8"><h2> Insert New Post here </h2> </td>
        
        </tr>
        
        <tr> 
            <td align="right"><b> Product Title: </b></td>
            <td> <input type="text" name="product_title" size="60" required> </td>
        <tr> 
             <td align="right"> <b>Product type:</b> </td>
            <td> <select name="product_type" id="product_type" required>
                <option> Men </option>
                <option> Women </option>
                <option> Kids </option>
                <option> New Arrival </option>
                
                </select>
            
            </td>
        
            
        </tr>
            
        
         <tr> 
             <td align="right"><b> Product Category:</b> </td>
            <td> <select  name="product_cat" required>  
                <option> Select a category </option>
                
                <?php 
    $get_men= "Select * FROM `men` ";

    $query_men = mysqli_query($con, $get_men);

    while ($row_men=mysqli_fetch_array($query_men))
    {
        $men_id= $row_men['id'];
        $men_type= $row_men['type'];

        echo "<option value='id'> $men_type </option>" ;
    } ?>
                
                
                </select> </td>
        
            
        </tr>
         
         <tr> 
             <td align="right"><b> Product Image: </b></td>
            <td> <input type="file" name="product_image" required> </td>
        
            
        </tr>
         <tr> 
             <td align="right"><b> Product Description: </b></td>
             <td> <textarea cols="20" rows="10" name="product_desc">   </textarea> </td>
        
            
        </tr>
        <tr> 
            <td align="right"> <b>Product Price: </b></td>
            <td> <input type="text" name="product_price" required> </td>
        
            
        </tr>
         <tr> 
            <td align="right"> <b>Product Keywords: </b></td>
            <td> <input type="text" name="product_keywords" size="50" required> </td>
        
            
        </tr>
         <tr align="center"> 
            
            <td colspan="8"> <input type="submit" name="insert_post" value="Insert items"> </td>
        
            
        </tr>
        
        
        </table>
    
    </form>
    
    
    <?php 
    
    if(isset($_POST['insert_post']))
    {
        
        $product_cat = $_POST['product_cat'];
        $product_type = $_POST['product_type'];
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
       
        $product_keywords = $_POST['product_keywords'];      
       
         $product_image = $_FILES['product_image'] ['name'];
         $product_image_tmp = $_FILES['product_image']['tmp_name'];
        
       echo $insert_query="INSERT into `products` ('product_cat','product_type','product_title','product_price','product_desc','product_image','product_keywords') 
        values ('$product_cat','$product_type','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        

    }
    
    
    
    ?>
    
    
    
    
    </body>

</html>
