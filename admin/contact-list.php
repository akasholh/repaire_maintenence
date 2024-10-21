<?php

// Database connection (from your connection.php file)
include "header.php";
include '../connection.php';

?>

      <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">  Contact list</h2>
      </div>
      <div class="col-12 ">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Sr No</th>
              <th scope="col"> Name</th>
              <th scope="col"> Email</th>
              <th scope="col"> Phone</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
// SQL query to retrieve categories
$sql = "SELECT * FROM contact_messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["Name"];
        $email = $row["email"];
        $subject = $row["phone"];
        $description = $row["message"];
        
        // Display each category with edit and delete links
        echo "<tr>";
        echo "<th scope='row'><strong> $id</strong> </th>";
        echo "<td><strong>". ucfirst($name)." </strong></td>";
        echo "<td> ". ucfirst($email)."  </td>";
        echo "<td>".  ucfirst($subject )." </td>";
        echo "<td> ". ucfirst($description )." </td>";
        echo "<td><a href='mailto:$email'>Send Response mail</a></td> ";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
        ?>
          
          </tbody>
        </table>
      </div>
    
      </div>

  
   
</div>
    </section>	
</body>
</html>