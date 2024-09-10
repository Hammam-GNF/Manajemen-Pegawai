<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Pegawai</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
        }

        .header {
            background: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #fff;
            color: #4CAF50;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #f1f1f1;
        }

        .section {
            padding: 50px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .feature-box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 300px;
            transition: transform 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .feature-box p {
            margin-bottom: 20px;
            color: #555;
        }

        .btn-secondary {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #45a049;
        }

        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
        }

        .footer p {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Manajemen Pegawai</h1>
            <p>Kelola data pegawai dengan mudah dan efisien</p>
            <!-- <a href="{{ route('pegawai.index') }}" class="btn-primary">Kelola Pegawai</a> -->
        </div>
    </header>

    <section id="manage" class="section">
        <div class="container">
            <h2>Fitur Manajemen Pegawai</h2>
            <div class="features">
                <div class="feature-box">
                    <h3>Tambah Pegawai</h3>
                    <p>Tambahkan pegawai baru ke sistem dengan mudah.</p>
                    <a href="/pegawai/create" class="btn-secondary">Tambah Pegawai</a>
                </div>
                <div class="feature-box">
                    <h3>Lihat Daftar Pegawai</h3>
                    <p>Lihat dan kelola semua pegawai yang terdaftar di perusahaan.</p>
                    <a href="/pegawai" class="btn-secondary">Lihat Daftar</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Manajemen Pegawai. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
