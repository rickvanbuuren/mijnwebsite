$(document).ready(function(){
    $( "#togglenav" ).click(function() {
        if($( ".sidebar" ).hasClass( "open" )){
            $( ".sidebar" ).removeClass( "open" );
        }else{
            $( ".sidebar" ).addClass( "open" );
        }
    });
    $( ".sidebar nav a" ).click(function() {
        if($( ".sidebar" ).hasClass( "open" )){
            $( ".sidebar" ).removeClass( "open" );
        }else{
            $( ".sidebar" ).addClass( "open" );
        }
    });
});

function loadHomePage(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("content").innerHTML = this.responseText;
            document.location.hash = 'home';
            // document.location.href = String(document.location.href).replace( "#/home", "/home" );
        }
    };
    xhttp.open("GET", "pagecontent/home.txt", true);
    xhttp.send();
}
function loadAboutMePage(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("content").innerHTML = this.responseText;
            document.location.hash = 'aboutme';
        }
    };
    xhttp.open("GET", "pagecontent/aboutme.txt", true);
    xhttp.send();
}
function loadLoginPage(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("content").innerHTML = this.responseText;
            document.location.hash = 'login';
        }
    };
    xhttp.open("GET", "pagecontent/login.txt", true);
    xhttp.send();
}

loadHomePage();