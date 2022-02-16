<?php 
    include 'dbConnect.php'; /* importamos a conexao */
    if(isset($_POST['noteTitle'])){
    $ntNumber = rand(4,100);
    $ntTitle = $_POST['noteTitle'];
    $ntContent = $_POST['noteContent'];
    $stmt = $conn -> prepare("insert into notes (noteNumber, noteTitle, noteContent) values (?,?,?)
    ");
    $stmt -> bindParam(1, $ntNumber);
    $stmt -> bindParam(2,$ntTitle);
    $stmt -> bindParam(3,$ntContent);
    if($stmt->execute()){
        echo "Nota gravada com sucesso";
    }
    } else {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notes</title>
</head>
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">My Notes</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Add Note</a>
            </li>
            <li>
                <a href="viewNotes.php">View Notes</a>
            </li>
        </ul>
    </nav>  
    
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-6">
            
            <form action="index.php" method="POST" role="form">
                 <legend>Add Notes</legend>
            <hr>
                <div class="form-group">
                    <input type="text" class="form-control" id="noteTitle" name="noteTitle" placeholder="Note Title">
                    <textarea name="noteContent" id="noteContent" cols="30" rows="10" placeholder="Note Content"></textarea>
                </div>
            
                
            
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            
        </div>
        <div class="col-md"></div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
