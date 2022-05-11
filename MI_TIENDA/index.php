<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <header>
        <div>
            <span>Mujer</span>
            <span>Hombre</span>
        </div>


        <div class="rutaGrill">
            <h1>MI_TIENDA</h1>
            <p>Mujer > Ropa > Camiseta > Licencias (51 Articulos)</p>
        </div>

        <nav>
            <input type="text" placeholder="🍳 Buscar">
            <img src="./assets/png/usuario.png">
            <img src="./assets/png/bolsa-de-la-compra.png">
            <table>
                <thead>
                <tr>
                    <td>
                        VISTA 2 4
                    </td>
                    <td>
                        ORDENAR POR
                    </td>
                    <td>
                        FILTROS
                    </td>
                </tr>
                </thead>
            </table>
        </nav>
    </header>
    <main>
        <?php
        for ($i = 1; $i <= 15; $i++) {
            ?>
            <div class="infoGrill">
                <img class="fotosGrill" src="./assets/png/imagenMujer.jpg" alt="fotoGrill">
                <p>Camiseta Chica</p>
                <p>12.99€</p>

            </div>
        <?php
        }

        ?>
    </main>
    <section>
        <div class="infoEmail">
            <h1>10% DE DESCUENTO</h1>
            <p class="">¡SUSCRIBETE A LA NEWSLETTER!*</p>
            <p class="labelEmail">Introduce tu email</p>
            <input class="inputEmail" type="text">
        </div>
    </section>
    <footer>
        <p>Contacto</p>
        <img src="./assets/png/iconoMovil.png" alt="iconoMovil">
        <p>De lunes a Viernes de 9:30 a 22:00</p>
    </footer>

</body>
</html>