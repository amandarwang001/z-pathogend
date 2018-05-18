$(document).ready(function () {
    $(".cuptable").mouseover(function (e) {
        $(this).attr("src", $(this).attr("src").replace("small", "tilt"));
    }).mouseout(function (e) {
        $(this).attr("src", $(this).attr("src").replace("tilt", "small"));
    });

    $(".confirm-button").on('click', function (e) {
        e.preventDefault;
        console.log('confirm clicked');
    });

// for Contact Us page form
    $(".btn-contact").on("click", function (e) {
        // console.log("btn-contact was clicked");
        $(".contact-us").validate({
            submitHandler: function () {
                var form_data = new FormData(this.currentForm); //constructs key/value pairs representing fields and values  
                // for (var pair of form_data.entries()) {
                //     console.log(pair[0] + ', ' + pair[1]);
                // };
                $.ajax({
                    url: "./assets/ajax/pathogend-mail.php",
                    type: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                }).done(function (res) { //fetch server "json" messages when done
                    // console.log(res);
                    if (res) {
                        /*a Thank-You page is set up if you want to add Google Analytics form tracking*/
                        /*window.location('http://[your URL]/thank-you')*/
                        $(".messageSent").show();
                    }
                    else {
                        $(".messageError").show();
                    }
                });
            }
        });
    });

// for Join Us page form
    $(".btn-join").on("click", function (e) {
        // console.log("btn-contact was clicked");
        $(".join-us").validate({
            submitHandler: function () {
                var form_data = new FormData(this.currentForm); //constructs key/value pairs representing fields and values
                // for (var pair of form_data.entries()) {
                //     console.log(pair[0] + ', ' + pair[1]);
                // };
                $.ajax({
                    url: "./assets/ajax/pathogend-mail.php",
                    type: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                }).done(function (res) { //fetch server "json" messages when done
                    // console.log(res);
                    if (res) {
                        /*a Thank-You page is set up if you want to add Google Analytics form tracking*/
                        /*window.location('http://[your URL]/thank-you')*/
                        $(".messageSent").show();
                    }
                    else {
                        $(".messageError").show();
                    }
                });
            }
        });
    });





});