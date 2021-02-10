<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>

<!---- Shopping cart ---->
<div class="small-container">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <tr>
        <!-- if not logged in prompt for login/register; then take products stored in cart under customer related data and load them here-->
            <td>
                <div class="cart-info">
                    <img src="jpg/razer1.jpg"/>
                    <div>
                        <p>Razer headset</p>
                        <small>Price: £20.00</small>
                        <br>
                        <a href="#">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>£20.00</td>
        </tr>
    </table>

</div>


<?php
        outputFooter("Home");
?>