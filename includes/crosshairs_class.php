<?php
    class crosshairs extends dbconnect {
        public function showCrosshairs() {
            $sql = "SELECT * FROM `crosshairs` ORDER BY downloads DESC, id ASC;";
            $res = $this->connect()->query($sql);
            if($res->num_rows>0) {
                while($row = $res->fetch_array()) {
                    echo "<div class='card'>";

                        echo "<div class='crossimgs'>";
                            echo "<div class='imgtop'>";
                                echo "<img src='img/crosshairs/$row[0].png' loading='lazy' alt='crosshair_id_$row[0]'>";
                                echo "<img src='img/crosshairs/$row[0].png' loading='lazy' alt='crosshair_id_$row[0]'>";
                            echo "</div>";
                            echo "<div class='imgbottom'>";
                                echo "<img src='img/crosshairs/$row[0].png' loading='lazy' alt='crosshair_id_$row[0]'>";
                                echo "<img src='img/crosshairs/$row[0].png' loading='lazy' alt='crosshair_id_$row[0]'>";
                            echo "</div>";
                        echo "</div>";

                        echo "<div class='downloadform'>";
                            echo "<form action='src/download.php?crosshair_id=$row[0]' method='POST'>";
                                echo "<button type='submit'><i class='fa-solid fa-download'></i> Pobierz</button>";
                            echo "</form>";
                        echo "</div>";

                        echo "<div>";
                            echo "<p>Ilość pobrań: $row[1]</p>";
                        echo "</div>";

                    echo "</div>";
                }
            } else {
                echo "NULL ZYXELPRAWKO";
            }
        }

        public function downloadCrosshair($page){}
    }
?>