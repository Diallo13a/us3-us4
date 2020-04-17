<?php
    session_start();
    $_SESSION['admin']='oumar';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrire</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif;background-image: url("img-bg.jpg");background-color:green}
        .alignement{
            margin-left:30px;
        }
        .arrondire{
            border-radius:5px 5px 5px 5px;
            height:20px;
        }
        #preview {
        width: 200px;
        display: inline-block;
    }

    #preview img {
        
       
        border-radius: 50%;
    width:200px;
    height:200px;
    float:left;
    margin-left:125px;
    
    }
        
    </style>
</head>
<body>
    <div id="logo" style="background-color:black;margin-top:-20px ">
    
      <p> <img src="logo-QuizzSA.png" alt="logoduquizz" width="40px" />
       <h1 style="color:white ;text-align:center;margin-top:-60px; "> Le plaisir de jouer</h1></p>
    
   <!-- <p  style="color:white ;text-align:center;margin-top:-30px">Le plaisir de jouer</p> -->
    </div>
    <div id="conteneur" style="background-color:white; width:75%; margin-left:150px; border-radius:10px 10px 10px 10px; margin-top:-20px; height:581px">
      <div id="gauche" style="width:60%; background-color:">
    <h1 class="alignement">S'inscrire</h1>
        <p class="alignement" style="margin-top:-20px">Pour tester votre niveau de culture générale</p>
        <hr class="alignement" width="50%" color="midnightblue" size="2">

        <form action="" enctype="multipart/form-data" method="post">
        <div class="alignement">
            <p>Prénom</p>
            <input class="arrondire" type="text" placeholder="Aaaa" name="prenom">
        </div>
        <div class="alignement">
            <p>nom</p>
            <input class="arrondire" type="text" placeholder="BBBB" name="nom">   
        </div>
        <div class="alignement">
            <p>Login</p>
            <input class="arrondire" type="text" placeholder="Aaaa" name="login">
        </div>
        <div class="alignement">
            <p>Password</p>
            <input class="arrondire" type="password" placeholder="**********" name="mtpass">
        </div>
        <div class="alignement">
            <p>Confirmer Password</p>
            <input class="arrondire" type="password" placeholder="**********" name="mtpass">
        </div>
        <div class="alignement">
            <p>Avatar
              <input style="padding-left:100px; margin-bottom:px; border-radius:4px 4px 4px 4px" 
              onchange="handleFiles(files)" id="upload" type="file" name="bouton" class="btn">
            </p>
         
        </div>
        <div id="alignementdeux" style="margin-left:100px; border-radius:4px 4px 4px 4px">
           <button type="submit" name="bouton" class="btn">Créer compte</button>
        </div>
        </div>
        <div id="droite" style="width:35%; background-color:; margin-left:625px; margin-top:-528px; height:300px">
         <div><label for="upload"><span id="preview"></span></label></div>
        </div>

    </form>
        

    </div>

    <script>
    function handleFiles(files) {
        var imageType = /^image\//;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            if (!imageType.test(file.type)) {
                alert("veuillez sélectionner une image");
            } else {
                if (i == 0) {
                    preview.innerHTML = '';
                }
                var img = document.createElement("img");
                img.classList.add("obj");
                img.file = file;
                preview.appendChild(img);
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);

                reader.readAsDataURL(file);
            }

        }
    }
    </script>

</body>
</html>