<!-- Phần Footer -->

<!-- Scripts -->
<script src="./assets/js/node_modules/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {

        dateFormat: "d-m-Y",
        minDate: "today",
        disableMobile: "true"
    }
    flatpickr("input[type=datetime-local]", config);
</script>

<script>
    $("#submit").click(function() {

        $.post($("#form").attr("action"),
            $("#form :input").serializeArray(),
            function(info) {

                $("#response").empty();
                $("#response").html(info);

            });

        $("#form").submit(function() {
            return false;
        });
    });
</script>


</body>

</html>