<!-- BARRA LATERAL -->
<aside id="sidebar">
<div id="login" class="block-aside">
    <h3>Identificate</h3>
    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" />
    
        <label for="password">Password</label>
        <input type="password" name="password" />

        <input type="submit" value="Entrar" />
    </form>
</div>

<div id="register" class="block-aside">
    <h3>Registrate</h3>
    <form action="register.php" method="POST">

        <label for="name">Nombre</label>
        <input type="text" name="name" />
    
        <label for="lastname">Apellidos</label>
        <input type="text" name="lastname" />
    
        <label for="email">Email</label>
        <input type="email" name="email" />
    
        <label for="password">Password</label>
        <input type="password" name="password" />

        <input type="submit" value="Registro" />
    </form>
</div>

</aside>