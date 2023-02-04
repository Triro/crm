//Filtro Tablas Ventas

function searchTableVentas() {
    // Get the input field value
    var input = document.getElementById("searchTV").value.toLowerCase();
    console.log(input);

    // Get the table rows
    var table = document.getElementById("tablaVentas");
    var rows = table.getElementsByTagName("tr");
    
    // Loop through all the rows
    for (var i = 0; i < rows.length; i++) {
      var idp = rows[i].getElementsByTagName("td")[0];
      var fechai = rows[i].getElementsByTagName("td")[1];
      var fechaf = rows[i].getElementsByTagName("td")[2];
      var cliente = rows[i].getElementsByTagName("td")[3];
      var estado = rows[i].getElementsByTagName("td")[4];
      var precio = rows[i].getElementsByTagName("td")[5];
      var costo = rows[i].getElementsByTagName("td")[6];
      var descuento = rows[i].getElementsByTagName("td")[7];
      var moneda = rows[i].getElementsByTagName("td")[8];
      var tipo = rows[i].getElementsByTagName("td")[9];
      if (idp || fechai || fechaf || cliente || estado || precio || costo || descuento || moneda || tipo) {
        var text = idp.textContent.toLowerCase() + fechai.textContent.toLowerCase() + fechaf.textContent.toLowerCase() + cliente.textContent.toLowerCase() + estado.textContent.toLowerCase() + precio.textContent.toLowerCase() + costo.textContent.toLowerCase() + descuento.textContent.toLowerCase() + moneda.textContent.toLowerCase() + tipo.textContent.toLowerCase();
        if (text.indexOf(input) == -1) {
          rows[i].style.display = "none";
        } else {
          rows[i].style.display = "";
        }
      }
    }
  }

//Sort Tabla Ventas

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tablaVentas");
  switching = true;
  dir = "asc"; 
  
  while (switching) {
    switching = false;
    rows = table.rows;
    
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++; 
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

//SideBar

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}



