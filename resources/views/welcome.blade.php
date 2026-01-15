<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Inventori | Kantor Pertanahan Kota Kendari</title>

    <link rel="stylesheet" href="{{ asset('css/inventori.css') }}">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            overflow-x: hidden;
        }

        /* floating shapes */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            animation: float 12s infinite ease-in-out;
        }

        .circle.one {
            width: 220px;
            height: 220px;
            top: 10%;
            left: -60px;
        }

        .circle.two {
            width: 160px;
            height: 160px;
            bottom: 15%;
            right: -50px;
            animation-delay: 3s;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-25px); }
            100% { transform: translateY(0); }
        }

        /* hero */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .hero-box {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(14px);
            padding: 45px;
            border-radius: 22px;
            max-width: 720px;
            text-align: center;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            animation: fadeIn 1.2s ease;
            z-index: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-box h1 {
            font-size: 34px;
            margin-bottom: 8px;
        }

        .hero-box h1 span {
            color: #f9ca24;
        }

        .hero-box p {
            font-size: 16px;
            line-height: 1.8;
            opacity: 0.95;
            margin: 20px 0 35px;
        }

        /* feature icons */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-bottom: 35px;
        }

        .feature-box {
            background: rgba(255,255,255,0.15);
            padding: 15px;
            border-radius: 14px;
            font-size: 14px;
            transition: 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-6px);
            background: rgba(255,255,255,0.25);
        }

        /* buttons */
        .hero-buttons a {
            display: inline-block;
            padding: 14px 22px;
            margin: 6px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            font-size: 15px;
        }

        .btn-primary {
            background: #2ecc71;
            color: white;
        }

        .btn-primary:hover {
            background: #27ae60;
            transform: scale(1.05);
        }

        .btn-secondary {
            background: white;
            color: #2c3e50;
        }

        .btn-secondary:hover {
            background: #ecf0f1;
            transform: scale(1.05);
        }

        footer {
            margin-top: 35px;
            font-size: 13px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

<!-- floating decoration -->
<div class="circle one"></div>
<div class="circle two"></div>

<div class="hero">
    <div class="hero-box">

        <h1>Sistem Inventori <span>Barang</span></h1>
        <h1>Kantor Pertanahan Kota Kendari</h1>

        <p>
            Sistem informasi berbasis web untuk membantu pengelolaan
            inventaris barang kantor secara <b>efisien</b>, <b>terstruktur</b>,
            dan <b>akurat</b>.  
            Dikembangkan menggunakan <b>Laravel</b> sebagai bagian dari
            kegiatan <b>Magang Mahasiswa Ilmu Komputer</b>.
        </p>

        <div class="features">
            <div class="feature-box">📋 Manajemen Data Barang</div>
            <div class="feature-box">📦 Barang Masuk & Keluar</div>
            <div class="feature-box">📊 Laporan Inventori</div>
            <div class="feature-box">🔐 Akses Admin</div>
        </div>

        <div class="hero-buttons">
            <a href="/barang" class="btn-primary"> Lihat Data Barang</a>
        </div>

        <footer>
            © {{ date('Y') }} | Mahasiswa Ilmu Komputer – Magang  
            <br>Kantor Pertanahan Kota Kendari
        </footer>

    </div>
</div>

</body>
</html>
