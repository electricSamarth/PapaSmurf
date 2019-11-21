//jQuery code snippet
//$("#contactForm").submit(function(event){
    // cancels the form submission
    //event.preventDefault();
    //submitForm();
//})

//edited jQuery code snippet - using bootstrap validator
$("#contactform").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
         $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();}) // form will shake if invalid. If user submits the same thing again, it shake animation will play again.
        submitMSG(false, "Please fill the form properly. ");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

//Handling message status - success or failure
function submitMSG(valid, msg){
        var msgClasses;
    if(valid){
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center pulse animated text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    //initiate AJAX object within jQuery
    $.ajax({
        type: "POST",
        url: "contactform-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success")
            {
                $("#contactForm")[0].reset(); //reset form, clear values
				submitMSG(true, "Message Submitted!") 
            }
            else
            {
            	$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
            	submitMSG(false,text);
            }
        }
    });
}

//Handling message status - success or failure
function submitMSG(valid, msg){
        var msgClasses;
    if(valid){
        msgClasses = "h3 text-center tada animated text-success"; //tada is from animate.css
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}