<h2>Chi tiết đơn hàng #<?php echo $order['id'] ?></h2>

<p>Người nhận: <?php echo $order['name'] ?></p>

<table>
  <tr><th>Sản phẩm</th><th>Số lượng</th><th>Đơn giá</th></tr>

  <?php foreach($order['details'] as $detail): ?>
    <tr>
      <td><?php echo $detail['product_name'] ?></td>
      <td><?php echo $detail['quantity'] ?></td>  
      <td><?php echo $detail['price'] ?></td>
    </tr>
  <?php endforeach; ?>

  <tr>
    <td colspan="2">Tổng tiền</td>
    <td><?php echo $order['total_price'] ?></td>
  </tr>

</table>