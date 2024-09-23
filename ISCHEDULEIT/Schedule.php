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
                    <i class='bx bx-home-alt' style='color:#ffffff'  ></i>
                    <span class="links_name">Home</span>
                  </a>
                  <span class="tooltip">Home</span>
                </li>
                <li>
                   <a href="Schedule.php">
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
                  <a href="#">
                    <i class='bx bx-power-off' id="log out" style="color:#ffffff" ></i>
                    <span class="links_name">Log Out</span>
                  </a>
                  <span class="tooltip">Log Out</span>
                </li>
              </ul>
             </div>
             
               
            <div class="button-container">
              <div class="button-create"> 
                <button type="button" onclick="openPopup()">
                 <i class='bx bxs-time'></i>
                 Create Schedule
                </button>
                </div>
                <div class="button-alt">
                  <button>
                    <i class='bx bxs-edit-alt' ></i>
                   EDIT SCHEDULE
                  </button>
                  </div>
                <div class="button-delete">
                  <button>
                    <i class='bx bxs-trash'></i>
                    DELETE
                  </button>
                </div>
                <div class="button-print">
                  <button>
                    <i class='bx bxs-printer'></i>
                    PRINT
                  </button>
                </div>
            </div>
           

            
            <div class="table-container">
              <table class="content-table">
                <thead>
                  <th>Subject Code</th>
                  <th>Subject Description</th>
                  <th>Day</th>
                  <th>Time</th>
                  <th>Teacher</th>
                  <th>Room</th>

                  
                </thead>
              </table>
  

            </div>
                

            <div class="popup">
      
      <div class="popup-content">
    
        <h2>Pop-up Form</h2>
    
        <form>
    
          <label for="name">Name:</label>
    
          <input type="text" id="name" name="name"><br><br>
    
          <label for="email">Email:</label>
    
          <input type="email" id="email" name="email"><br><br>
    
          <label for="message">Message:</label>
    
          <textarea id="message" name="message"></textarea><br><br>
    
          <input type="submit" value="Submit">
    
        </form>
    
      </div>
    
    </div>



               
              
                
       
         
         
         
                <script>
                let btn = document.querySelector("#btn");
                let sidebar = document.querySelector(".sidebar");

                btn.onclick = function(){
                  sidebar.classList.toggle("active");
                }


                function openPopup() {
      
      document.querySelector('.popup').style.display = 'block';
  
    }
  
    
  
    function closePopup() {
  
      document.querySelector('.popup').style.display = 'none';
  
    }
  
               </script>
          
        

    </body>




</html>


<style> 
<?php include "style.css"?>

</style>

