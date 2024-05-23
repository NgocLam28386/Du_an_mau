<div class="row">
    <div class="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <body>
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    $tongdm = count($listthongke);
                    $i = 1;
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        if ($i == $tongdm) {
                            $dauphay = "";
                        } else {
                            $dauphay = ",";
                        }
                        echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                        $i += 1;
                    }
                    ?>
                ]);

                var options = {
                    title: 'Thống kê sản phẩm'
                };

                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
</div>