
<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content ="width=device-width, initial-scale=1.0">
     <title> ISCHEDULEIT HOME</title>
     <link rel="stylesheet" href="style.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
  
      <div class="sidebar">
          <div class="logo_content">
             <div class = "title">
              <div class ="title_name">ISCHEDULEIT</div>
             </div>
             <i class='bx bx-menu' id="btn" style='color:#ffffff'  ></i>
             </div>
                <ul class="nav list">
                  <li>
                    <a href="hometest.php">
                      <i class='bx bx-home' style='color:#ffffff' ></i>
                      <span class="links_name">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                  </li>
                  <li>
                     <a href="Schedule.html">
                      <i class='bx bx-time-five' style='color:#ffffff' ></i>
                      <span class="links_name">Schedules</span>
                     </a>
                     <span class="tooltip">Schedules</span>
                  </li>
                  <li>
                    <a href="#">
                      <i class='bx bx-user-circle'  style="color:#ffffff"></i>
                      <span class="links_name">Account</span>
                    </a>
                    <span class="tooltip">Account</span>
                  </li>
                  <li>
                    <a href="login.html">
                      <i class='bx bx-power-off' id="log out" style="color:#ffffff  " ></i>
                      <span class="links_name">Log Out</span>
                    </a>
                    <span class="tooltip">Log Out</span>
                  </li>
                </ul>
               </div>

              <div class="image-container">
                <div class="image">
                  <img src="CPC Schedule Illustration.png">
                </div>
              </div>

             <div class="card-container">
              <div class="card">
                <i class='bx bxs-book-open'></i>
                <h3>Available Subjects</h3>
                <p1>0</p1>
              </div>

              <div class="card">
                <i class='bx bxs-book-open'></i>
                <h3>Available Subjects</h3>
                <p1>0</p1>
              </div>

              <div class="card">
                <i class='bx bxs-book-open'></i>
                <h3>Available Subjects</h3>
                <p1>0</p1>
              </div>
             </div>
             
              
            
            
            
            </div>
               <script>
                let btn = document.querySelector("#btn");
                let sidebar = document.querySelector(".sidebar");

                btn.onclick = function(){
                  sidebar.classList.toggle("active");
                }
               </script>
          
          
       </header>
      
          

        
    </body>
</html>


<style>

 <?php include "style.css"?>
</style>