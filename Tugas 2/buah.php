<!DOCTYPE html>
<html>
<head>
    <title>Data Buah</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightblue;
        }
    </style>
</head>
<body>

    <h2>Daftar Data Buah</h2>

    <?php
    $buah = array(
        array("Apel", "Supermarket", 15000),
        array("Pisang", "Hypermart", 10000),
        array("Jeruk", "Pasar", 12000),
        array("Anggur", "Supermarket", 20000),
        array("Semangka", "Pasar", 18000)
    );
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Buah</th>
            <th>Tempat Pembelian</th>
            <th>Harga per Kg</th>
        </tr>

        <?php
        for ($i = 0; $i < count($buah); $i++) {
        ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $buah[$i][0]; ?></td>
            <td><?php echo $buah[$i][1]; ?></td>
            <td>Rp <?php echo number_format($buah[$i][2], 0, ',', '.'); ?></td>
        </tr>
        <?php
        }
        ?>

    </table>

</body>
</html>