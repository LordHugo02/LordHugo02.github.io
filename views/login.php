
<form action="/" class="bg-dark m-5 rounded">
    <div class="m-5">
        <label for="exampleInputEmail1" class="form-label text-light">Addresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" autofocus autocomplete>
    </div>
    <div class="m-5">
        <label for="exampleInputPassword1" class="form-label text-light">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete>
    </div>
    <div class="m-5">
        <label for="exampleInputConfirmPassword1" class="form-label text-light">Confirmer mot de passe</label>
        <input type="password" class="form-control" id="exampleInputConfirmPassword1">
    </div>
    <button id="togglePassword" class="btn btn-primary">Voir le mot de passe</button>
    <button  type="submit" class="btn btn-primary">Envoyer</button>
</form>


<script>
    document.getElementById('togglePassword').addEventListener('click', function(e) {
        e.preventDefault();
        var passwordInput = document.getElementById('exampleInputPassword1');
        var confirmPasswordInput = document.getElementById('exampleInputConfirmPassword1');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            confirmPasswordInput.type = 'text';
            this.textContent = 'Cacher le mot de passe';
        } else {
            passwordInput.type = 'password';
            confirmPasswordInput.type = 'password';
            this.textContent = 'Voir le mot de passe';
        }
    });

</script>