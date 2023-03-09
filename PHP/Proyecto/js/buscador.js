function recogerEscrito()
{
    let escrito = document.getElementById("buscador").value;

    if (escrito.length == 0)
    {
        document.getElementById("datalista") = "";
        return;
    }
    else
    {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
         {
            
            if (this.readyState == 4 && this.status == 200)
            {
                console.log(escrito);
                document.getElementById("datalista").innerHTML = this.responseText;
            }
        };
        
     xmlhttp.open("GET", "http://10.10.30.174/joseluis/getBuscador.php?param=" + escrito, true);
     xmlhttp.send();
    }
    
}