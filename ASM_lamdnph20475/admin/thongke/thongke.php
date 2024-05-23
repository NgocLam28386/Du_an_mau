<div class="row">
    <div class="row formtitle mb10">
        <h1>Danh sách thống kê</h1>

    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá TB</th>
                </tr>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $maxprice . '</td>
                            <td>' . $minprice . '</td>
                            <td>' . $avgprice . '</td>
                        </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>