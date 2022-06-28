  
$(function() {

   

    const toTitleCase = (phrase) => {
      return phrase
        .toLowerCase()
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(' ');
    };
      // standby

   // $('#user-picture').hide();
    $('#spinner').hide();
    $('#user-details').hide();
    $('#text-user-not-found').hide();




    function onScanSuccess(qrCodeMessage) {
        // handle the scanned code as you like, for example:
      //  console.log(qrCodeMessage);

        
            qrCodeMessage.trim();
            $.ajax({
                type: 'POST',
                url: 'query/scanExe.php',
                dataType: 'JSON',
                data: {
                        'qrCodeMessage':qrCodeMessage,
                      },
    
                beforeSend: function() {
                    
                },

                error: function() { // if error occured
                    alert("Error occured.please try again");
                  
                },
                success: function (data) {

                  console.log(data);
    
                   if(data.res == "none"){
                      $('#text-user-not-found').show();
                      $('#user-details').hide();
                      $("#user-picture").attr("src",'assets/img/user-not-found.jpg');

                      
                   }else{
                      $('#text-user-not-found').hide();

                      $('#user-fullname').text(toTitleCase(data.user_firstname + ' ' + data.user_lastname));
                      if(data.user_type == '1') {
                        var type = "Student";
                      }else if(data.user_type == '2'){
                        var type = "Faculty";
                      }else{
                         var type = "Visitor";
                      }
                      
                      var pictureName  = data.user_picture;
                      var url = './uploads/' + pictureName;

                      $("#user-picture").attr("src",url);
                      $('#user-campus').text( toTitleCase(data.campus_name));
                      $('#user-date').text( moment(data.date_today).format('MMMM D YYYY'));
                      $('#user-time').text( moment(data.date_today + ' ' +data.time_today).format('LT') );
                      $('#user-type').text(type);
                      $('#user-id').text(data.user_ref_id);
                      $('#user-details').show();
                   }
        
                }
            });

       }
    
      function onScanFailure(error) {

        // console.log(error);
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        // console.warn(`Code scan error = ${error}`);
      }
      
      let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
      html5QrcodeScanner.render(onScanSuccess, onScanFailure);
 

});
