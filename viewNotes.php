<?php 
    include 'dbConnect.php'; /* importamos a conexao */ 
    $stmt = $conn->prepare('select * from notes'); /*preparamos a query antes de exeutar, isso evite sql injection*/
	$stmt->execute(); /*execitamos a query*/
	$notas=$stmt->fetchAll(PDO::FETCH_OBJ); /*extraimos o resultset para array de objectos*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>View Notes</title>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">My Notes</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="index.php">Add Note</a>
            </li>
            <li>
                <a href="#">View Notes</a>
            </li>
        </ul>
    </nav>>

    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-6">
            <h1 class="myNotesTitle">My Notes</h1>
            
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Note Title</th>
                        <th>Note Content</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($notas as $a){ ?>
			        <tr>
				         <td><?php echo $a->noteTitle; ?></td>
                         <td><?php echo $a->notecontent; ?></td>
                         <td><button type="submit" class="btn btn-primary">EDIT</button></td>
                         <td><button type="submit" class="btn btn-primary">DELETE</button></td>
			        </tr>
		            <?php } ?>
                </tbody>
            </table>
            
        </div>
        <div class="col-md"></div>
    </div>
</body>
</html>