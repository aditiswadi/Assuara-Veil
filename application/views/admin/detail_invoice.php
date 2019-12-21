<div class="container-fluid">
   <h4> Detail pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div></h4>

   <table class="table table-bordered table-hover table-striped">

        <tr>
             <th>ID BARANG</th>
             <th>NAMA PRODUK</th>
             <th>JUMLAH PESANAN</th>
             <th>HARGA SATUAN</th>
             <th>SUB-TOTAL</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        
        ?>

        <tr>
             <td><?php echo $psn->id_produk ?></td>
             <td><?php echo $psn->nama ?></td>
             <td><?php echo $psn->jumlah ?></td>
             <td><?php echo number_format($psn->harga,0,',','.') ?></td>
             <td><?php echo number_format($subtotal,0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</div>