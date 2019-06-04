<?php
include("db.php");
$con=mysqli_connect("localhost","root","","ecommerce");
$cat=$_GET['type'];
if($cat=='2')
{
$query="SELECT * FROM women";
$run_query=mysqli_query($con,$query);

echo "<select name='product_type'>";
echo "<option> Select type</option>";
while($row_query=mysqli_fetch_array($run_query))
{
    $women_id=$row_query['id'];
    $women_type=$row_query['type'];
echo "<option>"; echo $women_type ;  echo "</option>";
}}
echo "</select>";

if($cat=='1')
{
$query="SELECT * FROM types";
$run_query=mysqli_query($con,$query);

echo "<select name='product_type'>";
echo "<option> Select type</option>";
while($row_query=mysqli_fetch_array($run_query))
{
    $men_id=$row_query['id'];
    $men_type=$row_query['type_title'];
echo "<option>"; echo $men_type ;  echo "</option>";
}}
echo "</select>";

?>