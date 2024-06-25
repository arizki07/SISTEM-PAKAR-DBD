<!-- Libs JS -->
<script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('assets/dist/js/tabler.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/js/demo.min.js?1684106062') }}" defer></script>
<script src="{{ asset('assets/dist/libs/litepicker/dist/litepicker.js') }}" defer></script>
<script src="{{ asset('assets/dist/libs/fslightbox/index.js?1684106062') }}" defer></script>

<script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>

<link href="{{ asset('assets/extentions/xeditable/jquery-editable.css') }}" rel="stylesheet" />
<script src="{{ asset('assets/extentions/xeditable/jquery-editable-poshytip.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/extentions/datatables/datatables.min.js') }}"></script>
<link href="{{ asset('assets/extentions/datatables/DataTables-1.13.4/css/dataTables.bootstrap5.css') }}"
    rel="stylesheet">
<link href="{{ asset('assets/extentions/datatables/Buttons-2.3.4/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/extentions/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/DataTables-1.13.4/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Buttons-2.3.4/js/buttons.bootstrap5.min.js') }}"></script>

<script src="{{ asset('assets/extentions/datatables/Select-1.6.0/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/extentions/datatables/Select-1.6.0/js/select.dataTables.min.js') }}"></script>

<script src="{{ asset('assets/extentions/select2/js/select2.full.min.js') }}" defer></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('assets/extentions/richtext/jquery.richtext.min.js') }}"></script>
<script src="{{ asset('assets/extentions/jquery.mask.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 10, // Set initial page length
            "lengthMenu": [10, 25, 50, "All"], // Define options for page length
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "infoFiltered": "(difilter dari total _MAX_ data)",
                "search": "Cari:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });

    var timerInterval;

    function getPos(e) {
        clearInterval(timerInterval);
    }

    function startTimerWhenStopped(duration, display) {
        clearInterval(timerInterval);
        var timer = duration;
        display.text(formatTime(timer));
        timerInterval = setInterval(function() {
            timer--;
            if (timer < 0) {
                clearInterval(timerInterval);
                logout(); // Panggil fungsi logout saat waktu habis
            } else {
                display.text(formatTime(timer));
            }
        }, 1000);
    }

    function stopTimerWhenMoving() {
        clearInterval(timerInterval);
        var display = $('#timer');
        display.text("15:00");
    }

    function formatTime(seconds) {
        let hours = Math.floor(seconds / 3600);
        let minutes = Math.floor((seconds % 3600) / 60);
        let remainingSeconds = seconds % 60;

        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        remainingSeconds = (remainingSeconds < 10) ? "0" + remainingSeconds : remainingSeconds;

        return minutes + ":" + remainingSeconds;
    }

    // $(document).ready(function() {
    //     var fifteenMinutes = 60 * 15;
    //     var display = $('#timer');
    //     startTimerWhenStopped(fifteenMinutes, display);
    // });

    function timeSession() {
        var fiveMinutes = 60 * 15,
            display = $('#time');
        startTimerWhenStopped(fiveMinutes, display);
    }

    function logout() {
        // Menggunakan AJAX untuk logout
        $.ajax({
            url: "{{ url('logout') }}",
            type: 'GET', // Metode HTTP yang digunakan
            success: function(response) {
                // Redirect ke halaman utama atau halaman login setelah berhasil logout
                window.location.href = '/error';
            },
            error: function(xhr, status, error) {
                // Handling error jika diperlukan
                console.error(xhr.responseText);
            }
        });
    }
</script>
