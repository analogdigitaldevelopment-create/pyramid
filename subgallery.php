<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("./assets/head.php") ?>
    <!-- style sheet  -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/gallery.css" />
    <style>
        .contenedor {
    width: 90%;
    max-width: 1200px;
    overflow: hidden;
    margin: auto;
    padding: 60px 0;
}

.subtitulo {
    text-align: center;
    font-weight: 700;
    color: #1d2b4f;
    font-family: "playfair display";
    margin-bottom: 40px;
    font-size: 40px;
}

.gallery {
    background: #f2f2f2;
}

.contenedor-galeria{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

.img-galeria {
    object-fit: cover;
    width: 30%;
    display: block;
    margin-bottom: 15px;
    box-shadow: 0 0 6px rgb(0, 0, 0, 0.5);
    cursor: pointer;
}

.img-galeria:hover{
    transition: all 0.3s ease-in-out;
    transform: scale(1.1);
}

.imagen-light{
    position: fixed;
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translate(100%);
    transition: transform .2s ease-in-out;
}

.show{
    transform: translate(0);
}

.agregar-imagen {
    object-fit: cover;
    width: 60%;
    border-radius: 10px;
    transform: scale(0);
    transition: transform .3s .2s;
}

.showImage{
    transform: scale(1);
}

.close {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    cursor: pointer;
    color:#fff;
    font-size: 25px;
}
    </style>
  </head>

  <body>
          <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6DVDT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include("./assets/header.php") ?>

<section class="gallery" id="portafolio">
  <div class="contenedor">
    <h2 class="subtitulo">Gallery</h2>
    <div class="contenedor-galeria">
      <img src="https://images.pexels.com/photos/1183021/pexels-photo-1183021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-galeria">
      <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-galeria">
      <img src="https://images.pexels.com/photos/2832061/pexels-photo-2832061.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-galeria">
      <img src="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-galeria">
      <img src="https://images.pexels.com/photos/4275885/pexels-photo-4275885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-galeria">
      <img src="https://images.pexels.com/photos/1424246/pexels-photo-1424246.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-galeria">
      
    </div>
  </div>
</section>

<section class="imagen-light">
  <i class="fas fa-times close"></i>
  <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
</section>

<script>
    const imagenes = document.querySelectorAll('.img-galeria');
const imagenesLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    
    })
})

contenedorLight.addEventListener('click', (e) =>{
    if(e.target !== imagenesLight){
        contenedorLight.classList.remove('show');
        imagenesLight.classList.remove('showImage'); 
    }
})

const aparecerImagen = (imagen) =>{
    imagenesLight.src = imagen;
    contenedorLight.classList.add('show');
    imagenesLight.classList.add('showImage');
}
</script>
    
 <?php include("./assets/footer.php") ?>
  </body>
  <script src="./script.js"></script>
</html>