function buscar() {
    // declaro variable
    var input, filter, table, tr, td, i, txtValue, option;

    opt = document.getElementById("op").value;

    input = document.getElementById("buscar");
    filter = input.value.toUpperCase();
    table = document.getElementById("tabla");
    tr = table.getElementsByTagName("tr");
    console.log(opt);

    // recorro las filas y oculto l q no contiene la busqueda

    for (i = 0; i < tr.length; i++) {

        td = tr[i].getElementsByTagName("td")[opt];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";

            } else {
                tr[i].style.display = "none";

            }
        }
    }
}