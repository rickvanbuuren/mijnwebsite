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

function loadPage(pageName){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("content").innerHTML = this.responseText;
            document.location.hash = '' + pageName;
        }
    };
    xhttp.open("GET", "pagecontent/" + pageName + ".txt", true);
    xhttp.send();
}

loadPage("home");
