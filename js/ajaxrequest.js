function addStu(){
    var stuname = $("#exampleInputName1").val();
    var stuemail = $("#exampleInputEmail1").val();
    var stupass = $("#exampleInputPassword1").val();

    if(stuname.trim()==""){
        $("#statusmsg1").html(
            '<small style="color:red;">Please enter name</small>'
        );
        $("#stuname").focus();
        return false;
    }else if(stuemail.trim()==""){
        $("#statusmsg2").html(
            '<small style="color:red;">Please enter email</small>'
        );
        $("#stuemail").focus();
        return false;
    } else if(stupass.trim()==""){
        $("#statusmsg3").html(
            '<small style="color:red;">Please enter password</small>'
        );
        $("#stupass").focus();
        return false;
    }else{
        $.ajax({
            url:'Student/addstudent.php',
            method:'POST',
            dataType : 'json',
            data:{
                stuname :stuname,
                stuemail:stuemail,
                stupass: stupass,
            },
            success:function(data){
                console.log(data);
                if(data=="success"){
                    $("#successmsg").html("<span class='alert alert-success'>Registration succesful</span>")
                    clearform();
                } else if(data=="fail"){
                    $("#successmsg").html("<span class='alert alert-danger'>Unable to Register</span>")
                }
            }
    
        })
    
    } 
    }
   


$(document).ready(function(){
    $("#signup").click(function(){
        addStu();
    })
})

function clearform(){
    $("#sturegform").trigger('reset');
    $("#statusmsg1").html(" ");
    $("#statusmsg2").html(" ");
    $("#statusmsg3").html(" ");
}
function checkstulogin(){
    var stulogemail = $('#exampleInputEmail2').val();
    var stulogpass = $('#exampleInputPassword2').val();
    $.ajax({
        url: 'Student/addstudent.php',
        method:'POST',
        data:{
            stulogemail : stulogemail,
            stulogpass: stulogpass,
        },
        success:function(data){

           
        }

    })
}
$(document).ready(function(){
    $("#signin").click(function(){
        checkstulogin();
        //console.log("ready function")
    })
})