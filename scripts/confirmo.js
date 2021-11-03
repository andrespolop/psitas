function confirmo(e) {
    if (confirm("¿Esta seguro de que desea eliminar este registro?")){
        return true;
    } 
    else {
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".btne");

for (var i = 0 ; i < linkDelete.length; i++ ){
    linkDelete[i].addEventListener('click',confirmo);
}