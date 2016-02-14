<!DOCTYPE html>

<html lang="en">
<head>


        function numbersonly(e) {
            var unicode = e.charCode ? e.charCode : e.keyCode
            if (unicode != 8 && unicode != 46 && unicode != 37 && unicode != 38 && unicode != 39 && unicode != 40) { //if the key isn't the backspace key (which we should allow)
                if (unicode < 48 || unicode > 57)
                    return false
            }
        }
        function change_balance() {
            if (parseFloat(document.getElementById('new_payment').value) > parseFloat(document.getElementById('balance').value)) {
                document.getElementById('new_payment').value = parseFloat(document.getElementById('balance').value);
            }
        }

        function sales_report_fn() {
            window.open("sales_report.php?from_sales_date=" + $('#from_sales_date').val() + "&to_sales_date=" + $('#to_sales_date').val(), "myNewWinsr", "width=620,height=800,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes");

        }
        function purchase_report_fn() {
            window.open("purchase_report.php?from_purchase_date=" + $('#from_purchase_date').val() + "&to_purchase_date=" + $('#to_purchase_date').val(), "myNewWinsr", "width=620,height=800,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes");

        }

        function sales_purchase_report_fn() {
            window.open("all_report.php?from_sales_purchase_date=" + $('#from_sales_purchase_date').val() + "&to_sales_purchase_date=" + $('#to_sales_purchase_date').val(), "myNewWinsr", "width=620,height=800,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes");

        }

        function stock_sales_report_fn() {
            window.open("sales_stock_report.php?from_stock_sales_date=" + $('#from_stock_sales_date').val() + "&to_stock_sales_date=" + $('#to_stock_sales_date').val(), "myNewWinsr", "width=620,height=800,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes");

        }
    </script>

</head>
<body>

<!-- TOP BAR -->
<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width cf">

			<ul id="nav" class="fl">
	
				<li class="v-sep"><a href="javascript:void(0);" onclick="javascript:window.open('shortcuts.html','myNewWinsr','width=600,height=110,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes');" class="round button dark ic-info image-left">Show Shortcuts</a></li>
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>admin</strong></a>
					<ul>
				
						<li><a href="change_password.php">Change Password</a></li>
						
						<li><a href="logout.php">Log out</a></li>
					</ul> 
				</li>
			<li><a href="update_details.php" class="round button dark menu-settings image-left">Update Store Details</a></li>
				<li><a href="logout.php" class="round button dark menu-logoff image-left">Log out</a></li>
				
			</ul> <!-- end nav -->

					
			<form action="#" method="POST" id="search-form" class="fr">
				<fieldset>
					<input type="text" id="search-keyword" class="round button dark ic-search image-right" placeholder="Search..." />
					<input type="hidden" value="SUBMIT" />
				</fieldset>
			</form>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar --><!-- end top-bar -->


<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class="sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class="stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class=" payment-tab">Payments / Outstandings</a></li>
            <li><a href="view_report.php" class="active-tab report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 30px height. -->
        <a href="#" id="company-branding-small" class="fr"><img src="upload/google.png" alt="Point of Sale"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>Report</h3>
            <ul>
                <ul>
                    <li><a></a></li>

                </ul>
            </ul>


        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Report</h3>
                    <span class="fr expand-collapse-text">Click to collapse</span>
                    <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">
                    <form action="">

                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <form action="sales_report.php" method="post" name="form1" id="form1" name="sales_report"
                                  id="sales_report" target="myNewWinsr">
                                <tr>

                                    <td><strong>Sales Report </strong></td>
                                    <td>From</td>
                                    <td><input name="from_sales_date" type="text" id="from_sales_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_sales_date" type="text" id="to_sales_date" style="width:80px;">
                                    </td>
                                    <td><input name="submit" type="button" value="Show" onClick='sales_report_fn();'>
                                    </td>

                                </tr>
                            </form>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="purchase_report.php" method="post" name="purchase_report" target="_blank">
                                <tr>
                                    <td><strong>Purchase Report </strong></td>
                                    <td>From</td>
                                    <td><input name="from_purchase_date" type="text" id="from_purchase_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_purchase_date" type="text" id="to_purchase_date"
                                               style="width:80px;"></td>
                                    <td><input name="submit" type="button" value="Show" onClick='purchase_report_fn();'>
                                    </td>
                                </tr>
                            </form>

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="sales_purchase_report.php" method="post" name="sales_purchase_report"
                                  target="_blank">
                                <tr>
                                    <td><strong>Purchase Stocks </strong></td>
                                    <td>From</td>
                                    <td><input name="from_sales_purchase_date" type="text" id="from_sales_purchase_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_sales_purchase_date" type="text" id="to_sales_purchase_date"
                                               style="width:80px;"></td>
                                    <td><input name="submit" type="button" value="Show"
                                               onClick='sales_purchase_report_fn();'></td>
                                </tr>
                            </form>

                        </table>


                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

    </div>
    <!-- end content -->


    <!-- FOOTER -->
    <div id="footer">
        <p>Any Queries email to <a href="mailto:sridhar.posnic@gmail.com?subject=Stock%20Management%20System">sridhar.posnic@gmail.com</a>.
        </p>

    </div>
    <!-- end footer -->

</body>
</html>
