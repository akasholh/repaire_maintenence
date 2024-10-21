<?php

// Database connection (from your connection.php file)
include '../connection.php';
include "header.php";
?>

      <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">Services  list</h2>
       
      </div>
      <div class="col-12 ">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Sr No</th>
              <th scope="col"> Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Service type</th>
              <th scope="col"> City</th>
              <th scope="col">State</th>
              <th scope="col">Zip</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
// SQL query to retrieve categories
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $phone = $row["phone"];
        $email = $row["email"];
        $address = $row["address"];
        $maintenance_type = $row["maintenance_type"];
        $city = $row["city"];
        $state = $row["state"];
        $zip = $row["zip"];
        $date = $row["date"];
        
        // Display each category with edit and delete links
        echo "<tr>";
        echo "<th scope='row'> $id </th>";
        echo "<td><strong>". ucfirst($name)."</strong></td>";
        echo "<td><strong>". $email."</strong></td>";
        echo "<td>". $phone." </td>";
        echo "<td><strong>". ucfirst($address)."</strong></td>";
        echo "<td><strong>". ucfirst($maintenance_type)."</strong></td>";
        echo "<td>". ucfirst($city)." </td>";
        echo "<td>". ucfirst($state)." </td>";
        echo "<td>". $zip." </td>";
        echo "<td>". $date." </td>";
         echo "<td><a href='mailto:$email'>Send Response mail</a></td> ";
        echo "</tr>";
    }
} else {
    echo "No data found";
}
        ?>
          
          </tbody>
        </table>
        </div>

  
   
</div>
    </section>	
</body>
</html>