<?php
    include_once '../Model/crud.php';
    include_once '../Controller/crudC.php';

    $error = "";

    // create crud
    $crud = null;

    // create an instance of the controller
    $crudC = new crudC();
    if (
		isset($_POST["nom_Animal"]) &&
        isset($_POST["race"]) && 
        isset($_POST["genre"])&&
        isset($_POST["poid"]) &&
        isset($_POST["date_recuperation"]) && 
        isset($_POST["endroit_recuperation"])
    ) {
        if (
            !empty($_POST["nom_Animal"]) &&
            !empty($_POST["race"]) && 
            !empty($_POST["genre"])&&
            !empty($_POST["poid"]) &&
            !empty($_POST["date_recuperation"]) && 
            !empty($_POST["endroit_recuperation"])
        ) {
            $crud = new gestion_animaux(
                $_POST['id'],
				$_POST['nom_Animal'],
                $_POST['race'],
                $_POST['genre'],
                $_POST['poid'],
                $_POST['date_recuperation'],
                $_POST['endroit_recuperation']
            );
            $crudC->modifiercrud($crud, $_POST["id"]);
            header('Location:Gestion_animaux.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/stylear.css">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <title>modifier</title>
</head>
    <body>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$crud = $crudC->recuperercrud($_POST['id']);
				
		?>
         <div class="card-block">
        <form class="form-material" action="" method="POST">
            <table border="1" align="center">
            <tr>
                  
                    <td><input type="hidden" name="id" id="id" value="<?php echo $crud['id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom_Animal">nom_Animal:
                        </label>
                    </td>
                    <td><input type="text" onblur="saisirNom()" name="nom_Animal" id="nom_Animal" value="<?php echo $crud['nom_Animal']; ?>" maxlength="20">
                    <p id="errorName" class="error"></p></td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="race">race:
                        </label>
                    </td>
                    <td>
                        <input type="race" name="race" id="race" value="<?php echo $crud['race']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">genre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="genre" id="genre" value="<?php echo $crud['genre']; ?>">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="poid">poid:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="poid" id="poid" value="<?php echo $crud['poid']; ?>">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="date_recuperation">date_recuperation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_recuperation" id="date_recuperation" value="<?php echo $crud['date_recuperation']; ?>">
                    </td>
                </tr>   
                <tr>
                    <td>
                        <label for="endroit_recuperation">endroit_recuperation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="endroit_recuperation" id="endroit_recuperation" value="<?php echo $crud['endroit_recuperation']; ?>">
                    </td>
                </tr>                  
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
                        </div>
		<?php
		}
		?>

<script type="text/javascript" src="assets/js/verifier.js"></script>

    </body>
</html>