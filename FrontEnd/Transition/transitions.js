
document.getElementById("nvg").addEventListener("click",transit_out,true);
document.getElementById("signup").addEventListener("click",transit_out,true);



function transiti(i)
{
    var ids=["play","community","login","about","contact"];
    id=ids[i];
    document.getElementById("out_square").style.visibility = "visible";
    document.getElementById("out_square").style.width= "100%";
    document.getElementById("out_square").style.height = "100%";
    setTimeout(load_page, 1500,id);
}
function transit_out(e) //prints logo animation
{
    document.getElementById("out_square").style.visibility = "visible";
    document.getElementById("out_square").style.width= "100%";
    document.getElementById("out_square").style.height = "100%";
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
        window.location.href = "Contact_Page.html";
    }
    else if(id_target=="play")
    {
        window.location.href = "Play_Page.html";
    }
    else if(id_target=="community")
    {
        window.location.href = "Community_Page.html";
    }
    else if(id_target=="lbs")
    {
        window.location.href = "Leaderboard_Page.html";
    }
    else if(id_target=="forum")
    {
        window.location.href = "Forum_Page.html";
    }
    else if(id_target=="upload")
    {
        window.location.href = "Upload_Page.html";
    }
}