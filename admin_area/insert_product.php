<html>
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
            <td> <input type="text" name="product_title"> </td>
        
            
        </tr>
         <tr> 
             <td align="right"><b> Product Category:</b> </td>
            <td> <select>  
                <option> Top Picks </option>
                <option> Unstitched </option>
                <option> Kurta Shalwar </option>
                <option> Waistcoat </option>
                <option>  </option>
                
                
                </select> </td>
        
            
        </tr>
         <tr> 
             <td align="right"> <b>Product Brand:</b> </td>
            <td> <input type="text" name="product_title"> </td>
        
            
        </tr>
         <tr> 
             <td align="right"><b> Product Image: </b></td>
            <td> <input type="text" name="product_title"> </td>
        
            
        </tr>
         <tr> 
             <td align="right"><b> Product Description: </b></td>
            <td> <input type="text" name="product_title"> </td>
        
            
        </tr>
         <tr> 
            <td align="right"> <b>Product Keywords: </b></td>
            <td> <input type="text" name="product_title"> </td>
        
            
        </tr>
         <tr align="center"> 
            
            <td colspan="8"> <input type="submit" name="insert_post" value="Insert items"> </td>
        
            
        </tr>
        
        
        </table>
    
    </form>
    
    </body>

</html>