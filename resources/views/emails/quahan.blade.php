<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo quá hạn sách</title>
</head>
<body>
    <h2>Xin chào {{ $nguoidung->ho_ten }},</h2>
    <p>Bạn đã mượn sách<strong> {{ $sach->tieu_de }} </strong>Nhưng chưa trả đúng hạn.</p>
    <p>Ngày hết hạn: <strong>{{ $muontra->han_tra }}</strong></p>
    <p>Vui lòng trả sách sớm nhất có thể tại thư viện để tránh phí phạt.</p>
    <p>Trân trọng,</p>
    <p>Thư viện sách</p>
</body>
</html>