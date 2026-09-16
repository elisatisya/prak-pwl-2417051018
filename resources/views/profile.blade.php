<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            background-color: #eaf2ff;
        }

        .profile-container {
            width: 300px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
            overflow: hidden;
            text-align: center;
        }

        .header {
            background: linear-gradient(to right, #3b82f6, #2563eb);
            padding: 40px 0 60px;
        }

        .profile-photo {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 4px solid #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -55px auto 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .profile-photo svg {
            width: 55px;
            height: 55px;
            fill: #2563eb;
        }

        .body {
            padding: 25px 20px 30px;
        }

        .info-box {
            background-color: #f1f6ff;
            padding: 12px 16px;
            margin-bottom: 10px;
            border-radius: 8px;
            font-size: 16px;
            color: #1e3a8a;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="header"></div>
        <div class="profile-photo">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>
        </div>

        <div class="body">
            <div class="info-box">{{ $nama }}</div>
            <div class="info-box">{{ $kelas }}</div>
            <div class="info-box">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>