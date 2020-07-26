<script>
  $(document).ready(function(){
    $(".btn_save1").hide();
    // xuli hien lich

  });
</script>
<table  style="width:100%" id="edit_table" class="table table-striped col-sm-12"> 
        <thead class="table-primary">
          <tr>
            <th>Name</th>
            <th>Date</th>
            <th style="width:300px;">Action</th>
          </tr>
        </thead>
        <tbody>
     <?php foreach ($data['listUser'] as $value):
         $name= isset($value['userName'])?$value['userName']:" y";
         $birthday= isset($value['Birthday'])?$value['Birthday']:" ";
         $id= isset($value['user_id'])?$value['user_id']:" ";
     
         ?>
        
        
  
          <tr  id="<?php echo $name?>">
              <td id="<?php echo 'name'.$id?>" class="name"> <?php echo $name?> </td>
              <td  id="<?php echo 'birthday'.$id?>" class="birthday"> <?php echo $birthday?> </td>
              <td class="row">  
            
                  <button type="button" id="btn_delete" class="btn btn-danger col-sm-4" onclick="delete_user(<?php echo $id?>)">Delete</button>
                  <div class="col-sm-1"></div>
                 <button type="button" id="btn_edit<?php echo $id?>" class="btn btn-danger col-sm-4" style="width:300px;" onclick="edit(<?php echo $id?>)">Edit</button>
                 <button type="button" id="btn_save<?php echo $id?>" class="btn btn-danger col-sm-4 btn_save1" style="width:300px;" onclick="save(<?php echo $id?>)">Save</button>
                </td>
         </tr>
     <?php endforeach ?>
        </tbody>
      </table>

      