<?php
 require_once 'includes/helpers.php'; 
?>
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
    
        <?php if(isset($_SESSION['errors'])): ?>
            <?php //var_dump($_SESSION['errors']); ?>
        <?php endif; ?>
        
        <label for="name">Nombre</label>
        <input type="text" name="name" />
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'name') : ''; ?>

        <label for="lastname">Apellidos</label>
        <input type="text" name="lastname" />
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'lastname') : ''; ?>
    
        <label for="email">Email</label>
        <input type="email" name="email" />
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'email') : ''; ?>
    
        <label for="password">Password</label>
        <input type="password" name="password" />
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'password') : ''; ?>

        <input type="submit" value="Registro" name="register" />
    </form>
    <?php echo isset($_SESSION['errors']) ? borrarErrors() : ''; 
    ?>
</div>

</aside>