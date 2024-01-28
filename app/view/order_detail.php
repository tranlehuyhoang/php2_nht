<h2>Chi tiết đơn hàng #<?php echo $order['id'] ?></h2>

<p>Người nhận: <?php echo $order['email'] ?></p>

<table>
    <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
    </tr>

    <?php foreach ($orderDetails as $detail) : ?>
    <tr>
        <td><?php echo $detail['product_id'] ?></td>
        <td><?php echo $detail['quantity'] ?></td>
        <td><?php echo $detail['product_price'] ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td colspan="2">Tổng tiền</td>
        <td><?php echo $order['total_price'] ?></td>
    </tr>

</table>