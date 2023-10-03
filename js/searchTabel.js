function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Looping semua baris pada tabel, sembunyikan yang tidak cocok dengan input search
    for (i = 0; i < tr.length; i++) {
        nama = tr[i].getElementsByTagName("td")[1];
        status = tr[i].getElementsByTagName("td")[4];
        if (nama) {
            txtValue1 = nama.textContent || nama.innerText || status.textContent || status.innerText;
            if (txtValue1.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}