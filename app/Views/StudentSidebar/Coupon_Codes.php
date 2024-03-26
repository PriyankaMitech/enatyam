<?php echo view('StudentSidebar/Studentsidebar'); ?>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    
}
.container{
    width: 100%;
    height: 58vh;
    background: #f0fff3;
    display: flex;
    align-items: center;
    justify-content: center;

}
.coupon-card{
    background: linear-gradient(135deg, #7158fe, #9d4de6);
    color: #fff;
    text-align: center;
    padding: 40px 80px;
    border-radius: 15px;
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.15);
    position: relative;

}
.logo{
    width: 100px;
    border-radius: 8px;
    margin-bottom: 20px;

}
.coupon-card h3{
    font-size: 28px;
    font-weight: 400;
    line-height: 40px;

}
.coupon-card p{
    font-size: 15px;

}
.coupon-row{
    display: flex;
    align-items: center;
    margin: 25px auto;
    width: fit-content;

}
#cpnCode{
    border: 1px dashed #fff;
    padding: 10px 20px;
    border-right: 0;

}
#cpnBtn{
    border: 1px solid #fff;
    background: #fff;
    padding: 10px 20px;
    color: #7158fe;
    cursor: pointer;
}
.circle1, .circle2{
    background: #f0fff3;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);

}
.circle1{
    left: -25px;
}
.circle2{
    right: -25px;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Coupon Codes</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <?php foreach ($Coupan_code as $code): ?>
                        <div class="coupon-card">
                            <img src="public/images/logoss.png" class="logo">
                            <h3><?php echo $code->percentage; ?>% flat off</h3>
                            <div class="coupon-row">
                                <span id="cpnCode"><?php echo $code->Coupan_code; ?></span>
                                <span id="cpnBtn">Copy Code</span>
                            </div>
                            <p>Valid Till: <?php echo date('d-M-Y', strtotime($code->expiry_date)); ?></p>
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('StudentSidebar/StudentFooter.php'); ?>

<script>
    var cpnBtns = document.querySelectorAll("#cpnBtn");
    var cpnCodes = document.querySelectorAll("#cpnCode");

    cpnBtns.forEach(function(cpnBtn, index) {
        cpnBtn.addEventListener("click", function() {
            navigator.clipboard.writeText(cpnCodes[index].textContent);
            cpnBtn.textContent = "COPIED";
            setTimeout(function() {
                cpnBtn.textContent = "COPY CODE";
            }, 3000);
        });
    });
</script>