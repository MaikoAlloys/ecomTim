<?php include 'includes/config.php' ?>

<?php

    if (isset($_POST['btnSubmit'])) {
        $item_purchase_code = $_POST['item_purchase_code'];
        
        // Here, you can add any additional checks or validation for the purchase code if needed.
        
        // Assuming no errors, you can proceed to the redirection.
        header('Location: dashboard.php');
        exit; // Make sure to exit to prevent further code execution.
    }

?>

<div class="verifycard">
    <div class="pmd-card card-default pmd-z-depth dashboard">
        <div class="login-card">
            <form method="POST">
                <br>
                <div class="pmd-card-title card-header-border text-center">
                    <div class="lead"><img src="assets/images/ic_envato.png" width="24" height="24"> Click Submit to Continue Using Admin Panel.</div>
                </div>
                
                <div class="pmd-card-body">
                    <!-- No error messages are shown in this version -->
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="item_purchase_code" class="control-label pmd-input-group-label">You</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">v</i></div>
                            <input type="text" name="item_purchase_code" class="form-control" id="item_purchase_code">
                        </div>
                    </div>
                </div>
                
                <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                    <div class="form-group clearfix">
                    </div>
                    <button type="submit" name="btnSubmit" class="btn pmd-ripple-effect btn-danger btn-block">Submit</button>
                    <br>
                    <br>
                    <h3 class="pmd-card-subtitle-text">
               
                    </h3>
                </div>
            </form>
        </div>
    </div>
</div>
