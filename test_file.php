<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <form id="register-frm" >
         <label for="">EMail</label> :
        <input type="text" id="email"> <br>
        <label for="">Number :</label>
        <input type="text" id="number"> <br>

        <button type="button btn-test" >Test</button>
    </form>

    <script>

        $(document).on("submit","#register-frm" , function(){
             var email = $('#email').val();
             var email_regex =  new RegExp('^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$', 'i');

              if(!email_regex.test(email)){
                  alert ("email is !ncorrect");
              }

              var number = $('#number').val();
             var number_regex = /^(09|\+639)\d{9}$/;

              if(number_regex.test(number)){
                  alert ("number is correct");
              }else{
                  alert("number is woring");
              }
        });

    </script>


</body>
</html>