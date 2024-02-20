<!DOCTYPE html>
<html lang="en">
    <style>

        .faq-section {
            max-width: 80%;
            margin: auto;
            margin-top: 50px;
        }

        .faq-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .faq-question {
            cursor: pointer;
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.3s ease-in-out;
            font-weight: bold;
            font-size: 18px;
            position: relative;
        }



        .faq-answer {
            display: none;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.5s ease-in-out;
            font-size: 16px;
        }

        .faq-section h4::before {
            content: "\2022"; /* Bullet point */
            color: #007bff; /* Blue color */
            display: inline-block;
            margin-right: 10px;
        }

        .faq-section .close-popup {
            font-weight: normal;
            cursor: pointer;
        }

        .faq-question.opened {
            background-color: #007bff;
            color: #fff;
        }

        .faq-question.opened:hover {
            background-color: #007bff; /* Keep the color when hovering */
        }

        .faq-question:not(.opened):hover,
        .faq-answer:hover {
            background-color: #e9ecef;
        }

        /* Adjusted animation duration */
        .faq-answer {
            transition: background-color 0.7s ease-in-out;
        }
    </style>
</head>
<body>

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="faq-title">FAQ</div>
        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <h4>Apa saja layanan pelatihan yang disediakan oleh perusahaan ini?</h4>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Kami menyediakan berbagai jenis layanan pelatihan, mulai dari pelatihan keterampilan teknis hingga pelatihan manajemen dan pengembangan kepemimpinan. Rincian layanan dapat ditemukan di halaman kami..</p>
        </div>

        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <h4>Apa saja layanan pelatihan yang disediakan oleh perusahaan ini?</h4>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Kami menyediakan berbagai jenis layanan pelatihan, mulai dari pelatihan keterampilan teknis hingga pelatihan manajemen dan pengembangan kepemimpinan. Rincian layanan dapat ditemukan di halaman kami..</p>
        </div>
        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <h4>Apa saja layanan pelatihan yang disediakan oleh perusahaan ini?</h4>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Kami menyediakan berbagai jenis layanan pelatihan, mulai dari pelatihan keterampilan teknis hingga pelatihan manajemen dan pengembangan kepemimpinan. Rincian layanan dapat ditemukan di halaman kami..</p>
        </div>
        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <h4>Apa saja layanan pelatihan yang disediakan oleh perusahaan ini?</h4>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Kami menyediakan berbagai jenis layanan pelatihan, mulai dari pelatihan keterampilan teknis hingga pelatihan manajemen dan pengembangan kepemimpinan. Rincian layanan dapat ditemukan di halaman kami..</p>
        </div>
        <!-- Add more FAQ items similarly -->

    </div>

    <!-- Tombol WhatsApp -->

    <!-- your existing JavaScript imports -->


    <script>
        // your existing JavaScript code
        
        // FAQ Animation
        document.querySelectorAll('.faq-question').forEach(function (question) {
            question.addEventListener('click', function () {
                var answer = this.nextElementSibling;
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    question.classList.remove('opened');
                } else {
                    answer.style.display = 'block';
                    question.classList.add('opened');
                }
            });
        });
    </script>
</body>
</html>


@section('faq-animation')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection