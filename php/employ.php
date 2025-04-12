<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 20px auto;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table thead {
            background-color:rgb(0, 0, 0);
            color: white;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .delete-btn {
            background-color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h2 class="text-center text-black">Danh sách nhân viên</h2>    
        <?php
        // khai báo mảng mô tả dữ liệu
        $employ = [
            [ 'STT' => 1, 'Ho_chu_lot' => 'Huỳnh', 'Ten' => 'Hùng', 'Que_quan' => 'Hà Nội', 'Trinh_do' => 'Đại Học', 'He_so_luong' => 2.0 ],
            [ 'STT' => 2, 'Ho_chu_lot' => 'Đặng Tiến', 'Ten' => 'Hoàng', 'Que_quan' => 'Hà Nội', 'Trinh_do' => 'Sau Đại Học', 'He_so_luong' => 2.3 ],
            [ 'STT' => 3, 'Ho_chu_lot' => 'Phan Thị Mỹ', 'Ten' => 'Tâm', 'Que_quan' => 'Đà Nẵng', 'Trinh_do' => 'Cao Đẳng', 'He_so_luong' => 1.2 ],
            [ 'STT' => 4, 'Ho_chu_lot' => 'Trần Minh', 'Ten' => 'Hiếu', 'Que_quan' => 'TPHCM', 'Trinh_do' => 'Cao Đẳng', 'He_so_luong' => 1.5 ],
            [ 'STT' => 5, 'Ho_chu_lot' => 'Nguyễn Quang', 'Ten' => 'Hùng', 'Que_quan' => 'Huế', 'Trinh_do' => 'Đại Học', 'He_so_luong' => 1.7 ]
        ];
        
        // in bảng dữ liệu với Bootstrap
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped table-bordered table-hover" id="person-table">';
        echo '<thead class="table-bg-dark">';
        echo '<tr>
                <th>Xoá</th>
                <th>STT</th>
                <th>Họ chữ lót</th>
                <th>Tên</th>
                <th>Quê quán</th>
                <th>Trình độ</th>
                <th>Hệ số lương</th>
              </tr>';
        echo '</thead>';
        echo '<tbody>';
        
        foreach ($employ as $index => $employ) {
            echo '<tr id="row-' . $index . '">';
            echo '<td><button class="btn btn-danger btn-sm delete-btn btn-center" data-row="row-' . $index . '">X</button></td>';
            echo '<td class="stt-cell">' . $employ['STT'] . '</td>';
            echo '<td>' . $employ['Ho_chu_lot'] . '</td>';
            echo '<td>' . $employ['Ten'] . '</td>';
            echo '<td>' . $employ['Que_quan'] . '</td>';
            echo '<td>' . $employ['Trinh_do'] . '</td>';
            echo '<td>' . $employ['He_so_luong'] . '</td>';
            echo '</tr>';
        }
    
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- thêm js cho nút xóa -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const deleteButtons = document.querySelectorAll('.delete-btn');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const rowId = this.getAttribute('data-row');
                    const rowElement = document.getElementById(rowId);
                    if (rowElement) {
                        rowElement.remove();
                        // cập nhật số thứ tự sau khi xóa
                        updateSequenceNumbers();
                    }
                });
            });
            
            // hàm cập nhật số thứ tự
            function updateSequenceNumbers() {

                const rows = document.querySelectorAll('#person-table tbody tr');
                
                // cập nhật số thứ tự cho từng hàng
                rows.forEach((row, index) => {
                    // tìm ô STT trong hàng và cập nhật giá trị
                    const sttColumn = row.querySelector('.stt-cell');
                    if (sttColumn) {
                        sttColumn.textContent = index + 1;
                    }
                });
            }
        });
    </script>
</body>
</html>