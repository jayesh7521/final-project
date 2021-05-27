function addStu(){
    var reg=/^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
    var sname=$("#stuname").val();
    var semail=$("#stuemail").val();
    var spass=$("#stupass").val();

    
    // checking form feild on form submision
    if(sname.trim()==""){
        $("#statusmsg1").html('<small style="color:red;">Please Enter Name !</small>');
        $("$sname").focus();
        return false;
    }else if(semail.trim()==""){
        $("#statusmsg2").html('<small style="color:red;">Please Enter email !</small>');
        $("$semail").focus();
        return false;
    }
    else if(semail.trim()!="" && !reg.test(semail)){
        $("#statusmsg2").html('<small style="color:red;">Please Enter valis email! e.g. example@mail.com </small>');
        $("$semail").focus();
        return false;
    }
    else if(spass.trim()==""){
        $("#statusmsg3").html('<small style="color:red;">Please Enter pass !</small>');
        $("$spass").focus();
        return false;
    } else{
        $.ajax({
            url:"student/adstudent.php",
            method:"POST",
            dataType:"json",
            data:{
                stsignup:"ssignup",
                stname:sname, 
                stemail:semail,
                stpass:spass,
            },
            success:function(data){
                console.log(data);
                if(data=="ok"){
                    $("#successmsg").html("<span class='alert alert-success'> Registration success!</span>");
                    clearStuRegField();
                }else if(data=="fail"){
                    $("#successmsg").html("<span class='alert alert-danger'> Unable to Registraion</span>");
                }
            }
        })

    }

    

}


function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusmsg1").html(" ");
    $("#statusmsg2").html(" ");
    $("#statusmsg3").html(" ");
}