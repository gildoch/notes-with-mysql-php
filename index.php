<?php include 'dbConnect.php'; /* importamos a conexao */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notes</title>
</head>
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">Title</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Link</a>
            </li>
        </ul>
    </nav>
    
    
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-6">
            
            <form action="" method="POST" role="form">
                 <legend>My Notes</legend>
            
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