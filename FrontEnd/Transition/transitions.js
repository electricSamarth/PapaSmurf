$(document).ready(function(){
    $('#nvg').click(transit_out);

    // Other event handlers.
});
//use of jquery
function transiti(i)
{
    var ids=["play","community","login","about","contact"];
    id=ids[i];
    $('#out_square').css({visibility:"visible"});
    $('#out_square').css({width:"100%"});
    $('#out_square').css({height:"100%"});
    setTimeout(load_page, 1500,id);
}
function transit_out(e) //prints logo animation
{
    $('#out_square').css({visibility:"visible"});
    $('#out_square').css({width:"100%"});
    $('#out_square').css({height:"100%"});
    setTimeout(load_page, 1500,e.target.id);
}

function load_page(id_target) //loads next page
{
    if (id_target=="home")
    {
        window.location.href = "Home_Page.html";
    }
    else if(id_target=="login")
    {
        window.location.href = "Login_Page.php";
    }
    else if(id_target=="signup")
    {
        window.location.href = "Signup_Page.php";
    }
    else if(id_target=="about")
    {
        window.location.href = "About_Page.html";
    }
    else if(id_target=="contact")
    {
        window.location = "Contact_Page.php"; //to be php
    }
    else if(id_target=="play")
    {
        window.location.href = "Play_Page.html";
    }
    else if(id_target=="community")
    {
        window.location.href = "Community_Page.html";
    }
    else if(id_target=="forum")
    {
        window.location = "Forum_Page.php";
    }
    else if(id_target=="1")
    {
        window.location = "Forum_subthread.php";
    }
    else if(id_target=="upload")
    {
        window.location = "Upload_Page.php";
    }
}