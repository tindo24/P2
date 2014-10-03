<!Doctype html>

<head>

    <title>xkcd Password Generator</title>
    <meta charset='utf-8'>

<style>

    .container{
        text-align: center;

    }
    .output{
        text-align:center;
        font-size:3rem;
        margin-bottom:25px;
        color:#292933;
        font-family:consolas,courier;
        display:inline-block;
        padding:20px;
        font-weight:300;
        border-style: solid;
        border-width: 5px;
        border-color:#f39c12;

    }
</style>

<?php
/**
 * Created by PhpStorm.
 * User: philipondiege
 * Date: 9/10/14
 * Time: 12:27 PM
 */

$text = file_get_contents('4000common.txt');
$commonArray = explode("\n", $text);
$randIndex = array_rand($commonArray);
$RandNumber= [1,2,3,4,5,6,7,8,9,0];
$SpecialChar= ['!','@','#','$','%','^','~'];
$retNumber;
$retSpecialChar;
/*$commonWords = $commonArray[$randIndex];*/
$countOutPut = $_POST["numberPass"];
$count = 0;




for($x=0; $x<$countOutPut; $x++){

    $commonWords.= $commonArray[array_rand($commonArray)] ." ";

}


if (isset($_POST['add_number'])){

  $retNumber= $RandNumber[array_rand($RandNumber)];


}
if ( isset($_POST['Special_Character'])){

    $retSpecialChar= $SpecialChar[array_rand($SpecialChar)];

}

?>

</head>


<body>

<div class="container">

<h1>xkcd Password Generator</h1>

<p class='output'><?php echo $commonWords.$retNumber.$retSpecialChar; ?> </p>

<form method='Post' Action= 'Hello World.php'>
<label for="numberPass"> # of Words</label>
<input type="number" min="1" max="9" name="numberPass"> <br>
<input type="checkbox" name="add_number" value="Number">
 <label for="add_number">Add Number</label> <br>
<input type="checkbox"  name="Special_Character" value="SpecChar">
<label for="Special_Character"> # Character</label> <br>
<input type="SUBMIT" value="Generate Password" >
</form>


    <p>
        <a href='http://xkcd.com/936/'>Link to xkcd Password Generator</a><br>

        <a href='http://xkcd.com/936/'>
            <img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
        </a>
        <br>
    </p>
</div>






</body>
</html>

