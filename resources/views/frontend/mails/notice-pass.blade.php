<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư Mời Phỏng Vấn</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; text-align: center;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <h1 style="color: #007BFF;">Thư Mời Phỏng Vấn</h1>

        <p>Kính gửi {{$name}},</p>

        <p>Chúng tôi trân trọng thông báo rằng bạn đã được chọn để tham gia buổi phỏng vấn với chúng tôi về vị trí {{$job_pass->position}} tại {{$job_pass->companys->name_compn}}.</p>

        <p>Thông tin chi tiết về buổi phỏng vấn như sau:</p>

        <ul style="list-style-type: none; padding: 0;">
            <li><strong>Thời gian:</strong> Ngày {{$job_pass->exp_date}} vào lúc 7h30</li>
            <li><strong>Địa điểm:</strong> {{$job_pass->companys->address}}</li>
            <li><strong>Người liên hệ:</strong> {{$user_emp->name}}</li>
            <li><strong>Số điện thoại liên hệ:</strong> {{$user_emp->phone}}</li>
        </ul>

        <p>Xin vui lòng xác nhận sự có mặt của bạn bằng cách trả lời thư này hoặc liên hệ với chúng tôi qua số điện thoại trên.</p>

        <p>Chúng tôi rất mong được gặp bạn và chia sẻ thêm về cơ hội làm việc cùng nhau.</p>

        <p style="font-style: italic; color: #888;">Trân trọng,</p>
        <p style="font-weight: bold;">{{$job_pass->companys->name_compn}}</p>

    </div>

</body>
</html>
