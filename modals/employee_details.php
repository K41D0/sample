

<?php 
     include '../database/connection.php';
     $id = $_POST['id'];
     $view_query = mysqli_query($connection,"SELECT * FROM users WHERE id = '$id'");

     while($row = mysqli_fetch_assoc($view_query))
          {
               $id = $row['id'];
               $firstname = $row['firstname'];
               $lastname = $row['lastname'];
               $email = $row['email'];
          ?><table class="table table-hover table-condense table-borderless">
               <tr>
                    <th>Employee ID</th>
                    <td class='id'><?php echo $id ?></td>
               </tr>
                    <th>First name</th>
                    <td class='firstname'><?php echo $firstname ?></td>
               </tr>
                    <th>Last name</th>
                    <td class='lastname'><?php echo $lastname ?></td>
                    
               </tr>
                    <th>Email</th>
                    <td class='email'><?php echo $email ?></td>
               </tr>
          <?php                 
              }
          ?>

     </tbody>
</table>