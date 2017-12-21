<style>
    section button {
        display: block;
        width: 100%;
        height: 200px;
        margin: 20px;
        font-size: 50px;
        color: white;
    }

</style>

<section class="lockcontent">
    <button onclick="teachers_btn()">Teachers</button>
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
                "teachers.php", "",
                function(data) {
                    $('body').html(data);

                }
            );
        }

    </script>
