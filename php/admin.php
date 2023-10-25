<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="../media/post/post1.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Noto+Sans:wght@300;400;500&family=Open+Sans:wght@300;400&family=Work+Sans:wght@300;400&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="../collection.css" />


    <title>admin</title>
</head>

<body>
<header>

    <ul class="nav-bar">
        <a href="../index.php" target="_blank"><img src="../media/logo2.png" class="logo"></a>
        <li><a href="../index.php" target="_blank">Home</a></li>
        <li><a href="../collection.php" target="_blank">Collection</a></li>
        <li><a href="../index.php" >Contact</a></li>
        <li><a href="../login.html" target="_blank">Add</a></li>

    </ul>
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>


</header><br><br>

<p style="margin-top: 3vw;">Don't touch anything if you are not an <b>admin.</b>  </p>

<h1>Projects Uploader</h1>

<div class="containerform">

    <form action="adminverwerk.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

        <label>Upload image:</label><br>
        <input type="file" name="image" id="fileToUpload"><br>

        <label>Naam:</label><br>
        <input type="text" name="naam" placeholder="naam.." maxlength="30" required><br>

        <label>P/c:</label><br>
        <input type="text" name="pc" placeholder="pc.." required><br>

        <label>datum:</label><br>
        <input type="text" name="datum" placeholder="datum.." required><br>


        <label>rare:</label><br>
        <input type="text" name="rare" placeholder="how rare.." required><br>

        <label>prijs:</label><br>
        <input type="text" name="prijs" placeholder="prijs.." required><br>



        <input type="submit" value="publish Project">

    </form>
</div>




<div class="place"></div>
<div class="project_container">

    <style>
        .project_container img:hover {
            transform: scale(1.5);
        }

    </style>

    <h1>Uploaded</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'config.php';

    $sql = "SELECT * FROM verzamelaar";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div style="display: flex;  flex-wrap: wrap; justify-content: space-evenly; margin: 5vw;  animation: 1s ease-out 0s 1 slideInFromLeft;">';

        while ($row = $result->fetch_assoc()) {
            echo '<div style="box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.2); border: 1px solid #80828a; padding: 6vh 3vw; flex: 0 0 30%; margin-bottom: 2vw; ">';
            echo "<img style='max-width: 60%; border-radius: 5px;  box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);' class='project-img' src='../media/{$row['image']}' alt='Project Image' />";
            echo "<h3>{$row['naam']}</h3>";
            echo "<p>{$row['pc']}</p>";
            echo "<p >{$row['datum']}</p>";
            echo "<p>{$row['rare']}</p>";
            echo "<p>{$row['prijs']}</p>";
            echo "<p><a href='verwijderpagina.php?id={$row['id']}' style='padding: 7px 13px; border: none; border-radius: 4px; cursor: pointer; background-color: #141414; color: white; text-decoration: none; margin-top: 2vw'> Delete</a></p>";
            echo "<p><a href='updatepagina.php?id={$row['id']}' style='padding: 7px 13px; border: none; border-radius: 4px; cursor: pointer; background-color: #141414; color: white; text-decoration: none; margin-top: 2vw'> Edit</a></p>";
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo 'No data found.';
    }

    $conn->close();

    ?>


</div>
<style>

    /*/////////////Contact /////////////////*/
    form{
        animation: 1s ease-out 0s 1 slideInFromLeft;
    }
    input[type=text],[type=number],[type=email] ,[type=tel] , [type=date],[type=file] , select, textarea {
        width: 70%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-weight: 500;


    }
    input[type="tel"] {
        width: 70%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 20px;
        resize: vertical;
        font-family: 'Open Sans', sans-serif;
        font-weight: 500;

    }

    input[type=submit] {
        background-color: #000000;
        color: white;
        padding: 15px 22px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #5062ae;
        color:white;
        font-family: 'Open Sans', sans-serif;
        font-weight: 500;
        box-shadow: 9px 16px 13px -3px rgba(0,0,0,0.2);
        -webkit-transition: background-color 0.8s ease-out;
        -moz-transition: background-color 0.8s ease-out;
        -o-transition: background-color 0.8s ease-out;
        transition: background-color 0.8s ease-out;
    }

    .containerform {
        border-radius: 5px;
        padding: 30px;
        margin-left: 25%;
        font-family: 'Open Sans', sans-serif;
        font-weight: 500;

    }

    input:invalid ,textarea:invalid {
        border: none;
        outline: 1px solid #4e5e81;
        font-family: 'Open Sans', sans-serif;

    }


    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="tel"]
    input[type="date"]
    input[type="file"]{
        background-color: #f4f6f6;
        border: 1px solid #5b5d63;
    }

    textarea{
        background-color: #f5f7f8;
    }

    input[type="date"] {
        background-color: #f5f7f8;
        border: 1px solid #5b5d63;
    }

    input[type="file"] {
        background-color: #f5f7f8;
        border: 1px solid #5b5d63;
    }

    form{
        padding: auto 2vw;
    }
</style>

</body>

</html>