<?php echo view('AdminSideBar.php'); ?>
<div class="content-wrapper" style="min-height: 1172.73px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Payment Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payment Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
       
        <?php
        function compareDates($a, $b) {
            return strtotime($b->created_at) - strtotime($a->created_at);
        }
        usort($payments, 'compareDates');
        ?>

        <div class="card-body payment-card">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>Student Name</th>
                        <th>Date</th>
                        <th>merchant Id</th>
                        <th>Sessions</th>
                        <th>Amount</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
foreach ($payments as $key => $payment) {
    echo "<tr>";
    echo "<td>" . ($key + 1) . "</td>";
    echo "<td>" . $payment->full_name . "</td>";
    $formattedDate = date("d-m-y", strtotime($payment->created_at));
    echo "<td>" . $formattedDate . "</td>";
    echo "<td>" . $payment->merchant_trans_id . "</td>";
    echo "<td>" . $payment->no_of_session . "</td>";
    echo "<td>" . $payment->total_amount . "</td>";

    // Check if the status is null
    if ($payment->status !== null) {
        echo '<td><small class="badge badge-success ">Sucessful</small></td>';
    } else {
        echo "<td>" . $payment->status . "</td>";
    }

    echo "</tr>";
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php echo view('AdminSideBar/AdminFooter.php');?>