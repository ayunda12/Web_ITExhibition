<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assetadmin/') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assetadmin/') }}/img/favicon.png">
    <title>
        IT Exhibition
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assetadmin/') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assetadmin/') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assetadmin/') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" crossorigin="anonymous"></script>
    {{-- <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet" /> --}}
    <link href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href=" https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('assetadmin/') }}/css/argon-dashboard.css" rel="stylesheet" />
    @yield('css')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    {{-- sidebar --}}
    @include('admin.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('body')

            @include('admin.footer')
        </div>
    </main>
    <div class="fixed-plugin">
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assetadmin/') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assetadmin/') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assetadmin/') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assetadmin/') }}/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('assetadmin/') }}/js/plugins/chartjs.min.js"></script>
    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>

    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                select: true
            });
        });

        function harusHuruf(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
                return false;
            return true;
        }
    </script>
    @include('sweetalert::alert')

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assetadmin/') }}/js/argon-dashboard.min.js"></script>
    <script src="{{ asset('assetslogin/') }}/js/main.js"></script>
    @yield('js')
</body>

</html>
