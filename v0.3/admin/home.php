<style>
    section {
        padding: 20px;

    }

    section button {
        display: block;
        width: 100%;
        height: 200px;
        font-size: 50px;
        color: white;
    }

</style>

<section class="lockcontent">
    <button onclick="teachers_btn()">Teachers Page</button>
    <button id="fdsds">gfgfgf</button>
    <button id="fgfgfg">ghghgh</button>
</section>
<?php
    require '../js.php' ;
    jquery(1);
    ?>
    <script>
        function teachers_btn() {
            $.post(
                "teachers/teachers.php", "",
                function(data) {
                    $('body').html(data);

                }
            );
        }

    </script>