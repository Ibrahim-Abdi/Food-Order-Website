<?php include('partials/menu.php'); ?>

<div class="main-content ">
        <div class="wrapper">
            <h1>Add Admin</h1>

            <br /><br />
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td>
                            <input type="text" name="FullName" placeholder="Enter Your Name...">
                        </td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="email" name="Username" placeholder="Your Username...">
                        </td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="Password" name="Password" placeholder="Your Password...">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</div>
<?php include('partials/footer.php'); ?>