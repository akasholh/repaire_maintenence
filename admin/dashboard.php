<?php
include "header.php";
include '../connection.php';
?>


    

  
      <div class="col-sm-6 col-md-4 mx-auto service" >
          <div class="box ">
            <div class="img-box">
              <img src="../images/s1.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
              Registered Services 
              </h5>
              <p><?php $sql = "SELECT count(*) as total_rows FROM services  ORDER BY `id` DESC";
            $result = $conn->query($sql); 
            if ($result->num_rows > 0) {
                // Output data of each row
                $row = $result->fetch_assoc();
                $total_rows = $row['total_rows'];
                echo "Total number of services: " . $total_rows;
            } else {
                echo "No rows found";
        }?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto service" >
          <div class="box ">
            <!-- <div class="img-box">
              <img src="../images/s1.png" alt="" />
            </div> -->
            <div class="detail-box">
              <h5>
              Contact List
              </h5>
              <p><?php $contact = "SELECT count(*) as total_rows FROM contact_messages";
             $contact_result = $conn->query($contact);  
             if ($contact_result->num_rows > 0) {
            // Output data of each row
            $row = $contact_result->fetch_assoc();
            $total_rows = $row['total_rows'];
            echo "Total number of persons contacted : " . $total_rows;
            } else {
                echo "No rows found";
            }?></p>
            </div>
          </div>
        </div>
        
        
    </div>

  
   
    </div>
        </section>	
</body>
</html>