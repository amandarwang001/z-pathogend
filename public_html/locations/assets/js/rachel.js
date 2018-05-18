$(document).ready(function(){
    
    $("form").submit(function(){
        catName = $("#catName").val();
        catAge = $("#catAge").val();
        catGender = $('input[name=gender]:checked').val();
        
        if(catGender == "Female"){
            $("#hiddenFemaleCat").show();  
            $("#catPropertiesF").append("<strong>Name:</strong> " + catName + "<br>");
            $("#catPropertiesF").append('<strong>Age:</strong> ' + catAge + "<br>");
            $("#catPropertiesF").append('<strong>Gender: </strong> ' + catGender);          
        }else{
            $("#hiddenMaleCat").show(); 
            $("#catPropertiesM").append("<strong>Name:</strong> " + catName + "<br>");
            $("#catPropertiesM").append('<strong>Age:</strong> ' + catAge + "<br>");
            $("#catPropertiesM").append('<strong>Gender: </strong> ' + catGender);
        }

        return false;
    });
});

