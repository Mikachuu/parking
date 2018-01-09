<!-- <table border="1">  
      <tbody>  
         <tr>  
            <td>Country Id</td>  
            <td>Country Name</td>  
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->employeeid;?></td>  
            <td><?php echo $row->fname;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>   -->

   <?php foreach($reginfo as $post) :?>
   <?php echo $post['id']; ?> <br>

   <?php echo $post['employeeid']; ?> <br>
   <?php echo $post['fname']; ?> 
   <?php echo $post['lname']; ?> <br>
   <?php echo $post['email']; ?> <br>
   <?php echo $post['contact']; ?> <br>
   <small class="post-date"><?php echo $post['created_at']; ?> </small><br>
   <?php endforeach;?>