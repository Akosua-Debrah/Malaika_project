// function ShowPassword(){
//     var pass =document.getElementById("userpassword");
//     if(pass.type=="password"){pass.type= "text";}
//     else{ pass.type="password";}
//   }
//    function ShowCPassword(){
//      var Cpass =document.getElementById("userconfirmpassword");
//      if(Cpass.type=="password"){Cpass.type="text";}
//      else{Cpass.type="password";}
//    }

//    function check(){
//      var password= document.getElementById("userpassword").value;
//      var Cpassword= document.getElementById("userconfirmpassword").value;
//      if(password==Cpassword){document.getElementById("signin-password"),html ="Successfully signed in"; return true;}
//      else {document.getElementById("signin-password").html="passwords do not match"; return false;}

//    }
  
// $(doument).ready(function(){
//     // adding a click event
//     $('#signinmodal').click(function(){
//       //Get all input fields
//       var username = $('#username').val();
//       var useremail = $('#useremail').val();
//       var userpassword = $('#userpassword').val();
//       var userconfirmpassword = $('#userconfirmpassword').val();
//       //calling ajax here
//       $.post("crud_operations.php", {
//         username:username,
//         useremail:useremail,
//         userpassword:userpassword,
//         userconfirmpassword: userconfirmpassword
//       },

//       function(data,status){
//         //check response
//         if(data="success"){
//           $("#response").html("<div class='alert alert-info;>"+data+"</div>");
//         }else{
//           $("#response").html("<div class='alert alert-warning;>"+data+"</div>");
//         }

//       });


//       });


//   });

$('form.ajax').on('submit', function(){
    var that =$(this),
        url= that.attr('action'),
        type= that.attr('method'),
        data= {};

    that.find('[name]').each(function(index,value){
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name]=value;
    });

    //calling ajax here
    $.ajax({
        url :url,
        type: type,
        data:data,
        success:function(response){
           alert(response);
        }

    });
    return false;

});






  