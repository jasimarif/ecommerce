<html>
    
    <?php
   include("db.php");
        
?>
    
<head>
     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <title> Insert products</title>
     
     
    
    </head>
<body>
    
    
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
    
    <table align="center" width=750px border="2" bgcolor="skyblue" >
        
        <tr align="center" > 
            <td colspan="8"><h2> Insert New Product here </h2> </td>
        
        </tr>
        
        <tr> 
            <td align="right"><b> Product Title: </b></td>
            <td> <input type="text" name="product_title" size="60" required> </td>
             <tr> 
             <td align="right"><b> Product category:</b> </td>
            <td> <select  id="product_cat" name="product_cat" onchange="populate()" required>  
                <option> Select category </option>
                
                <?php 
    $get_cat= "Select * FROM `categories` ";
    $query_cat = mysqli_query($con, $get_cat);
    while ($row_cat=mysqli_fetch_array($query_cat))
    {
        $cat_id= $row_cat['cat_id'];
        $cat_title= $row_cat['cat_title'];
        echo "<option value='$cat_id'> $cat_title </option>" ;
    } ?>
                
                
                </select> </td>
        
            
        </tr>
                  
        <tr> 
            
            <td align="right"> <b>Product type:</b> </td>
             
            <td> <div id="women">
                <select name="product_type" id="product_type" required>
                
                <option value=""> Select type </option>                  
                </select>
                </div>
            </td>
           
            
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
        
        move_uploaded_file($product_image_tmp, "product_images/$product_image");
        
        $insert_product="INSERT into `products` (product_cat,product_type,product_title,product_price,product_desc,product_image,product_keywords) 
        values ('$product_cat','$product_type','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
       
        $insert_pro= mysqli_query($con,$insert_product);
        
        if($insert_pro)
        {
            echo "<script> alert ('The product has been inserted!')</script>";
            echo "<script> window.open('insert_product.php', '_self')</script>";
        }
        
    }
    
    ?>
    
   
    <script type="text/javascript"> 
   function populate()
        {
    var ajax= new XMLHttpRequest();
             ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200)
               
        document.getElementById("women").innerHTML=ajax.responseText;  
        };
        ajax.open('GET', 'ajax.php?type='+document.getElementById("product_cat").value ,true);
        ajax.send();
             
            
        }
    
    </script>
    
    </body>

</html>