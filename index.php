<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./assets/css/stylepropio.css">
</head>
<body>
    <!-- CABECERA -->
    <header id="header">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
    
    

    <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>    
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>    
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>    
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>    
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>    
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>    
                <li>
                    <a href="index.php">Contacto</a>
                </li>        
            </ul>
        </nav>
    </header>

    <div id="container">
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

    
        <!-- BOX PRINCIPAL -->
        <div id="main">
            <h1>Ultimas Entradas</h1>
                <article class="post">
                    <h2>Titulo de entrada</h2>
                    <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.
                    </p>
                
                </article>     
                   
                <article class="post">
                    <h2>Titulo de entrada</h2>
                    <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.
                    </p>
                
                </article>     
                <article class="post">
                    <h2>Titulo de entrada</h2>
                    <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.
                    </p>
                
                </article>     
                <article class="post">
                    <h2>Titulo de entrada</h2>
                    <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim recusandae veritatis quo,
                    necessitatibus officiis totam quae velit sit quisquam atque illo esse maxime dolore dignissimos. 
                    Quis blanditiis molestiae ducimus laudantium.
                    </p>
                
                </article>     

        </div>
    </div>
        <!-- PIE DE PAGINA -->
        <footer id="footer">
            <p>Desarrollado por Miguel Diaz Velasco &copy; 2021</p>
        </footer>

</body>
</html>