<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <header>
        <div>
            <img class="imgHeader" src="./assets/png/MOZZA.PNG">
        </div>
        <nav class="menuSitio">
            <ul>
                <li><a href="#Home"><span class="subrayado">Home</span></a></li>
                <li><a href="#Concepto"><span class="subrayado">Concepto</span></a></li>
                <li><a href="#Fotos">Fotos</a></li>
                <li><a href="#Menu">Menú</a></li>
                <li><a href="#Reservas">Reservas</a></li>
                <li><a href="#Blog">Blog</a></li>
                <li><a href="#Contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main id="Home">
        <div class="sectionHome">
            <img class="fotoHome" src="./assets/png/home.PNG" alt="imagen MOZZABAR Madrid">
        </div>
    </main>
    <section id="Concepto">
        <div class="sectionConcepto">
            <div class="cuadradoNegro">
                <div class="text-divider">CONCEPTO</div>
                <p>Lorem ipsum dolor sit amet, cus ultricies nec. Curabitur dapibus et tellus in elementum. Curabitur ac imperdiet lacus. Fusce tempor, odio ac varius vestibulum, lacus ligula tempus felis, non luctus lectus dolor et ex. In sodales tincidunt lacus in volutpat. Proin a tincidunt turpis, at sagittis velit. </p>
                <p>Lorem ipsum dolor sit amet, nibh porttitor colesuada dignissim orci vel fringilla. Proin facilisis venenatis gravida. Proin eu dolor sit amet leo convallis ultrices a sed felis.</p>
                <p>Lorem ipsum dolor sit amet, vel fringilla. Proin facilisis venenatis gravida. Proin eu dolor sit amet leo convallis ultrices a sed felis.</p>
            </div>
        </div>
    </section>
    <section id="Fotos" class="sectionGaleria">
        <div class="columna">
            <div class="columnaIMG">
                <img src="./assets/png/foto1.PNG">
                <img src="./assets/png/foto2.PNG">

            </div>
            <div class="columnaIMG">
                <img src="./assets/png/foto3.PNG">
                <img src="./assets/png/foto4.PNG">
                <img src="./assets/png/foto5.PNG">
            </div>
            <div class="columnaIMG">
                <img src="./assets/png/foto6.PNG">
                <img src="./assets/png/foto7.PNG">
            </div>
        </div>

    </section>
    <section id="Menu" class="cartaSection">
        <div></div>
        <div class="carta">
            <div class="text-divider">CONCEPTO</div>
            <div class="navCarta">
                <nav>
                    <ul>
                        <li>
                            <a href="#desayuno" onclick="mostrar('desayuno')"><strong>DESAYUNOS</strong></a>
                        </li>
                        <li>
                            <a href="#carta" onclick="mostrar('carta')"><strong>CARTA</strong></a>
                        </li>
                        <li>
                            <a href="#cocktails" onclick="mostrar('cocktails')"><strong>COCKTAILS</strong></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="desayuno" class="cartaImgDiv">
                <img src="./assets/png/desayuno.png">
                <button>VER LA CARTA DE DESAYUNOS</button>
            </div>
            <div id="carta" class="cartaImgDiv" style="display: none;">
                <img src="./assets/png/desayuno.png">
                <button>VER LA CARTA</button>
            </div>
            <div id="cocktails" class="cartaImgDiv" style="display: none;">
                <img src="./assets/png/desayuno.png">
                <button>VER LA CARTA DE COCKTELES</button>
            </div>
        </div>
        <div></div>
    </section>
    <section id="Reservas" class="sectionReservas">
        <div>
            <div class="text-divider"><span class="reservasLine">RESERVAS</span></div>
            <div class="pantallaFormulario">
                <div class="formulario">
                    <form>
                        <div class="formlariolinea">
                            <div class="formBloque">
                                <label style="width: 100%;">Personas</label>
                                <select style="width: 100%;">
                                    <option>1 Persona</option>
                                    <option>2 Persona</option>
                                    <option>3 Persona</option>
                                    <option>4 Persona</option>
                                    <option>5 Persona</option>
                                    <option>6 Persona</option>
                                </select>
                            </div>
                            <div class="formBloque">
                                <label>Hora</label>
                                <select>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>21:00</option>
                                    <option>21:30</option>
                                    <option>22:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="formBloque">
                            <label>Tipo de mesa</label>
                            <select>
                                <option>Salon</option>
                                <option>Terraza</option>
                                <option>Zona Vip</option>
                            </select>
                        </div>
                        <div class="formBloque margintop">
                            <label></label>
                            <button>Reservar</button>
                        </div>
                        <div class="formBloque margintop" >
                            <label>Si no encuentras disponibilidad, apúntese en la lista de espera</label>
                        </div>
                        <div class="formBloque">
                            <button>Lista de Espera</button>
                        </div>
                        <div class="formBloque">
                            <button>Solicitud de grupo</button>
                        </div>
                    </form>
                </div>
                <div class="direccionBar">
                    <h3>MOZZABAR</h3>
                    <h4><span>FOOD &</span> DRINKS</h4>
                    <p>Conde de Peñalver 64</p>
                    <p>28006 - Madrid</p>
                    <p>Abrimos de lunes a domingo</p>
                    <p>de 07:30 a 01:30</p>
                </div>
            </div>
        </div>
    </section>
    <section id="Blog" class="sectionBlog">
        <div class="text-divider"><span class="">BLOG</span></div>
        <div class="blogImg">
            <img src="./assets/png/blog1.PNG">
            <img src="./assets/png/blog2.PNG">
            <img src="./assets/png/blog3.PNG">
        </div>
        <div class="buttonBlog">
            <button>VER TODAS LAS ENTRADAS</button>
        </div>
    </section>
    <section id="Contacto" class="sectionContacto">
        <div class="bloqueContacto">
            <img class="imgHeader" src="./assets/png/MOZZA.PNG">
            <h1>VEN CUANDO QUIERAS</h1>
        </div>
        <div class="bloqueContacto2">
            <div>
                <img class="iconoFin" src="./assets/png/mapa.png">
                <p>Conde de Peñalver 64</p>
                <p>28006 - Madrid</p>
            </div>
            <div>
                <img class="iconoFin" src="./assets/png/telefono-inteligente.png">
                <p>910 258 327</p>
            </div>
            <div>
                <img class="iconoFin" src="./assets/png/correo-electronico.png">
                <p>hola@mozzabar.es</p>
            </div>
        </div>

    </section >
    <section class="sectionSiguenos">
        <div class="ultimosiguenos">
            <div class="text-divider"><span class="">SIGUENOS</span></div>
            <div class="seguir">
                <button>FACEBOOK</button>
                <button>INSTAGRAM</button>
            </div>
        </div>

    </section>
    <footer>
        <div>
            <h1>ENLACE DE INTERÉS</h1>
            <p>Aviso legal</p>
            <p>Cookies</p>
        </div>
        <div>
            <h1>HORARIOS</h1>
            <p>Lunes a Domingo</p>
            <p>07:30 - 01:30</p>
        </div>
        <div>
            <h1>CONTACTO</h1>
            <p>Conde de Peñalver 64</p>
            <p>28006 - Madrid</p>
            <br>
            <p>910 258 327</p>
            <p>hola@mozzabar.es</p>
        </div>
    </footer>
    <script type="application/javascript">
        function mostrar(tipo){
            switch (tipo){
                case "desayuno":
                    document.getElementById('desayuno').style.display = 'flex';
                    document.getElementById('carta').style.display = 'none';
                    document.getElementById('cocktails').style.display = 'none';
                    break;
                case "carta":
                    document.getElementById('desayuno').style.display = 'none';
                    document.getElementById('carta').style.display = 'flex';
                    document.getElementById('cocktails').style.display = 'none';
                    break;
                case "cocktails":
                    document.getElementById('desayuno').style.display = 'none';
                    document.getElementById('carta').style.display = 'none';
                    document.getElementById('cocktails').style.display = 'flex';
                    break;
            }
        }
    </script>

</body>
</html>