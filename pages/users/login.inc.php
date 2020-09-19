<div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12"></div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <form action=""  method="POST" class="form-container text-warning font-weight-bold">
                <span class="fas fa-user-lock fa-3x d-block mx-auto"></span>
                <h1 class="text-white text-center h3 mt-2">Authentification</h1>
                <div class="form-group">
                    <label for="username" class="h5">Nom d'utilisateur <abbr title="Ce champ est obligatoire">*</abbr></label>
                    <input type="text" class="form-control" name="username" id="username"  required autocomplete="none">
                </div>
                
                <div class="form-group">
                    <label for="password" class="h5">Mot de passe <abbr title="Ce champ est obligatoire">*</abbr></label>
                    <input type="password" name="password" class="form-control" id="password" required minlength="4" maxlength="15" autocomplete="none">
                </div>

                <button type="submit" id="submit" name="connexion" class="btn btn-success btn-block">Valider</button><br>
                <div class="form-check form-check-inline">
                    <label for="souvenir" class="form-check-label">
                        <input type="checkbox" class="form-check-input">Se souvenir
                    </label>
                    <a href="#" class="ml-3">Mot de passe oublié</a>
                </div>
                <p id="resultat" class='text-danger mt-2'></p>
            </form>
        </div>
    <div class="col-md-4 col-sm-12 col-xs-12"></div>
</div>    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>

$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'login-db.php', // Un script PHP que l'on va créer juste après
            {
                // Nous récupérons la valeur de nos input que l'on fait passer à login-db.php
                username : $("#username").val(),
                password : $("#password").val()
            },
 
            function(data){
 
                if(data == 'success'){
                     // Le membre est connecté et on lui rédirige vers la page admin.php
                    window.location.href = "../../public/admin.php";
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
                     $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
         
            },
            'text'
         );
    });
});
</script>