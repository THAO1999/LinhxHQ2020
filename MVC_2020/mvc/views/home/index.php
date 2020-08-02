<div class="container">
  <div class="row  text-center">
      <div class="col-sm-12 ">
          <h3 >Giao Dien</h3>
     
      </div>
  
  </div>
 
  <div class="content mt-5" >

  <div class="row">
    <div class="col-sm-3" class="from">
        <div class="row">
          <div class="col-sm-4">
              <h3>From: </h3>
          </div>
          <div class="col-sm-8">
              <select name="month" id="month_start">
                  <option value="01">January </option>
                  <option value="02">February</option>
                  <option value="03">March </option>
                  <option value="04">April </option>
                  <option value="05">May </option>
                  <option value="06">June </option>
                  <option value="07">July </option>
                  <option value="08">August </option>
                  <option value="09">September  </option>
                  <option value="10">October  </option>
                  <option value="11">November </option>
                  <option value="12 ">December  </option>
                
                </select>
          </div>
       </div>
    </div>
      
    <div class="col-sm-3"  class="to">
      <div class="row">
        <div class="col-sm-4">
            <h3>To: </h3>
        </div>
        <div class="col-sm-8">
            <select  id="month_end" onchange="search_month(this)">
                <option value="01">January </option>
                <option value="02">February</option>
                <option value="03">March </option>
                <option value="04">April </option>
                <option value="05">May </option>
                <option value="06">June </option>
                <option value="07">July </option>
                <option value="08">August </option>
                <option value="09">September  </option>
                <option value="10">October  </option>
                <option value="11">November </option>
                <option value="12">December  </option>
              
              </select>
        </div>
     </div>
  </div>

  <div class="col-sm-4"  class="name">
      <form action="/action_page.php">
    <div class="row">
          <h3 class="col-sm-6 "for="fname">Or Name: </h3>
          <input class="col-sm-6 "type="text" id="txt_search_name" name="txt_search_name"><br><br>
       
   </div>
      
  </form>
</div>

<div class="col-sm-2"  class="search">
    <div class="row">
      <div class="col-sm-6">
          <button type="button" class="btn btn-danger col-sm-12" id="btn_search">Search</button>
      </div>
      <div class="col-sm-6">
          <button id="btn_id" type="button" class="btn btn-danger col-sm-12">Add</button>
        </div>
   </div>
  </div>



</div>
<div class="row mt-5" id="table_student" >
      <?php include("search.php") ?>
</div>
  </div>

  <div class="row" style="margin-left: 450px;">
   

  </div>
</div>

<!-- giao dien add-->
<div id="add" title=" Add New Birthday">
 <div class="row">
    
        <h3 class="col-sm-6 "for="fname">Name: </h3>
        <input class="col-sm-6 "type="text" id="txt_name" name="txt_name">
     

</div>

    <div class="row mt-2">
        <h3 class="col-sm-6 "for="fname"  > Birthday: </h3>
       <input  class="col-sm-6 datepicker" type="text" id="txt_birthday" name="txt_birthday">
 
</div>

    <div class="row mt-2">  
        <button type="button" class="btn btn-danger col-sm-5" id="btn_cancel" >Cancel</button>
        <div class="col-sm-1"></div>
       <button type="button" class="btn btn-danger col-sm-5" id="btn_Add" style="width:300px;" >Add</button>
    </div>

</div>

 


<!-- script-->


<!-- ../ sẽ di chuyển đến thư mục chứa thư mục hiện tại (thư mục cha)-->

<script type="text/javascript" src="../public/js/script.js"></script>

<script type="text/javascript" src="../public/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../public/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../public/js/jquery-ui.js"></script>
<script type="text/javascript" src="../public/js/script.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../public/js/bootstable.min.js"></script>

<script>
  // xuli add

  $(document).ready(function(){
   
    // xu li button add
  $( "#add" ).dialog({ autoOpen: false }); // ẩn add
  $( "#btn_id" ).click(function() {
  $( "#add" ).dialog( "open" ); // mở
  
  });
  $( "#btn_cancel" ).click(function() {
  $( "#add" ).dialog( "close" ); // ẩn
  });

// xuli hien lich
$( function() {
    $( ".datepicker" ).datepicker();
  });

$(".btn_save1").hide();


// xuli edit
$( "#edit" ).dialog({ autoOpen: false }); // ẩn add
    $( "#btn_edit" ).click(function() {
    $( "#edit" ).dialog( "open" ); // mở
    });
    function search_month(e){
      alert(3);
    }
});
  </script>