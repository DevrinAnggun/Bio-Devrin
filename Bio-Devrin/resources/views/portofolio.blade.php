<!-- resources/views/portfolio.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - {{ $nama ?? 'Nama Anda' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #00796b;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .content {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 25px;
        }
        h2 {
            color: #00796b;
        }
        .contact-info a {
            color: #00796b;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $nama ?? 'Nama Anda' }}</h1>
        <p>{{ $profesi ?? 'Profesi / Bidang' }}</p>
    </header>

    <div class="content">
        <div class="section">
            <h2>Tentang Saya</h2>
            <p>{{ $deskripsi ?? 'Deskripsi singkat tentang dirimu.' }}</p>
        </div>

        <div class="section">
            <h2>Skill</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>Laravel, PHP</li>
                <li>Flutter, Firebase</li>
                <!-- Tambahkan lainnya -->
            </ul>
        </div>

        <div class="section">
            <h2>Pengalaman</h2>
            <ul>
                <li>Internship di PT. ABC - 2023</li>
                <li>Freelancer Web Developer - 2022–2024</li>
                <!-- Tambahkan lainnya -->
            </ul>
        </div>

        <div class="section contact-info">
            <h2>Kontak</h2>
            <p>Email: <a href="mailto:youremail@example.com">youremail@example.com</a></p>
            <p>LinkedIn: <a href="https://linkedin.com/in/namamu">linkedin.com/in/namamu</a></p>
        </div>
    </div>
</body>
</html>
