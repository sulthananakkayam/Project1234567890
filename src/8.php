 <?php 
//Function to get random color
function random_color() {
return "#" . substr(md5(rand()), 0, 6);
}
?>