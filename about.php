<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>StayWise-About-us</title>         
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
      <?php require('include/links.php'); ?>  
      <style>
        .attractive-font {
            font-family: 'Helvetica Neue', sans-serif; /* Choose an attractive font */
            font-size: 2rem; /* Adjust the font size */
            color: #FF5733; /* Choose an attractive text color */
            letter-spacing: 2px; /* Adjust the letter spacing */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add a subtle text shadow */
              
         }
         .box{
          border-top-color: var(--teal) !important
         }
          .p-2 {
            margin-left: 20px; /* Adjust the value as needed */
          }
      </style>
      
   
  </head>
  <body class="bg=dark">
   <?php require('include/header.php'); ?>  
   <div class="my-5 px-4">
        <h2 class=" h-font text-center attractive-font shadow-none">ABOUT US</h2>   
        <div class="h-line text-center  bg-dark"></div>            
          <p class=" text-center mt-3 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
            Laudantium natus aliquam tempora dicta sequi expedita dolorem 
            numquam amet! Adipisci nemo laboriosam esse <br> laborum facilis molestias aliquam, tempora debitis suscipit
            aperiam?
          </p>   
       </div>
    <div class="continer ">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1  order-2 p-4 px-4 " >
          <h3 class="p-2">Lorem ipsum dolor sit amet consectetur.</h3>
          <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Debitis alias rem sequi veritatis! At nemo, excepturi eaque deleniti 
          voluptate consequatur, assumenda dolore magni enim perferendis nobis suscipit error! Laudantium, distinctio.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="images/about/about.jpg" class="w-100" >
        </div>
      </div>
   </div>  

   
   <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box " >
        <img src="images/about/hotel.svg " width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box " >
        <img src="images/about/customers.svg " width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box " >
        <img src="images/about/staff.svg " width="70px">
        <h4 class="mt-3">50+ STAFFS</h4>
        </div>
      </div>
       <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box " >
        <img src="images/about/rating.svg " width="70px">
        <h4 class="mt-3">1000+ RATINGS</h4>
        </div>
      </div>
    </div>
   </div>

     <!-- management teams -->
    <h4 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h4>
    <div class="container">
         <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/O.jpg" class="w-100 " >
            <h5 class="mt-2 p-3">Estong</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/O.jpg" class="w-100 " >
            <h5 class="mt-2 p-3">Estong</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/O.jpg" class="w-100 " >
            <h5 class="mt-2 p-3">Estong</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/O.jpg" class="w-100 " >
            <h5 class="mt-2 p-3">Estong</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/O.jpg" class="w-100 " >
            <h5 class="mt-2 p-3">Estong</h5>
          </div>
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>   

    
 


   <?php require('include/footer.php'); ?> 
   <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
        // dynamicBullets: true,
        
      },
      breakpoints:{ 
          320:{
            slidesPerView: 1,
          },
          640:{
            slidesPerView: 3,
          },
          768:{
            slidesPerView: 3,
          },
          1024:{
            slidesPerView: 4,
          },
        }
    });
  </script>
   
  </body>
</html>
    
   
   
     



   