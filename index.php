<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/main.css?<?php echo time(); ?>" type="text/css">

    <!-- VARELA ROUND FONT -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- APP TITLE -->
    <title>Bright HR</title>
  </head>
  <body>

    <!-- HEADER -->
    <header>
      <h1>Files & Folders</h1>
    </header>
    <!-- END OF HEADER -->


    <!-- FILTER SECTION -->
    <section id="filter" class="white">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                          <!-- JavaScript function to search the table to find a file name -->
                          <script>
                          function myFunction() {
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("myTable");
                            tr = table.getElementsByTagName("tr");

                            for (i = 0; i < tr.length; i++) {
                              td = tr[i].getElementsByTagName("td")[3];
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
                          </script>
                          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search For Files">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- END OF SECTION -->

    <!-- MAIN CONTENT SECTION -->
    <section id="content" class="white">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <h2>To filter the table select the heading</h2>
                    <!-- JavaScript function to filter the table headers -->
                    <script>
                    function sortTable(n) {
                      var table, rows, switching, i, w,x, y, z, shouldSwitch, dir, switchcount = 0;
                      table = document.getElementById("myTable");
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
                              shouldSwitch = true;
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
                    </script>
                    <!-- php load xml file & get contents from data.xml -->
                    <?php
                       $file = "data.xml";
                       print file_get_contents($file);
                    ?>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- END OF SECTION -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
