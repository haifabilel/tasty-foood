<?php 
require_once 'connexion.php';
require_once '../templates/head.php';
require_once 'menu.php';
?><div class="main-content">
    <div class="wrapper">
        <h1>Update order</h1>
        <form action="" method="POST">
            <table class="">
                <tr>
                    <td>Menu</td>
                    <td></td>
                </tr>
                   <tr>
                    <td>Quanité</td>
                    <td>
                        <input type="number" name="qty" value="">
                    </td>
                   </tr>
                   <tr>
                    <td>Status</td>
                    <td>
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">En attente</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </td>
                   </tr>
            </table>
        </form>
    </div>
</div>