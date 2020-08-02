$(document).ready(function () {
     "use strict"

     $("#btn_Add").on("click", function () {
          add();
          search(); // goi search
     });
  
    
});

// add
function add() {
     // lay dl tu view
     var name = $("#txt_name").val();
     var birthday = $("#txt_birthday").val();


     $.ajax({

          url: '../Home/add',
          type: 'post',
          data: { Name: name, Birthday: birthday },
          success: function (result) {
               if (result == 1)
                    swal("Good job!", "You clicked the button!", "success").then((result) => {
                         location.reload();
                    });
               else
                    swal("Good job!", "You clicked the button!", "Fail");


          }
     });

}

//search
function search() {
     // lay dl tu view
     var name_search = $("#txt_search_name").val();
     $.ajax({

          url: '../Home/search',
          type: 'post',
          data: { Name: name_search },
          success: function (result) {
               $('#table_student').html(result);
               //  alert(tt);

          }
     });
}
// delete
function delete_user(id) {
     // lay dl tu onclick
     var id = id;
     swal({
          title: "Are you sure?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
     })
          .then((willDelete) => {
               if (willDelete) {
                    //goi ajax
                    $.ajax({

                         url: '../Home/delete_user',
                         type: 'post',
                         data: { ID: id },
                         success: function (result) {
                              if (result == 0)
                                   swal("Good job!", "You clicked the button!", "success").then((result) => {
                                        location.reload();
                                   });

                              else
                                   swal("Good job!", "You clicked the button!", "Fail");


                         }
                    });
               }
          });

}


//edit
function edit(id) {
     // lay dl tu view
     document.getElementById("btn_edit" + id).style.display = "none";
     document.getElementById("btn_save" + id).style.display = "block";

     var name = document.getElementById("name" + id);
     var birthday = document.getElementById("birthday" + id);


     var name_data = name.innerHTML;
     var birthday_data = birthday.innerHTML;


     name.innerHTML = "<input type='text' id='name_text" + id + "' value='" + name_data + "'>";
     birthday.innerHTML = "<input type='text' id='birthday_text" + id + "' value='" + birthday_data + "' class='datepicker'>";
     $(function () {
          $(".datepicker").datepicker();
     });

}
//save edit
function save(id) {
     // lay dl tu view
     var name_val = document.getElementById("name_text" + id).value;
     var birthday_val = document.getElementById("birthday_text" + id).value;
     // goi ajax
     $.ajax({

          url: '../Home/edit',
          type: 'post',
          data: { Name: name_val, Birthday: birthday_val, ID: id },
          success: function (result) {
               if (result == 1)
                    swal("success!", "You clicked the button!").then((result) => {
                         location.reload();
                    });
               else
                    swal("Fail!", "You clicked the button!");


          }
     });
     document.getElementById("btn_edit" + id).style.display = "block";
     document.getElementById("btn_save" + id).style.display = "none";



}
//search_month
function search_month() {
     var search_start = $("#month_start").val();
     var search_end = $("#month_end").val();
     // goi ajax
     $.ajax({
          url: "../home/search_month",
          type: "post",
          data: { Search_start: search_start, Search_end: search_end },
          success: function (result) {
               $('#table_student').html(result);

          }

     })

}
function login() {
     var email = $("#txtEmailDN").val();

     var password = $("#txtPasswordDN").val();
     $.ajax({
          url: "../Login/login",
          type: "post",
          data: { Email: email, Password: password },
          success: function (result) {
            window.location="../home/index";
          }

     })

}
function validate() {
     var email_validate = $("#validate_email").val();


     $.ajax({
          url: "../Login/validate_email",
          type: "post",
          data: { Email: email_validate },
          success: function (result) {
               swal("success!", "Vui lòng check Mail!");
          }

     })
}


