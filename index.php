<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>StayWise-Home</title>
            
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
      <?php require('include/links.php'); ?>
      
    <style>
            

      .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }
        @media screen and(max-width:575px){  
                .availability-form{
                margin-top: 25px;  
                padding: 0 35px ;                            
              }
        }  
        .custom-margin {
          margin: 20px; /* You can adjust the value to your preference */
        }  
         /* body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer h3 {
            color: white;
        } */

    </style>
  </head>
  <body class="bg=dark">
  <?php require('include/header.php'); ?>   
    


    <!-- carosoule--------photoslider -->
    <div class="container-fluid px-lg-4 mt-2"> 
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/2.png"class="w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block">
          </div>
          
          <div class="swiper-slide">
            <img src="images/carousel/4.png"class="w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/5.png"class="w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/6.png"class="w-100 d-block" >
          </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
      
      </div>

    </div>

    <!-- check availability form -->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-5 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
          <form >
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                      <label  class="form-label" style="font-weight: 500;">Check-in</label>
                      <input type="date" class="form-control shadow-none" >
                  </div> 
                      <div class="col-lg-3 mb-3">
                      <label  class="form-label" style="font-weight: 500;">Check-Out</label>
                      <input type="date" class="form-control shadow-none" >
                  </div>
                  <div class="col-lg-3 mb-3">
                  <label  class="form-label" style="font-weight: 500;">Adult</label>
                  <select class="form-select shadow none">
                          <option selected>Select Here</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                  </select>
                  </div>  
                  <div class="col-lg-2 mb-3">
                      <label  class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select shadow none">
                          <option selected>Select Here</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                    </select>
                  </div> 
                    <div class="col-lg-1 mb-lg-3 mt-1">
                      <button type="submit" class="btn text=white shadow none custom-bg">Submit</button>
                    </div>    
              </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Our Rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
      <div class="container"> 
      <div class="row">
          <div class="col-lg-4 col-md-6 my-3"> 
              <div class="card border-0 shadow" style=" max-width: 350px; margin:auto">
                <img src="images\rooms\1.jpg" class="card-img-top">

                <div class="card-body">
                  <h5> Oladipupo Special Rooom</h5>
                  <h6 class="mb-4">৳ 2000 per night</h6>
                  <!-- Features -->
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                      <!-- badge -->
                        2 Rooms 
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        2 Bathrooms 
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Gaming Setup
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Air Conditioner
                      </span>
                  </div>
                  <!-- facilities -->
                  <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <!-- badge -->
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Bedding
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Wifi,TV,AC.Room Heater
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Climate Control
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Entertainment
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Connectivity
                          </span>
                  </div>
                  <!-- Rating -->            
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" badge bg-light text-dark text wrap lh-base shadow-none">
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                    </span>           
                      
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">More details</a>
                  </div>               
                </div>
              </div>
          </div>         

          <div class="col-lg-4 col-md-6 my-3"> 
              <div class="card border-0 shadow" style=" max-width: 350px; margin:auto">
                <img src="images\rooms\1.jpg" class="card-img-top">

                <div class="card-body">
                  <h5> Dangi Special Rooom</h5>
                  <h6 class="mb-4">৳ 2000 per night</h6>
                  <!-- Features -->
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                      <!-- badge -->
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        2 Rooms 
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        2 Bathrooms 
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Gaming Setup
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Air Conditioner
                      </span>
                  </div>
                  <!-- facilities -->
                  <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <!-- badge -->
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Spring Bedding
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Wifi,TV,AC,Room Heater
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Climate Control
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Noise Cancellation 
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Connectivity
                          </span>
                  </div>
                  <!-- Rating -->            
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" badge bg-light text-dark text wrap lh-base shadow-none">
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                    </span>           
                      
                  </div>
                      <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">More details</a>
                      </div>               
                </div>
              </div>
          </div> 

          <div class="col-lg-4 col-md-6 my-3"> 
              <div class="card border-0 shadow" style=" max-width: 350px; margin:auto">
                <img src="images\rooms\1.jpg" class="card-img-top">

                <div class="card-body">
                  <h5> Oladipupo Special Rooom</h5>
                  <h6 class="mb-4">৳ 2000 per night</h6>
                  <!-- Features -->
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                      <!-- badge -->
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        2 Rooms 
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        2 Bathrooms 
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Gaming Setup
                      </span>
                      <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                        Air Conditioner
                      </span>
                  </div>
                  <!-- facilities -->
                  <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <!-- badge -->
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Bedding
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Wifi,TV,AC.Room Heater
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Climate Control
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Entertainment
                          </span>
                          <span class="badge bg-light text-dark text-wrap lh-base shadow-none">
                            Connectivity
                          </span>
                  </div>
                  <!-- Rating -->            
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" badge bg-light text-dark text wrap lh-base shadow-none">
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                      <i class="bi bi-star-fill text-warning "></i>
                    </span>           
                      
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none ">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">More details</a>
                  </div>               
                </div>
              </div>
          </div> 

            <div class="col-lg-12 text-center mt-12">
              <a href="#" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
            </div>
      </div>
      </div>   
     <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-1 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2">
          <img src="images\Features\wifi.png" width="30px">
          <h5 class="mt-3 ">Wifi</h5>                 
        </div>
         <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2">
          <img src="images\Features\wifi.png" width="30px">
          <h5 class="mt-3 ">Wifi</h5>                 
        </div>
         <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2">
          <img src="images\Features\wifi.png" width="30px">
          <h5 class="mt-3 ">Wifi</h5>                 
        </div>
         <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2">
          <img src="images\Features\wifi.png" width="30px">
          <h5 class="mt-3 ">Wifi</h5>                 
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
        </div>
      </div>
    </div>
      <!-- Testonomial -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testonomial</h2>
      <div class="container mt-5">
        <div class="swiper swiper-testonomial">
          <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/Features/wifi.png" alt="30px ">
                <h6 class="m-0 ms-2">Random User 1</h6>           
              </div>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                In omnis nemo iste officia, obcaecati distinctio
                ea quidem unde itaque cumque!
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>        
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/Features/wifi.png" alt="30px ">
                <h6 class="m-0 ms-2">Random User 1</h6>           
              </div>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                In omnis nemo iste officia, obcaecati distinctio
                ea quidem unde itaque cumque!
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>        
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/Features/wifi.png" alt="30px ">
                <h6 class="m-0 ms-2">Random User 1</h6>           
              </div>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                In omnis nemo iste officia, obcaecati distinctio
                ea quidem unde itaque cumque!
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>        
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/Features/wifi.png" alt="30px ">
                <h6 class="m-0 ms-2">Random User 1</h6>           
              </div>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                In omnis nemo iste officia, obcaecati distinctio
                ea quidem unde itaque cumque!
              </p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning "></i>        
              </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
       <div class="col-lg-12 text-center mt-5">
          <a href="#" class=" btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
        </div>    
    </div>
   <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container bg-white">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
         <iframe class="w-100 rounded"height="320 px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.318027058714!2d90.38948927619292!3d23.736035978680295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c04b5cc9d7%3A0xaca58c75e27ff351!2sSir%20PJ%20Hartog%20International%20Hall!5e0!3m2!1sen!2sbd!4v1691873721360!5m2!1sen!2sbd"   loading="lazy" ></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
         <div class="bg-white p-4 rounded my-4 custom-margin">
              <h5 >Call us</h5>              
              <a href="Mobile: +8801886422493" class="d-inline-block mb-2 text-decoration-none text-dark">
               <i class="bi bi-telephone"></i> +8801886422493</a>
               <br>
               <a href="Mobile: +8801886422493" class="d-inline-block  text-decoration-none text-dark">
               <i class="bi bi-telephone"></i> +9779862436013</a>
         </div>
         
          <div class="bg-white p-4 rounded my-4 custom-margin">
                <h5>Follow us</h5>              
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-twitter me-1"></i> Twitter</a>
                </span>
                <br>
                <a href="#" class="d-inline-block  text-decoration-none ">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-facebook me-1"></i> Facebook</a>
                </span>
          </div>
        

        
        </div>
      </div>
    </div>

    <?php require('include/footer.php'); ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // swippercode
      var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 4500,
            disableOnInteraction: false

          }
          });
        var swiper = new Swiper(".swiper-testonomial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
          320:{
            slidesPerView: 1,
          },
          640:{
            slidesPerView: 1,
          },
          768:{
            slidesPerView: 1,
          },
          1024:{
            slidesPerView: 3,
          },

        }
      });
    </script>
  </body>
</html>
    
     



  