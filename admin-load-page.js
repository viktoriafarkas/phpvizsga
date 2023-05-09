function loadPage(url) {
    console.log(url);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pgmain").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
