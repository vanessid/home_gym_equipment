<?php include_once("database/connect.php"); ?>
<?php if (isset($_SESSION['user'])) : ?>
    <?php $page = 'Wanted'; ?>

    <!----Header ---->
    <?php include_once('includes/header.php') ?>



    <section class="campus">
        <input type="text" id="myInput" onkeyup="search_table()" placeholder="Search for names..">

        <table id="myTable">
            <tr class="header">
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Germany</td>
                <td>Price</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Berglunds snabbkop</td>
                <td>Sweden</td>
                <td>Price</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>UK</td>
                <td>Price</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>Koniglich Essen</td>
                <td>Germany</td>
                <td>Price</td>
                <td>Price</td>
            </tr>
        </table>
    </section>

    <!----Call To Action----->

    <section class="cta">
        <h1>Search for wanted Products</h1>
    </section>

    <!----Footer----->
    <script>
        function search_table() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
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
    <?php include_once('includes/footer.php') ?>
<?php else : ?>
    <?php include_once('login.php') ?>
<?php endif; ?>