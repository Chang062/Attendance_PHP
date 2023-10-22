<div class="footer">
    <?php
    echo "<p> Copyright &copy; Fall Semester " . date("Y") . " Learning PHP</p>";
    ?>
</div>
<link rel=" stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-300:+0",
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<style>
    .footer {
        overflow: hidden;

        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .navbar a:hover {
        background: #000137;
        color: white;
    }

    .form-group {
        margin-bottom: 25px
    }

    h1.heading {
        font-family: "Times New Roman", Times, serif;
        font-style: oblique;
    }
</style>

</body>

</html>