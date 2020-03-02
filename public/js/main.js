function getPage(page){
    var ajax= new XMLHttpRequest();
    ajax.open("get",page,true);
    ajax.onreadystatechange = function(){
        if(ajax.status == 4 && ajax.readyState == 200){
            document.getElementById('main').innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}