<!-- General JS Scripts -->
<script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
<script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
<script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
<script src="https://demo.getstisla.com/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="https://demo.getstisla.com/assets/modules/jquery.sparkline.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/chart.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.js"></script>
<script src="https://demo.getstisla.com/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

{{-- JQUERY
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}

<!-- Page Specific JS File -->
<script src="https://demo.getstisla.com/assets/js/page/index.js"></script>

<!-- Template JS File -->
<script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
<script src="https://demo.getstisla.com/assets/js/custom.js"></script>

{{-- SweetAlert
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('.delete').click(function() {
        var informasiid = $(this).attr('data-id');
        swal({
                title: "Yakin ?",
                text: "Apakah anda yakin ingin menghapus informasi ini ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deleteinfromasi/" + informasiid + ""
                    swal("Informasi berhasil di hapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Informasi tidak terhapus!");
                }
            });

    });
</script> --}}
</body>

</html>
