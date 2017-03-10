<htm>
    <head>
    </head>
    <style>
        br {
            line-height:5px;
        }
    </style>
    <body>
        <form>
            <table>
                <tr>
                    <td><input type="text" name="t1_0" onchange="formatCells(this.value, 't1')"></td>
<!--                    <td><input type="text" name="t1_1"></td>
                    <td><input type="text" name="t1_2"></td>
                    <td><input type="text" name="t1_3"></td>
                    <td><input type="text" name="t1_4"></td>-->
                </tr>
                <tr>
                    <td><input type="text" name="t2_0" onchange="formatCells(this.value, 't2')"></td>
                    <td><input type="text" name="t1_1"></td>
                    <td><input type="text" name="t1_2"></td>
                    <td><input type="text" name="t1_3"></td>
                    <td><input type="text" name="t1_4"></td>
                </tr>
            </table>
        </form>
        <script type="text/javascript">
            function formatCells(xls, group) {
                var arrGroup = xls.split(" ");
                for (var i = 0; i < arrGroup.length; i++) {
                    document.forms[0].elements[group + "_" + i].value = arrGroup[i];
                }
            }
        </script>

        <?php echo -500 + 100 - 95 - (-99); ?>


        <?php
        if (is_numeric("a100.1")) {
             echo "true";
        }
        ?>
    </body>
</htm>