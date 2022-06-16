  
$(function() {


    var flag = true;
    
    function onScanSuccess(qrCodeMessage) {
        // handle the scanned code as you like, for example:
        console.log(qrCodeMessage);
        if(flag){
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
        
                }
            });

            flag = false;
            setTimeout(()=>flag=true, 4000);
        }
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
