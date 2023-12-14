@extends('layouts.main')
<head>
    <title>Frequently Asked Questions</title>
</head>
@section('container')
<h1 class="text-center">Frequently Asked Question</h1>
<body>
    <div class="faq-container">
        <div class="faq-item">
            <div class="faq-question">Apa itu SIMPAN?</div>
            <div class="faq-answer">
                SIMPAN merupakan singkatan dari Sistem Informasi Manajemen Pengetahuan.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Apa itu SPBE?</div>
            <div class="faq-answer">
                SPBE merupakan singkatan dari Sistem Pemerintahan Berbasis Elektronik.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Tujuan dari website SIMPAN SPBE itu apa?</div>
            <div class="faq-answer">
                Bertujuan untuk memfasilitasi pertukaran informasi dan alih pengetahuan antar pelaksana SPBE melalui Artikel, Forum, dan Help Desk yang dikelompokkan berdasarkan lingkup tertentu
            </div>
        </div>
        <!-- Tambahkan lebih banyak FAQ item sesuai kebutuhan -->
    </div>
</body>
</html>

@endsection