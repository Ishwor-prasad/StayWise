  <!--navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">  

  <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">StayWise</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link me-3 active" aria-current="page" href="index.php"><i class="bi bi-house  me-2"></i>Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-3 fs-bold " href="#"><i class="bi bi-collection me-2"></i>Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-3" href="facilities.php"><i class="bi bi-radioactive me-2"></i>Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-3" href="#"><i class="bi bi-telephone-fill me-2"></i>contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-3" href="about.php"><i class="bi bi-plus-square me-2"></i>about us</a>       
                
            </li>                        
        </ul>
        <div class="d-flex">             
      
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2  " data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
          Register
          </button>

          </button>
          </div>
                  </div>
              </div>
          </nav>
    <!--LoginModal-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form >
        <div class="modal-header">
            <h5 class="modal-title d-flex align items-content" 
            i><i class="bi bi-person-circle me-2"></i>
            User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
            <div class="mb-3">
              <label  class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none"  >          
            </div>
            <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="Password" class="form-control shadow-none"  >          
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class=" btn btn-dark shadow-none"> LOGIN</button>
              <a href="javascript: void(0)">Forgot Password?</a>
              
            </div>
          </div>      
          </form>
        </div>
      </div>
    </div>   
    <!--Registermodal-->        
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form >
        <div class="modal-header">
            <h5 class="modal-title d-flex align items-content" 
            i><i class="bi bi-people-fill"></i>>
            User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
          <span class="badge bg-light text-dark mb-3 text-wrap lh-base shadow-none">
          Note:Your details must match with your ID (NID,Passport) that will be required in check-in
          </span>
          <div class="container-fluid">
            <div class="row">

                      <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Name</label>
                      <input type="text" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Email</label>
                      <input type="email" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Contact Number</label>
                      <input type="number" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Picture</label>
                      <input type="file" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-12 p-0 mb-3">
                      <label  class="form-label">Address</label>          
                      <textarea class="form-control shadow none"  rows="1"></textarea>         
                      </div> 
                      <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Pincode</label>
                      <input type="number" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 p-0">
                      <label  class="form-label">Date of Birth</label>
                      <input type="date" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Password</label>
                      <input type="password" class="form-control shadow-none" >
                      </div>
                      <div class="col-md-6 p-0">
                      <label  class="form-label">Confirm Password</label>
                      <input type="password" class="form-control shadow-none" >
                      </div>
              </div> 
              </div>
              <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
              </div>
            </div>      
          </form>
        </div>
      </div>
    </div>