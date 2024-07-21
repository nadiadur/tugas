{{-- java script --}}

<script src="{{ asset('template/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/assets/js/app.js') }}"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/js/pages/dashboard.js') }}"></script>
            
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var submenu = document.querySelector('.has-sub .submenu');
            var toggle = document.querySelector('.toggle-submenu');
            
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                if (submenu.style.display === 'none') {
                    submenu.style.display = 'block';
                } else {
                    submenu.style.display = 'none';
                }
            });
    
            // Ensure submenu is open if any submenu item is active
            if (document.querySelector('.submenu-item.active')) {
                submenu.style.display = 'block';
            }
        });
    </script>