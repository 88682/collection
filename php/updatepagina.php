<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $newNaam = $_POST['naam'];
            $newPC = $_POST['pc'];
            $newDatum = $_POST['datum'];
            $newRare = $_POST['rare'];
            $newPrijs = $_POST['prijs'];


            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageTmpName = $_FILES['image']['tmp_name'];
                $imageFileName = $_FILES['image']['name'];

                $uploadPath = '../media' . $imageFileName;
                if (move_uploaded_file($imageTmpName, $uploadPath)) {
                    // File uploaded successfully
                } else {
                    throw new Exception("Error uploading file.");
                }
            }

            $updateSql = "UPDATE verzamelaar SET naam = ?, pc = ?, datum = ?, rare = ?, prijs = ?, image = ? WHERE id = ?";
            $stmt = $conn->prepare($updateSql);
            $stmt->bind_param("ssssssi", $newNaam, $newPC, $newDatum, $newRare, $newPrijs, $imageFileName, $id);

            if ($stmt->execute()) {
                echo "Project updated successfully.";
            } else {
                echo "Error updating project: " . $stmt->error;
            }

            $stmt->close();
        } catch (Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    } else {
        $sql = "SELECT * FROM verzamelaar WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentNaam = $row['naam'];
            $currentPC = $row['pc'];
            $currentDatum = $row['datum'];
            $currentRare = $row['rare'];
            $currentPrijs = $row['prijs'];
            $currentImage = $row['image'];
            ?>

            <!DOCTYPE html>
            <html lang="nl-NL">
            <head></head>
            <body>
            <header></header>
            <h1>Edit Project</h1>
            <div class="containerform">
                <form action="updatepagina.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                    <label>Upload image:</label><br>
                    <input type="file" name="image" id="fileToUpload"><br>
                    <label>Naam:</label><br>
                    <input type="text" name="naam" value="<?php echo $currentNaam; ?>" maxlength="30"><br>
                    <label>P/c:</label><br>
                    <input type="text" name="pc" value="<?php echo $currentPC; ?>"><br>
                    <label>Datum:</label><br>
                    <input type="text" name="datum" value="<?php echo $currentDatum; ?>" placeholder="Made on.."><br>
                    <label>Rare:</label><br>
                    <input type="text" name="rare" value="<?php echo $currentRare; ?>" maxlength="30"><br>
                    <label>Prijs:</label><br>
                    <input type="text" name="prijs" value="<?php echo $currentPrijs; ?>" maxlength="30"><br>
                    <input type="submit" value="Update Project">
                </form>
            </div>
            <footer id="footer"></footer>
            </body>
            </html>

            <?php
        } else {
            echo "Project not found.";
        }

        $stmt->close();
    }
}

$conn->close();
?>


<style>


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